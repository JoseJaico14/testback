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

Route::group(["prefix"=>"user"],function(){
    Route::get("/all","UserController@index");
    Route::get("/status/{state}","UserController@status");
    Route::get("/search/{text}","UserController@search");
    Route::get("/changestate/{id}/{state}","UserController@changestate");
});
