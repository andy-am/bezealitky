<?php

use Illuminate\Database\Seeder;

class ItemOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_offers')->insert([
            'name' => "Predaj",
            'slug' => "predaj",
            'description' => "desc"
        ]);

        DB::table('item_offers')->insert([
            'name' => "Kúpa",
            'slug' => "kupa",
            'description' => "desc"
        ]);

        DB::table('item_offers')->insert([
            'name' => "Ponúkam prenájom",
            'slug' => "ponukam-prenajom",
            'description' => "desc"
        ]);

        DB::table('item_offers')->insert([
            'name' => "Hľadám prenájom",
            'slug' => "hladam-prenajom",
            'description' => "desc"
        ]);

        DB::table('item_offers')->insert([
            'name' => "Výmena",
            'slug' => "vymena",
            'description' => "desc"
        ]);

        DB::table('item_offers')->insert([
            'name' => "Dražba",
            'slug' => "drazba",
            'description' => "desc"
        ]);

    }
}
