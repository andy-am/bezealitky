<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\County;
use App\District;
use App\User;
use Illuminate\Support\Str;


class UserController extends Controller
{

    public function profile($id)
    {
        $user = User::find($id);
        if (!$user == null) {
            //$roles = Role::where('title', '!=', 'Super Admin')->get();
            //return View('admin.user.edit', compact(['data', 'roles']));
            return view('user.profile', ["user" => $user]);
        } else {
            return View('errors.404');
        }
    }

    public function saveDependencies()
    {
        die();
        $countries = base_path() . "/public/countries.csv";

        $hnd = fopen($countries, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }

        while ($row = fgetcsv($hnd, 0, ",")) {
            $country = ($row[0]); // country
            Country::create(["name"=>$country, "slug"=>Str::slug($country)]);
        }

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


            $district = District::where("name", $districtName)->first();
            $county = County::where("name", $countyName)->first();

            if (is_null($county)) {
                $county = County::create(["name" => $countyName, "slug" => Str::slug($countyName),"country_id" => $slovakiaId]);
                $countyId = $county->id;
            } else {
                $countyId = $county->id;
            }

            if (is_null($district)) {
                $district = District::create(["name" => $districtName, "slug" => Str::slug($districtName),"county_id" => $countyId]);
                $districtId = $district->id;
            } else {
                $districtId = $district->id;
            }



            City::create(["name" => $cityName, "slug" => Str::slug($cityName), "district_id" => $districtId, "district_id" => $districtId]);

        }
        return "DONE!";

    }

}
