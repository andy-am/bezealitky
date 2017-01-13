<?php

namespace App\Http\Controllers;
use App\User;


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
