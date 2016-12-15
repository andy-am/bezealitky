<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * Index
     */
    public function show()
    {
        return view('template.flat-show');
    }
}
