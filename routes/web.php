<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('table')->group(function(){
    Route::get('/home', 'TablesController@index')->name('table.home');
    Route::get('/insert', 'TablesController@create')->name('table.insert');
    Route::get('/edit', 'TablesController@show')->name('table.edit');
    Route::post('/create', 'TablesController@store')->name('table.store');
    Route::get('/delete', 'TablesController@delete')->name('table.delete');
    Route::delete('/destroy', 'TablesController@destroy')->name('table.destroy');

});

<<<<<<< HEAD
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



=======
>>>>>>> parent of f259543... refactor: views tables, insert restaurant and more

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'MenusController@index')->name('menushome');
Route::get('/order', 'OrdersController@index')->name('ordershome');
Route::get('/receipt', 'ReceiptController@index')->name('receitphome');
Route::get('/account', 'AccountsController@index')->name('accountshome');
