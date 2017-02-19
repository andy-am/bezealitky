<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Country;
use App\County;
use App\District;
use App\Zip;
use Illuminate\Support\Str;

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
        $this->saveDependencies();

    }

    public function saveDependencies()
    {
        $countries = base_path() . "/public/countries.csv";

        $hnd = fopen($countries, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
            $country = ($row[0]); // country
            Country::create(["name" => $country, "slug"=>Str::slug($country)]);
        }

        dump("Countries are DONE!");

        $slovakiaId = 156;

        $file = base_path() . "/public/xxx.csv";

        $hnd = fopen($file, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {

            $cityName = $row[0]; // mesto
            $countyName = $row[2]; // kraj
            $districtName = $row[1]; // okres
            $population = (int)str_replace(",", "", $row[3]); // pocet Ludi

            $district = District::where("name", $districtName)->first();
            $county = County::where("name", $countyName)->first();

            if (is_null($county)) {
                $county = County::create(["name" => $countyName, "slug" => Str::slug($countyName),"country_id" => $slovakiaId]);
                $countyId = $county->id;
            } else {
                $countyId = $county->id;
            }

            if (is_null($district)) {
                $districtSlug = Str::slug($districtName);
                $codeName = self::getCodename($districtSlug);

                $district = District::create(["name" => $districtName, "slug" => Str::slug($districtName), "code"=> $codeName, "county_id" => $countyId]);
                $districtId = $district->id;
            } else {
                $districtId = $district->id;
            }

            City::create(["name" => $cityName, "slug" => Str::slug($cityName), "population" => $population, "district_id" => $districtId]);

        }

        dump("Block of cities, districts, counties are DONE!");


        $zips = base_path() . "/public/zip.csv";

        $hnd = fopen($zips, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }


        while ($row = fgetcsv($hnd, 0, ",")) {
            $zip = $row[0]; // country
            $codename = strstr($zip, "(");
            $number = substr($zip, 0, 6);
            $pos = strstr($zip, "(") - 5;
            $citySlug = substr($zip, 7, $pos);
            $citySlug = Str::slug($citySlug);
            $city = City::where("slug",  $citySlug)->get();
            if($city->isEmpty())
                continue;

            Zip::create(["number" => $number, "city_id" => $city->first()->id]);
        }

        dump("ZIP IS DONE!");

        dump("-----ALL IS DONE-----");

    }

    public static function getCodename($slugName){
        $okresy = base_path() . "/public/okresy.csv";

        $hnd = fopen($okresy, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
            $name = $row[0];
            $codename = $row[1];

            if($slugName == Str::slug($row[0])){
                return $codename;
            }else if($slugName == "bratislava"){
                return "BA";
            }
            else if($slugName == "kosice"){
                return "KE";
            }


        }

    }

}
