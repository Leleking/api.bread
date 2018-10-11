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
const report = 'web\report\reportController@';
const order = 'web\order\orderController@';
const ajax = 'web\ajax\ajaxController@';
Route::get('/','web\pagesController@index')->name('Dashboard');

/*Category Group*/
Route::group(['prefix'=>'admin/category','middleware'=>['auth','isAdmin']],function(){
    Route::get('',category.'index')->name('Categories');
    Route::post('/add',category.'store');
    Route::post('/delete',ajax.'deleteCategory');
});

/*Product Group*/
Route::group(['prefix'=>'admin/product','middleware'=>['auth','isAdmin']],function(){
    Route::post('/delete',ajax.'deleteProduct');
    Route::get('',product.'index')->name('Products');
    Route::get('/add',product.'create')->name('Add Product');
    Route::post('/add',product.'store');
    Route::get('/{id}',product.'edit')->name('Edit');  
    Route::post('/{id}',product.'update');  
   
});

/*Order Group*/
Route::group(['prefix'=>'admin/orders','middleware'=>['auth','isAdmin']],function(){
    Route::get('',pages.'orders')->name('Orders');
    Route::get('/details/{id}',pages.'orderDetail')->name('Order Details');
    Route::get('/returns',pages.'orderReturns')->name('Order Returns');
    Route::post('/delete',ajax.'deleteOrder');
    Route::post('/changeStatus',order.'changeStatus');

});
Route::group(['prefix'=>'admin/customers','middleware'=>['auth','isAdmin']],function(){
    Route::get('',pages.'customers')->name('Customers');
    Route::get('/groups',pages.'customerGroups')->name('Customer Group');
});
Route::group(['prefix'=>'admin/settings','middleware'=>['auth','isAdmin']],function(){
    Route::get('',pages.'settings')->name('Settings');
    Route::get('users',pages.'users')->name('Users');
    Route::get('add/admin',pages.'addAdmin')->name('Add New Admin');
    Route::get('view/admin',pages.'viewAdmin')->name('Administrators');
    Route::get('localisation',pages.'localisation')->name('Localisation');
    Route::get('maintenance',pages.'maintenance')->name('Maintenance');
    

});
Route::group(['prefix'=>'admin/reports','middleware'=>['auth','isAdmin']],function(){
    Route::get('',report.'index')->name('Reports');
    Route::get('/sales',report.'salesReport')->name('Sales Return');
   
    

});
Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mailable', function () {
    //$invoice = App\Invoice::find(1);

    return new App\Mail\verifyEmail();
});