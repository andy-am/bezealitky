<?php

namespace App\Http\Controllers;

use App\ConstructionType;
use App\HeatingType;
use App\Item;
use App\ItemKind;
use App\ItemOffer;
use App\Thing;
use App\WindowType;
use Illuminate\Http\Request;
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
        $offers = ItemOffer::all();
        $kinds = ItemKind::all();
        $things = Thing::all();
        $windows = WindowType::all();
        $constructions = ConstructionType::all();
        $heatings = HeatingType::all();
        return view('item.flat-add',["kinds"=> $kinds, "offers" => $offers, "things" => $things, "windows" => $windows,
        "heatings" => $heatings, "constructions" => $constructions] );
    }

    public function store(Request $request)
    {
        unset($request["_token"]);
        dump($request->all());die();

        $rules = [
            'offer_type' => 'required',
            'kind' => 'required',
            'title' => 'required',
            'description' => 'required',
            'thing_id' => 'required',
            'room' => 'required',
            'residential_area' => 'required',
            'window_type_id' => 'required',
            'construction_type_id' => 'required',
            'heating_type_id' => 'required',


        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        //Item::create([]);
        dump($request->all());


        return response()->json(["json som "], 200);
    }
}
