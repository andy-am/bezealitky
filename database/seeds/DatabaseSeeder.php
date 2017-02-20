<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Country;
use App\County;
use App\District;
use App\Zip;
use App\Street;
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
        //$this->saveDependencies();
        $this->saveDependencies2();

    }

    /*public function saveDependencies()
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

    }*/


    public static function seedCountries(){

        $countriesCsv = base_path() . "/public/countries.csv";

        $hnd = fopen($countriesCsv, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
            $country = ($row[0]); // country
            Country::create(["name" => $country, "slug"=>Str::slug($country)]);
        }

        dump("Countries are DONE!");

    }


    public static function seedCounties(){

        $countiesCsv = base_path() . "/public/counties.csv";
        $slovakiaId = 156;

        $hnd = fopen($countiesCsv, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
            $country = $row[0];
            $code = $row[1];
            County::create(["name" => $country, "slug"=>Str::slug($country), "code" => $code , "country_id"=> $slovakiaId]);
        }

        dump("Counties are DONE!");
    }

    public static function seedDistricts(){

        $countiesCsv = base_path() . "/public/obce_2csv.csv";

        $hnd = fopen($countiesCsv, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, "\t")) {
            $districtName = $row[1];
            $code = $row[3];

            $district = District::where("name", $districtName)->first();

            if (is_null($district)) {
                $districtSlug = Str::slug($districtName);
                $codeName = self::getCodename($districtSlug);
                District::create(["name" => $districtName, "slug" => $districtSlug, "code"=> $codeName, "county_id" => self::getCountyId($code)]);
            }
        }

        dump("Districts are DONE!");
    }

    public static function seedCities(){

        $countiesCsv = base_path() . "/public/obce_2csv.csv";

        $hnd = fopen($countiesCsv, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, "\t")) {
            $cityName = $row[0];
            $districtSlug = Str::slug($row[1]);
            //$code = $row[3];

            $city = City::where("name", $cityName)->first();

            if (is_null($city)) {
                $slug = Str::slug($cityName);
                City::create(["name" => $cityName, "slug" => $slug, "district_id" => self::getDistrictId($districtSlug)]);
            }
        }

        dump("Cities are DONE!");
    }

    public static function seedStreets(){

        $countiesCsv = base_path() . "/public/ulice_2csv.csv"; // TODO

        $hnd = fopen($countiesCsv, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, "\t")) {

            $zip = $row[1];

            if(empty($zip) || $zip == "") continue;

            $streetName = $row[0];
            $citySlug = Str::slug($row[3]);



            $slug = Str::slug($streetName);

                Street::create(["name" => $streetName, "slug" => $slug, "zip" => $zip, "city_id" => self::getCityId($citySlug)]);

        }

        dump("Streets are DONE!");
    }

    public static function getCountyId($code){
        return County::where("code", $code)->first()->id;
    }

    public static function getDistrictId($slug){
        return District::where("slug", $slug)->first()->id;
    }

    public static function getCityId($slug){
        return City::where("slug", $slug)->first()->id;
    }

    public function saveDependencies2(){
        $startTime = microtime(true);
        dump("Start Time: " . $startTime);
        dump("---------------------");

        self::seedCountries();
        self::seedCounties();
        self::seedDistricts();
        self::seedCities();
        self::seedStreets();

        $endTime = microtime(true);

        dump("End Time: " . $endTime);
        dump("---------------------");
        $duration = $endTime - $startTime;
        dump("Duration: " . round($duration) . " seconds");
        dump("-----ALL IS DONE-----");


    }

    public static function getCodename($slugName){
        $okresy = base_path() . "/public/okresy.csv";

        $hnd = fopen($okresy, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
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
