<?php

namespace Corals\Modules\Places\database\seeds;

use Corals\Menu\Models\Menu;
use Corals\Settings\Models\Setting;
use Corals\User\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PlacesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlacesPermissionsDatabaseSeeder::class);
        $this->call(PlacesMenuDatabaseSeeder::class);
        $this->call(PlacesSettingsDatabaseSeeder::class);
        $this->call(PlacesTypesTableSeeder::class);
    }

    public function rollback()
    {
        Permission::where('name', 'like', 'Places::%')->delete();

        Menu::where('key', 'places')
            ->orWhere('active_menu_url', 'like', 'placess%')
            ->orWhere('url', 'like', 'placess%')
            ->delete();

        Setting::where('type', 'Places')->delete();

        Media::whereIn('collection_name', ['places-media-collection'])->delete();
    }
}
