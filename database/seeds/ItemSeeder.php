<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $count = 30;
        $faker = Faker::create();
        for ($i=0; $i<$count; $i++){
            DB::table('items')->insert([
                //'id' => 1,
                'creator_id' => $faker->numberBetween(1,2),
                'item_kind_id' => $faker->numberBetween(1,3),
                'item_type_id' => $faker->numberBetween(1,3),
                'window_type_id' => $faker->numberBetween(1,3),
                'item_offer_id' => $faker->numberBetween(1,3),
                'thing_id' => $faker->numberBetween(1,3),
                'construction_type_id' => $faker->numberBetween(1,3),
                'heating_type_id' => $faker->numberBetween(1,3),
                'availability_from' => "2016-10-04 11:11:11",
                'price' => $faker->numberBetween(50000,150000),
                'deposit' => $faker->numberBetween(500,1500),
                'commission' => $faker->numberBetween(50,150),
                'room' => $faker->numberBetween(1,50),
                'country' => $faker->country,
                'county' => "Nitriansky",
                'district' => "Topolcany",
                'street' => "D.Jurkoviča",
                'street_number' => $faker->numberBetween(1,100),
                'zip' => 95503,
                'city' => $faker->city,
                'usable_area' => 23,
                'title' => "Some Title",
                'description' => "Some description",
                'longitude' => 'string',
                'latitude' => 'string',
                'floor' => $faker->numberBetween(1,100),
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
}
