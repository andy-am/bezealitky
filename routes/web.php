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
Route::get('/flat-add', 'TemplateController@flatAdd');

Route::get('/profile/{id}', 'UserController@profile');

Route::get('/flat-detail/{id}', 'ItemController@detail');
