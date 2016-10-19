<?php

use Illuminate\Database\Seeder;

class WindowTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('window_types')->insert([
            'name' => "Francúzske",
            'slug' => "francuzske",
            'description' => "desc"
        ]);

        DB::table('window_types')->insert([
            'name' => "Plastové",
            'slug' => "plastove",
            'description' => "desc"
        ]);

        DB::table('window_types')->insert([
            'name' => "Drevené",
            'slug' => "drevene",
            'description' => "desc"
        ]);

    }
}
