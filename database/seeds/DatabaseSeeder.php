<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThingSeeder::class);
        $this->call(ConstructionTypeSeeder::class);
        $this->call(WindowTypeSeeder::class);
        $this->call(HeatingTypeSeeder::class);
        $this->call(ItemKindSeeder::class);
        $this->call(OfferTypeSeeder::class);
        $this->call(TypeOfItemKindsSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ItemSeeder::class);

    }
}
