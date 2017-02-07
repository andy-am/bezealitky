<?php

namespace App\Http\Controllers;

use App\Item;
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

        return view('item.flat-add' );
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
