<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function signUp(Request $request)
    {

        $rules = [
            'email' => 'required',
            'password' => 'required',

        ];

        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            //'remember' => $request->get('remember'),
        ];

        if (Auth::attempt($credentials)) {
            return Redirect()->to('/flat-add');
        }

        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);

        return response()->json($errors, 422);

    }

    public function logout(){
        Auth::logout();
        return Redirect()->to("/flat-add");
    }

}
