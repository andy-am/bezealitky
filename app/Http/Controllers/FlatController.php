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
        $id=1;

        return view('flat.show');
    }
}
