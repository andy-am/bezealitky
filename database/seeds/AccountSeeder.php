<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('account_types')->insert([
            'name' => "Admin",
            'slug' => "admin",
            'description' => "desc"
        ]);

        DB::table('account_types')->insert([
            'name' => "Operátor",
            'slug' => "operator",
            'description' => "desc"
        ]);

        DB::table('account_types')->insert([
            'name' => "Member",
            'slug' => "member",
            'description' => "desc"
        ]);

        DB::table('account_types')->insert([
            'name' => "Fre-paying",
            'slug' => "fre-paying",
            'description' => "desc"
        ]);


    }
}
