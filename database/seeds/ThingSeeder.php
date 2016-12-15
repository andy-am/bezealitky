<?php

use Illuminate\Database\Seeder;

class ThingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('things')->insert([
            'name' => "Plná rekonštrukcia",
            'slug' => "plna-rekonstrukcia",
            'description' => "desc"
        ]);

        DB::table('things')->insert([
            'name' => "Čiastočná rekonštrukcia",
            'slug' => "ciastocna-rekonstrukcia",
            'description' => "desc"
        ]);

        DB::table('things')->insert([
            'name' => "Rozostavané",
            'slug' => "rozostavane",
            'description' => "desc"
        ]);
    }
}
