<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("index", "IndexController@index");
Route::get("send", "IndexController@sendMessage");
Route::get("group", "IndexController@group");
Route::get("goods", "ProductController@goods");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
