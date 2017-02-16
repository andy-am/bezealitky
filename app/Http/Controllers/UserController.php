<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\County;
use App\District;
use App\User;
use App\Zip;
use Illuminate\Support\Str;


class UserController extends Controller
{

    public function profile($id)
    {
        $user = User::find($id);
        if (!$user == null) {
            //$roles = Role::where('title', '!=', 'Super Admin')->get();
            //return View('admin.user.edit', compact(['data', 'roles']));
            return view('user.profile', ["user" => $user]);
        } else {
            return View('errors.404');
        }
    }


}
