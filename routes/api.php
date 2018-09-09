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
Route::get('test',function(){
    return response([1,2,3],200);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'user'] , function(){
    Route::post('signup','user\signUpController@store');

});
Route::group(['prefix'=>'category'],function(){
    Route::post('add','category\categoryController@store');
    Route::get('get','category\categoryController@index');
    Route::get('{id}','category\categoryController@show');
});
Route::group(['prefix'=>'search'],function(){
    Route::post('product/{id}','search\searchProduct@search');
});
