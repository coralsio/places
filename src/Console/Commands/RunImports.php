<?php

namespace Corals\Modules\Places\Console\Commands;

use Corals\Modules\Directory\Models\Listing;
use Corals\Modules\Places\Models\Import;
use Illuminate\Console\Command;
use SKAgarwal\GoogleApi\PlacesApi;

class RunImports extends Command
{
    protected $signature = 'listing:import';
    protected $description = 'Fetch Pending Google Place Imports to Dorectory listings';

    public function handle()
    {
        return $this->processImports();
    }

    public function processImports()
    {
        $running_import = Import::where('status', 'in_progress')->first();
        if ($running_import) {
            $this->info("There is already running import process ");

            return false;
        }

        $import = Import::pending()->orderBy('created_at', 'asc')->first();
        if (! $import) {
            $this->info("There is no Pending imports");

            return true;
        }


        try {
            $this->info("Running Import: " . $import->title);


            //$import->status = 'in_progress';
            $import->notes = '';
            $import->save();


            $params = ['fields' => 'photos,formatted_address,name,opening_hours,rating'];

            if ($import->keyword) {
                $params['keyword'] = $import->keyword;
            }

            if ($import->type_id) {
                $params['type'] = $import->type->name;
            }

            $imported_pages = 0;


            $googlePlaces = new PlacesApi(\Settings::get('places_google_api_key'));

            while ($imported_pages < $import->max_result_pages) {
                if (isset($response) && isset($response['next_page_token'])) {
                    $this->info('Next Page Token #:' . $response['next_page_token']);
                    $params['pagetoken'] = $response['next_page_token'];
                }


                $response = $googlePlaces->nearbySearch($import->location->lat . "," . $import->location->long, $import->radius, $params);


                if ($response['results']) {
                    $this->info('Import Page #:' . ($imported_pages + 1));
                    foreach ($response['results'] as $result) {
                        $listing = new Listing();
                        $listing->name = $result['name'];
                        $this->info('Import Listing : ' . $result['name']);
                        $listing->location_id = $import->location_id;
                        $listing->lat = $result['geometry']['location']['lat'];
                        $listing->long = $result['geometry']['location']['lng'];
                        $listing->address = $result['vicinity'];

                        $listing->save();

                        $listing->categories()->sync([$import->category_id]);
                        $import->listings()->sync($listing, false);

                        if ($import->image_count > 0) {
                            $photo_index = 0;
                            while ($photo_index < $import->image_count) {
                                try {
                                    if (isset($result['photos'], $result['photos'][$photo_index])) {
                                        $image_response = $googlePlaces->photo($result['photos'][$photo_index]['photo_reference'], ['maxwidth' => 1920]);

                                        if ($image_response) {
                                            if ($photo_index == 0) {
                                                $listing->addMediaFromUrl($image_response)->withCustomProperties(['root' => 'google_places_media_import', 'featured' => true])->toMediaCollection($listing->galleryMediaCollection);
                                            } else {
                                                $listing->addMediaFromUrl($image_response)->withCustomProperties(['root' => 'google_places_media_import'])->toMediaCollection($listing->galleryMediaCollection);
                                            }
                                        }
                                    }
                                } catch (\Exception $exception) {
                                    $this->error($exception->getMessage());
                                }
                                $photo_index++;
                            }
                        }
                    }
                }
                sleep(5);
                $imported_pages++;
            }


            $this->info("Finishing Import: " . $import->title);

            $import->status = 'completed';
            $import->save();
        } catch (\Exception $exception) {
            $error = $exception->getMessage();

            $this->error("Error while importing : " . $error);
            $import->notes = $exception->getMessage();
            $import->status = 'failed';
            $import->save();
            log_exception($exception, Import::class, 'import');
        }
    }
}
