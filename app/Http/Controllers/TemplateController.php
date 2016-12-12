<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        return view('template.index');
    }

    public function signUp()
    {
        return view('template.signup');
    }
}
