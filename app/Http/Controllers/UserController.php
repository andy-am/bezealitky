<?php

namespace App\Http\Controllers;

use App\City;
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

    public function saveCities()
    {
        $file = base_path() . "/public/xxx.csv";

        $hnd = fopen($file, 'r');

        if (!$hnd) {
            die('Cannot open import file');
        }
        die(); // TODO DELETE
        while ($row = fgetcsv($hnd, 0, ",")) {

            $cityName = ($row[0]); // city
            $districtName = $row[1]; // district
            $countyName = $row[2]; // county

            $district = District::where("name", $districtName)->first();
            $county = County::where("name", $countyName)->first();

            if (is_null($district)) {
                $district = District::create(["name" => $districtName, "slug" => Str::slug($districtName)]);
                $districtId = $district->id;
            } else {
                $districtId = $district->id;
            }

            if (is_null($county)) {
                $county = County::create(["name" => $countyName, "slug" => Str::slug($countyName)]);
                $countyId = $county->id;
            } else {
                $countyId = $county->id;
            }

            City::create(["name" => $cityName, "slug" => Str::slug($cityName), "district_id" => $districtId, "county_id" => $countyId]);

        }

    }

}
