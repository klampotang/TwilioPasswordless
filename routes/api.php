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

Route::post('user/validate/', 'app/Http/Controllers/UserController@validate');
Route::post('user/auth/', 'app/Http/Controllers/UserController@auth');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

