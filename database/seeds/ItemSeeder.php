<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('items')->insert([
            'id' => 1,
            'creator_id' => 1,
            'item_kind_id' => 1,
            'item_type_id' => 1,
            'window_type_id' => 1,
            'item_offer_id' => 1,
            'thing_id' => 1,
            'construction_type_id' => 1,
            'heating_type_id' => 1,
            'availability_from' => "2016-10-04 11:11:11",
            'price' => 1.00,
            'deposit' => 1.00,
            'commission' => 1.00,
            'room' => 3,
            'country' => "Slovakia",
            'county' => "Nitriansky",
            'district' => "Topolcany",
            'street' => "D.Jurkoviča",
            'street_number' => 3,
            'zip' => 95503,
            'city' => "Topoľčany",
            'residential_area' => 23,
            'title' => "Some Title",
            'description' => "Some description",
            'longitude' => 'string',
            'latitude' => 'string',
            'floor' => 2,
            'active' => 1,
            'reserve' => FALSE,
            'boiler' => TRUE,
            'garage' => TRUE,
            'pantry' => TRUE,
            'storage_room' => TRUE,
            'elevator' => TRUE,
            'air_conditioner' => TRUE,
            'disabled_access' => TRUE,
            'cellar' => TRUE,
            'approved' => TRUE,
        ]);
    }
}
