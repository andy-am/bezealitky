<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

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
            "about_me" => $this->loremIpsum,
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
            "about_me" => $this->loremIpsum,
            "note" => "note",
            "country" => "Slovakia",
            'email' => "mgasparik@icloud.com",
            'phone' => "0901000000",
            'password' => bcrypt('password'),
        ]);
    }
}
