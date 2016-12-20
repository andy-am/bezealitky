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

        dd($flat);

        return view('item.detail',['flat' => $flat]);
    }
}
