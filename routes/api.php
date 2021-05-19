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

Route::get('/zips-as-keys', 'ApiController@zipsAsKeys');

Route::get('/zips', 'ApiController@areasAndZips');

Route::get('/areas', 'ApiController@areas');

Route::get('/zips/{area}', 'ApiController@zipsInArea');

Route::get('/city-for-zip/{zip}', 'ApiController@cityForZip');