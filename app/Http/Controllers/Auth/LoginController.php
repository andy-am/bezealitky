<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Symfony\Component\Console\Input\Input;

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
    protected $redirectTo = '/home';

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

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            //'remember' => $request->get('remember'),
        ];

        if (Auth::attempt($credentials)) {
            return Redirect()->to('/profile');//->with('alert-success', 'You are now logged in.');
        }

        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);

        return response()->json($errors, 422);

    }


}
