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

        return view('item.detail',['flat' => $flat]);
    }
}
