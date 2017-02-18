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
use App\Thing;
use App\WindowType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

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
        $countries = Country::all()->sortBy("name");
        $districts = District::all()->sortBy("name");
        $counties = County::all()->sortBy("name");
        $cities = City::all()->sortBy("name");
        return view('item.flat-add',["kinds"=> $kinds, "offers" => $offers, "things" => $things, "windows" => $windows,
        "heatings" => $heatings, "constructions" => $constructions, "districts" => $districts, "counties" => $counties,
        "cities" => $cities, "countries" => $countries ] );
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


        //Item::create([]);
        dump($request->all());


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

        return Response()->json(['results' => $result]);
    }

    public function apiGetCounties(Request $request){
        $term = $request->get("term");
        $term = $term["term"];

        $counties = County::where("name","LIKE", "%" . $term . "%")->get();

        foreach ($counties AS $county) {
            $result[] = [
                'id' => $county->id,
                'text' => $county->name
            ];
        }

        return Response()->json(['results' => $result]);
    }

    public function apiGetDistricts(Request $request){
        $term = $request->get("term");
        $term = $term["term"];

        $districts = District::where("name","LIKE", "%" . $term . "%")->get();

        foreach ($districts AS $district) {
            $result[] = [
                'id' => $district->id,
                'text' => $district->name
            ];
        }

        return Response()->json(['results' => $result]);
    }

    public function apiGetCities(Request $request){
        $term = $request->get("term");
        $term = $term["term"];

        $cities = City::where("name","LIKE", "%" . $term . "%")->get();

        foreach ($cities AS $city) {
            $result[] = [
                'id' => $city->id,
                'text' => $city->name
            ];
        }
        //dump($result);

        return Response()->json(['results' => $result]);
    }
}
