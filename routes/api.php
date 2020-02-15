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
Route::apiResource('container','containerController');
Route::apiResource('location','locationController');
Route::apiResource('product','productController');
Route::apiResource('blacklist','blacklistController');
Route::apiResource('brand','brandController');
Route::apiResource('user','userController');
Route::apiResource('product','productController');

Route::post('showProductBanned','productController@showProductBanned');