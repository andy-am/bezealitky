<?php

use Illuminate\Database\Seeder;

class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kinds')->insert([
            'name' => "Byt",
            'slug' => "byt",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Dom",
            'slug' => "dom",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Objekt",
            'slug' => "objekt",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Priestor",
            'slug' => "priestor",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Rekreačný dom",
            'slug' => "rekreacny-dom",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Pozemok",
            'slug' => "pozemok",
            'description' => "desc"
        ]);

        DB::table('kinds')->insert([
            'name' => "Garáž",
            'slug' => "garaz",
            'description' => "desc"
        ]);
    }
}
