<?php

use Illuminate\Database\Seeder;

class OfferTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_types')->insert([
            'name' => "Predaj",
            'slug' => "predaj",
            'description' => "desc"
        ]);

        DB::table('offer_types')->insert([
            'name' => "Kúpa",
            'slug' => "kupa",
            'description' => "desc"
        ]);

        DB::table('offer_types')->insert([
            'name' => "Ponúkam prenájom",
            'slug' => "ponukam-prenajom",
            'description' => "desc"
        ]);

        DB::table('offer_types')->insert([
            'name' => "Hľadám prenájom",
            'slug' => "hladam-prenajom",
            'description' => "desc"
        ]);

        DB::table('offer_types')->insert([
            'name' => "Výmena",
            'slug' => "vymena",
            'description' => "desc"
        ]);

        DB::table('offer_types')->insert([
            'name' => "Dražba",
            'slug' => "drazba",
            'description' => "desc"
        ]);

    }
}
