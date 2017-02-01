<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

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


        dump($request->all());
        die();

        return response()->json(["json som "]);
    }
}
