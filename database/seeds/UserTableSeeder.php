<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'pre_title' => "Mgr.",
            'first_name' => "Andrej",
            'last_name' => "Májik",
            "country" => "Slovakia",
            "street" => "D.Jurkoviča",
            "street_number" => "2404/26",
            "zip" => "95503",
            "city" => "Slovakia",
            "note" => "note",
            "country" => "Slovakia",
            'email' => "a.majik7@gmail.com",
            'phone' => "0904037790",
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => "Michal",
            'last_name' => "Gašparík",
            "country" => "Slovakia",
            "street" => "Neviem",
            "street_number" => "212/12",
            "zip" => "00000",
            "city" => "Bánovce nad Bebravou",
            "note" => "note",
            "country" => "Slovakia",
            'email' => "mgasparik@icloud.com",
            'phone' => "0901000000",
            'password' => bcrypt('password'),
        ]);
    }
}
