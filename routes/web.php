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

Route::get('/', 'HomeController@index');

Route::get('/index', 'TemplateController@index');

Route::post('/signup', 'Auth\LoginController@signUp');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/profile/{id}', 'UserController@profile');


// FLAT
Route::get('/flat-detail/{id}', 'ItemController@detail');

Route::get('/flat-add', 'ItemController@create');

Route::post('/flat-add', 'ItemController@store');




//api
Route::get('/api/get-countries', 'ItemController@apiGetCountries');
Route::get('/api/get-counties', 'ItemController@apiGetCounties');
Route::get('/api/get-districts', 'ItemController@apiGetDistricts');
Route::get('/api/get-cities', 'ItemController@apiGetCities');
Route::get('/api/get-streets', 'ItemController@apiGetStreets');
Route::get('/api/get-zips', 'ItemController@apiGetZips');


Route::get('api/get-city-by-street/{street_id}', 'ItemController@apiGetCityByStreet');
Route::get('api/get-district-by-city/{city_id}', 'ItemController@apiGetDistrictByCity');
Route::get('api/get-county-by-district/{district_id}', 'ItemController@apiGetCountyByDistrict');
Route::get('api/get-country-by-county/{county_id}', 'ItemController@apiGetCountryByCounty');
