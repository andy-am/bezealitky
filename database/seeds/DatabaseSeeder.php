<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ThingSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(ConstructionTypeSeeder::class);
        $this->call(WindowTypeSeeder::class);
        $this->call(HeatingTypeSeeder::class);
        $this->call(ItemKindSeeder::class);
        $this->call(ItemOfferSeeder::class);
        $this->call(TypeOfItemKindsSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ItemSeeder::class);

    }
}
