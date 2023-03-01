<?php

namespace Corals\Modules\Places\database\seeds;

use Illuminate\Database\Seeder;

class PlacesTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('places_types')->delete();

        \DB::table('places_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'airport',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'amusement_park',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'aquarium',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'art_gallery',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'atm',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'bakery',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'bank',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'bar',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'beauty_salon',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'bicycle_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'book_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'bowling_alley',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'bus_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'cafe',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'campground',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'car_dealer',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'car_rental',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            17 =>
                array(
                    'id' => 18,
                    'name' => 'car_repair',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'car_wash',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'casino',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'cemetery',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'church',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'city_hall',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'clothing_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'convenience_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            25 =>
                array(
                    'id' => 26,
                    'name' => 'courthouse',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            26 =>
                array(
                    'id' => 27,
                    'name' => 'dentist',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            27 =>
                array(
                    'id' => 28,
                    'name' => 'department_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            28 =>
                array(
                    'id' => 29,
                    'name' => 'doctor',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            29 =>
                array(
                    'id' => 30,
                    'name' => 'electrician',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            30 =>
                array(
                    'id' => 31,
                    'name' => 'electronics_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            31 =>
                array(
                    'id' => 32,
                    'name' => 'embassy',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            32 =>
                array(
                    'id' => 33,
                    'name' => 'fire_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            33 =>
                array(
                    'id' => 34,
                    'name' => 'florist',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            34 =>
                array(
                    'id' => 35,
                    'name' => 'funeral_home',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            35 =>
                array(
                    'id' => 36,
                    'name' => 'furniture_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            36 =>
                array(
                    'id' => 37,
                    'name' => 'gas_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            37 =>
                array(
                    'id' => 38,
                    'name' => 'gym',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            38 =>
                array(
                    'id' => 39,
                    'name' => 'hair_care',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            39 =>
                array(
                    'id' => 40,
                    'name' => 'hardware_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            40 =>
                array(
                    'id' => 41,
                    'name' => 'hindu_temple',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            41 =>
                array(
                    'id' => 42,
                    'name' => 'home_goods_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            42 =>
                array(
                    'id' => 43,
                    'name' => 'hospital',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            43 =>
                array(
                    'id' => 44,
                    'name' => 'insurance_agency',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            44 =>
                array(
                    'id' => 45,
                    'name' => 'jewelry_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            45 =>
                array(
                    'id' => 46,
                    'name' => 'laundry',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            46 =>
                array(
                    'id' => 47,
                    'name' => 'lawyer',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            47 =>
                array(
                    'id' => 48,
                    'name' => 'library',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            48 =>
                array(
                    'id' => 49,
                    'name' => 'liquor_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            49 =>
                array(
                    'id' => 50,
                    'name' => 'local_government_office',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            50 =>
                array(
                    'id' => 51,
                    'name' => 'locksmith',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            51 =>
                array(
                    'id' => 52,
                    'name' => 'lodging',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            52 =>
                array(
                    'id' => 53,
                    'name' => 'meal_delivery',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            53 =>
                array(
                    'id' => 54,
                    'name' => 'meal_takeaway',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            54 =>
                array(
                    'id' => 55,
                    'name' => 'mosque',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            55 =>
                array(
                    'id' => 56,
                    'name' => 'movie_rental',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            56 =>
                array(
                    'id' => 57,
                    'name' => 'movie_theater',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            57 =>
                array(
                    'id' => 58,
                    'name' => 'moving_company',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            58 =>
                array(
                    'id' => 59,
                    'name' => 'museum',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            59 =>
                array(
                    'id' => 60,
                    'name' => 'night_club',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            60 =>
                array(
                    'id' => 61,
                    'name' => 'painter',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            61 =>
                array(
                    'id' => 62,
                    'name' => 'park',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            62 =>
                array(
                    'id' => 63,
                    'name' => 'parking',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            63 =>
                array(
                    'id' => 64,
                    'name' => 'pet_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            64 =>
                array(
                    'id' => 65,
                    'name' => 'pharmacy',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            65 =>
                array(
                    'id' => 66,
                    'name' => 'physiotherapist',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            66 =>
                array(
                    'id' => 67,
                    'name' => 'plumber',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            67 =>
                array(
                    'id' => 68,
                    'name' => 'police',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            68 =>
                array(
                    'id' => 69,
                    'name' => 'post_office',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            69 =>
                array(
                    'id' => 70,
                    'name' => 'real_estate_agency',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            70 =>
                array(
                    'id' => 71,
                    'name' => 'restaurant',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            71 =>
                array(
                    'id' => 72,
                    'name' => 'roofing_contractor',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            72 =>
                array(
                    'id' => 73,
                    'name' => 'rv_park',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            73 =>
                array(
                    'id' => 74,
                    'name' => 'school',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            74 =>
                array(
                    'id' => 75,
                    'name' => 'shoe_store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            75 =>
                array(
                    'id' => 76,
                    'name' => 'shopping_mall',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            76 =>
                array(
                    'id' => 77,
                    'name' => 'spa',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            77 =>
                array(
                    'id' => 78,
                    'name' => 'stadium',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            78 =>
                array(
                    'id' => 79,
                    'name' => 'storage',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            79 =>
                array(
                    'id' => 80,
                    'name' => 'store',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            80 =>
                array(
                    'id' => 81,
                    'name' => 'subway_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            81 =>
                array(
                    'id' => 82,
                    'name' => 'supermarket',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            82 =>
                array(
                    'id' => 83,
                    'name' => 'synagogue',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            83 =>
                array(
                    'id' => 84,
                    'name' => 'taxi_stand',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            84 =>
                array(
                    'id' => 85,
                    'name' => 'train_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            85 =>
                array(
                    'id' => 86,
                    'name' => 'transit_station',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            86 =>
                array(
                    'id' => 87,
                    'name' => 'travel_agency',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            87 =>
                array(
                    'id' => 88,
                    'name' => 'veterinary_care',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            88 =>
                array(
                    'id' => 89,
                    'name' => 'zoo',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
            89 =>
                array(
                    'id' => 90,
                    'name' => 'accounting',
                    'status' => 'active',
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2019-04-09 13:34:23',
                    'updated_at' => '2019-04-18 13:34:26',
                ),
        ));


    }
}
