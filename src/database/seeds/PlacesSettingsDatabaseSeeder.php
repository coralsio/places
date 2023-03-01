<?php

namespace Corals\Modules\Places\database\seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlacesSettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            [
                'code' => 'places_google_api_key',
                'type' => 'TEXT',
                'category' => 'Places',
                'label' => 'Google Places API  Key',
                'value' => 'AIzaSyCuCv5spK4sPB9TDhdKqQ-dGHhUssDjRRI',
                'editable' => 1,
                'hidden' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
