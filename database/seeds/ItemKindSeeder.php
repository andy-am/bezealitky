<?php

use Illuminate\Database\Seeder;

class ItemKindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_kinds')->insert([
            'id' => 1,
            'name' => "Byt",
            'slug' => "byt",
            'description' => "desc"
        ]);

        DB::table('item_kinds')->insert([
            'id' => 2,
            'name' => "Dom",
            'slug' => "dom",
            'description' => "desc"
        ]);

        DB::table('item_kinds')->insert([
            'id' => 3,
            'name' => "Objekt",
            'slug' => "objekt",
            'description' => "desc"
        ]);

        DB::table('item_kinds')->insert([
            'id' => 4,
            'name' => "Priestor",
            'slug' => "priestor",
            'description' => "desc"
        ]);

        DB::table('item_kinds')->insert([
            'id' => 5,
            'name' => "Rekreačný dom",
            'slug' => "rekreacny-dom",
            'description' => "desc"
        ]);

        DB::table('item_kinds')->insert([
            'id' => 6,
            'name' => "Pozemok",
            'slug' => "pozemok",
            'description' => "desc"
        ]);

    }
}
