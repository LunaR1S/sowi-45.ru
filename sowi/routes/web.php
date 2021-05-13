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

Route::get('/', 'PagesController@home')->name('home'); 
Route::get('about' , 'PagesController@about')->name('about');
Route::get('features' , 'PagesController@features')->name('features');
Route::post('/image/upload', 'ImageController@upload')->name('image.upload');
Route::get('price' , 'PriceController@price')->name('price');
Route::post('price/check', 'PriceController@review_check')->name('price_check');
Route::get('review', 'MainController@review')->name('review');
Route::post('review/check', 'MainController@review_check')->name('review_check');
Route::get('men', 'PagesController@men')->name('men');
Route::get('children', 'PagesController@children')->name('children');
Route::get('manicure', 'PagesController@manicure')->name('manicure');
Route::get('pedicure', 'PagesController@pedicure')->name('pedicure');
Route::get('admin', 'PagesController@admin')->name('admin');
Route::get('list', 'PagesController@list')->name('list');
Route::get('listzayvka', 'PagesController@listzayvka')->name('listzayvka');
Route::get('zayvka', 'PagesController@zayvka')->name('zayvka');
Route::post('zayvk', 'ZayvkaController@zayvk')->name('zayvk');
Route::get('/create', 'PagesController@create')->name('create');
Route::post('/upload', 'UploadController@upload')->name('upload');
Route::get('delete/{id}','PagesController@destroy');


Route:: prefix('auth')->group(function(){

    Route::post('/upload', 'PagesController@upload');
    Route::post('zayvk', 'PagesController@zayvk');
    Route::post('register' , 'AuthController@register');
    Route::get('register' , 'PagesController@register')->name('register');
    Route::post('login' , 'AuthController@login');
    Route::get('login' , 'PagesController@login')->name('login');
    Route::get('create' , 'PagesController@create')->name('create');
    Route::get('logout' , 'AuthController@logout')->name('logout');
});
