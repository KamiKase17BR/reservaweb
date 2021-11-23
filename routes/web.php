<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('table')->group(function(){
    Route::get('/home',            'TablesController@index')->name('table.home');
    Route::get('/insert',          'TablesController@create')->name('table.insert');
    Route::get('/list',            'TablesController@list')->name('table.list');
    Route::get('/show/{id}',       'TablesController@show')->name('table.show');
    Route::post('/create',         'TablesController@store')->name('table.store');
    Route::get('/edit/{id}',       'TablesController@edit')->name('table.edit');
    Route::delete('/destroy/{id}', 'TablesController@destroy')->name('table.destroy');
    Route::put('/update/{id}',     'TablesController@update')->name('table.update');

});

Route::prefix('restaurant')->group(function(){
    Route::get('/home',             'RestaurantController@index')->name('restaurant.home');
    Route::get('/insert',           'RestaurantController@create')->name('restaurant.insert');
    Route::post('/create',          'RestaurantController@store')->name('restaurant.store');
    Route::get('/list',             'RestaurantController@list')->name('restaurant.list');
    Route::get('/show',             'RestaurantController@show')->name('restaurant.show');
    Route::get('/edit/{id}',        'RestaurantController@edit')->name('restaurant.edit');
    Route::delete('/destroy/{id}',  'RestaurantController@destroy')->name('restaurant.destroy');
    Route::put('/update/{id}',      'RestaurantController@update')->name('restaurant.update');



});

Route::prefix('menu')->group(function(){
Route::get('/home',                 'MenusController@index')->name('menu.home');
Route::get('/insert',               'MenusController@create')->name('menu.insert');
Route::post('/create',              'MenusController@store')->name('menu.store');





});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/order', 'OrdersController@index')->name('ordershome');
Route::get('/receipt', 'ReceiptController@index')->name('receitphome');
Route::get('/account', 'AccountsController@index')->name('accountshome');
