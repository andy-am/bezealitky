<?php

use Illuminate\Database\Seeder;

class ConstructionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('construction_types')->insert([
            'name' => "Tehla",
            'slug' => "tehla",
            'description' => "desc"
        ]);

        DB::table('construction_types')->insert([
            'name' => "Kváder",
            'slug' => "kvader",
            'description' => "desc"
        ]);

        DB::table('construction_types')->insert([
            'name' => "Panel",
            'slug' => "panel",
            'description' => "desc"
        ]);

        DB::table('construction_types')->insert([
            'name' => "Drevo",
            'slug' => "drevo",
            'description' => "desc"
        ]);

        DB::table('construction_types')->insert([
            'name' => "Iné",
            'slug' => "ine",
            'description' => "desc"
        ]);


    }
}
