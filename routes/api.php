<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//// Get all Countries
//Route::get('country', 'CountryController@country');
//
//// Get country by Id
//Route::get('country/{id}', 'CountryController@countryById');
//
//// Save Country
//Route::post('country', 'CountryController@saveCountry');
//
//// Update Country
//Route::put('country/{id}', 'CountryController@updateCountry');
//
//// Delete Country
//Route::delete('country/{id}', 'CountryController@deleteCountry');

// API Resource Controller
Route::apiResource('country', 'RCountryController');

