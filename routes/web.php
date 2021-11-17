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

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'MenusController@index')->name('menushome');
Route::get('/order', 'OrdersController@index')->name('ordershome');
Route::get('/receipt', 'ReceiptController@index')->name('receitphome');
Route::get('/account', 'AccountsController@index')->name('accountshome');
