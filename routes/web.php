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

Route::get('/', function () {
    return view('auth/login');
});

//routes
Route::resource('user', 'UserController');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');

Route::resource('editor', 'EditorController');
Route::get('/editor/edit/{id}','EditorController@edit');

Route::resource('fo', 'FrontofficeController');
Route::get('/fo/edit/{id}','FrontofficeController@edit');

Route::resource('admin', 'AdminController');
Route::get('/admin/edit/{id}','AdminController@edit');

Route::resource('voucher', 'VoucherController');
Route::post('/voucher/store','VoucherController@store');
Route::get('/voucher/edit/{id}','VoucherController@edit');
Route::get('/voucher/view/{id}','VoucherController@view');

Route::get('/redeemed', 'RedeemedController@index');

Route::resource('advertising', 'AdvertisingController');
Route::post('/advertising/store','AdvertisingController@store');
Route::get('/advertising/edit/{id}','AdvertisingController@edit');
Route::get('/advertising/view/{id}','AdvertisingController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
