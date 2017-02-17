<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/index', 'TemplateController@index');
Route::get('/signup', 'TemplateController@signUp');

Route::get('/profile/{id}', 'UserController@profile');


// FLAT
Route::get('/flat-detail/{id}', 'ItemController@detail');

Route::get('/flat-add', 'ItemController@create');

Route::post('/flat-add', 'ItemController@store');


//api

Route::get('/api/get-cities', 'ItemController@apiGetCities');
