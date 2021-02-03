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


Route::get('/','ProductosController@index');
Route::post('products','ProductosController@store')->name('products.store');
Route::post('providers','ProveedorController@store')->name('providers.store');
Route::delete('products/{product}','ProductosController@destroy')->name('products.destroy');
Route::delete('providers/{provider}','ProveedorController@destroy')->name('providers.destroy');
