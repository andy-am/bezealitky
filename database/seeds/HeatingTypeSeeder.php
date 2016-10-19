<?php

use Illuminate\Database\Seeder;

class HeatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heating_types')->insert([
            'name' => "Podlahové",
            'slug' => "podlahove",
            'description' => "desc"
        ]);

        DB::table('heating_types')->insert([
            'name' => "Plynové",
            'slug' => "plynové",
            'description' => "desc"
        ]);

        DB::table('heating_types')->insert([
            'name' => "Radiátor",
            'slug' => "radiator",
            'description' => "desc"
        ]);
    }
}
