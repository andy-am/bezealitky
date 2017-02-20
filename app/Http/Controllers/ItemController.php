<?php

namespace App\Http\Controllers;

use App\City;
use App\ConstructionType;
use App\Country;
use App\County;
use App\District;
use App\HeatingType;
use App\Item;
use App\ItemKind;
use App\ItemOffer;
use App\Street;
use App\Thing;
use App\WindowType;
use App\Zip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Psy\Util\Str;

class ItemController extends Controller
{
    /**
     * Index
     */
    public function detail($id)
    {
        $flat = Item::find($id);
        //dump($flat);die();

        //dd($flat);

        return view('item.detail', ['flat' => $flat]);
    }

    public function create()
    {
        $offers = ItemOffer::all()->sortBy("name");
        $kinds = ItemKind::all()->sortBy("name");
        $things = Thing::all()->sortBy("name");
        $windows = WindowType::all()->sortBy("name");
        $constructions = ConstructionType::all()->sortBy("name");
        $heatings = HeatingType::all()->sortBy("name");
        return view('item.flat-add',["kinds"=> $kinds, "offers" => $offers, "things" => $things, "windows" => $windows,
        "heatings" => $heatings, "constructions" => $constructions,  ] );
    }

    public function store(Request $request)
    {
        unset($request["_token"]);
        //dump($request->all());

        $rules = [
            'offer_type' => 'required',
            'kind' => 'required',
            'title' => 'required',
            'description' => 'required',
            'thing_id' => 'required',
            'room' => 'required',
            'usable_area' => 'required',
            'window_type_id' => 'required',
            'construction_type_id' => 'required',
            'heating_type_id' => 'required',
            'street' => 'required',
            'heating_type_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        return response()->json(["json som"], 200);
    }

    public function apiGetCountries(Request $request){
        $term = $request->get("term");
        $term = $term["term"];

        $countries = Country::where("name","LIKE", "%" . $term . "%")->get();

        foreach ($countries AS $country) {
            $result[] = [
                'id' => $country->id,
                'text' => $country->name
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }

    public function apiGetCounties(Request $request){
        $term = $request->get("term");
        $term = $term["term"];
        $country_id = ($request->get("country")) ? $request->get("country") : null;

        if(!is_null($country_id)){
            $counties = County::where("name","LIKE", "%" . $term . "%")->where("country_id", $country_id)->get();
        }else{
            $counties = County::where("name","LIKE", "%" . $term . "%")->get();
        }

        foreach ($counties AS $county) {
            $result[] = [
                'id' => $county->id,
                'text' => $county->name
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }

    public function apiGetDistricts(Request $request){
        $term = $request->get("term");
        $term = $term["term"];;
        $county_id = ($request->get("county")) ? $request->get("county") : null;

        if(!is_null($county_id)){
            $districts = District::where("name","LIKE", "%" . $term . "%")->where("county_id", $county_id)->get();
        }else{
            $districts = District::where("name","LIKE", "%" . $term . "%")->get();
        }

        foreach ($districts AS $district) {
            $result[] = [
                'id' => $district->id,
                'text' => $district->name
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }

    public function apiGetCities(Request $request){
        $term = $request->get("term");
        $term = $term["term"];
        $district_id = ($request->get("district")) ? $request->get("district") : null;

        if(!is_null($district_id)){
            $cities = City::where("name","LIKE", "%" . $term . "%")->where("district_id", $district_id)->get();
        }else{
            $cities = City::where("name","LIKE", "%" . $term . "%")->get();
        }

        foreach ($cities AS $city) {
            $result[] = [
                'id' => $city->id,
                'text' => $city->name
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }

    public function apiGetStreets(Request $request){
        $term = $request->get("term");
        $term = $term["term"];
        $city_id = ($request->get("city")) ? $request->get("city") : null;

        if(!is_null($city_id)){
            $streets = Street::where("name","LIKE", "%" . $term . "%")->where("city_id", $city_id)->get();
        }else{
            $streets = Street::where("name","LIKE", "%" . $term . "%")->get();
        }

        foreach ($streets AS $street) {
            $city = City::find($street->city_id);
            $append = (!is_null($city)) ? " - " . $city->name : "" ;
            $result[] = [
                'id' => $street->id,
                'text' => $street->name . $append
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }

    public function apiGetZips(Request $request){
        $term = $request->get("term");
        $term = $term["term"];

        $zips = Zip::where("number","LIKE", "%" . $term . "%")->get();

        foreach ($zips AS $zip) {
            $city = City::find($zip->city_id);
            $append = (!is_null($city)) ? " - " . $city->name : "" ;
            $result[] = [
                'id' => $zip->id,
                'text' => $zip->number . $append
            ];
        }

        return Response()->json(['results' => isset($result) ? $result : [] ]);
    }


    public function apiGetCityByStreet($id){

        $city_id = Street::find($id)->city_id;

        $city = City::find($city_id);

        return Response()->json( ["id"=> $city->id, "name"=> $city->name] );
    }


    public function apiGetDistrictByCity($id){

        $district_id = City::find($id)->district_id;

        $district = District::find($district_id);

        return Response()->json( ["id"=> $district->id, "name"=> $district->name] );
    }

    public function apiGetCountyByDistrict($id){

        $county_id = District::find($id)->county_id;

        $county = County::find($county_id);

        return Response()->json( ["id"=> $county->id, "name"=> $county->name] );
    }

    public function apiGetCountryByCounty($id){

        $country_id = County::find($id)->country_id;

        $country = Country::find($country_id);

        return Response()->json( ["id"=> $country->id, "name"=> $country->name] );
    }
}
