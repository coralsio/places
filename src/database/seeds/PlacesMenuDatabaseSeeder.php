<?php

namespace Corals\Modules\Places\database\seeds;

use Illuminate\Database\Seeder;

class PlacesMenuDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places_menu_id = \DB::table('menus')->insertGetId([
            'parent_id' => 1,// admin
            'key' => 'places',
            'url' => null,
            'active_menu_url' => 'places*',
            'name' => 'Google Places',
            'description' => 'Places Menu Item',
            'icon' => 'fa fa-google',
            'target' => null, 'roles' => '["1","2"]',
            'order' => 0,
        ]);

        // seed subscriptions children menu
        \DB::table('menus')->insert(
            [
                [
                    'parent_id' => $places_menu_id,
                    'key' => null,
                    'url' => config('places.models.import.resource_url'),
                    'active_menu_url' => config('places.models.import.resource_url') . '*',
                    'name' => 'Imports',
                    'description' => 'Imports List Menu Item',
                    'icon' => 'fa fa-upload',
                    'target' => null, 'roles' => '["1"]',
                    'order' => 0,
                ],
            ]
        );
        // seed users children menu
        \DB::table('menus')->insert(
            [
                [
                    'parent_id' => $places_menu_id,
                    'key' => null,
                    'url' => 'places/settings',
                    'active_menu_url' => 'places/settings*',
                    'name' => 'Places Settings',
                    'description' => 'Places Settings Menu Item',
                    'icon' => 'fa fa-cog fa-fw',
                    'target' => null,
                    'roles' => '["1"]',
                    'order' => 0,
                ],
            ]
        );
    }
}
