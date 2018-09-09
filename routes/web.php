<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

const pages = 'web\pagesController@';
const category = 'web\category\categoryController@';
const product = 'web\product\productController@';
Route::get('/','web\pagesController@index')->name('Dashboard');

/*Category Group*/
Route::group(['prefix'=>'admin/category','middleware'=>'auth'],function(){
    Route::get('',category.'index')->name('Categories');
});

/*Product Group*/
Route::group(['prefix'=>'admin/product','middleware'=>['auth','isAdmin']],function(){
    Route::get('',product.'index')->name('Products');
    Route::get('/add',product.'create')->name('Add Product');
    Route::post('/add',product.'store');
});

/*Order Group*/
Route::group(['prefix'=>'admin/orders','middleware'=>['auth','isAdmin']],function(){
    Route::get('',pages.'orders')->name('Orders');
});
Auth::routes();
Route::get('/logout','Auth\loginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mailable', function () {
    //$invoice = App\Invoice::find(1);

    return new App\Mail\verifySignup();
});