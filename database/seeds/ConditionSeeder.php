<?php

use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
            'name' => "Francúzske",
            'slug' => "francuzske",
            'description' => "desc"
        ]);
    }
}
