<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', 'ProjectController@index')->name("home");
Route::get('create', 'ProjectController@create')->name("create ");
Route::post('create', 'ProjectController@store')->name("store");
Route::get('edit/{id}', 'ProjectController@edit')->name("edit");
Route::post('update/{id}' ,'ProjectController@update')->name("update");
Route::delete('destroy/{id}' ,'ProjectController@destroy')->name("destroy");


Route::get('product', 'ProductsController@index')->name("home1");
Route::get('createproduct', 'ProductsController@create')->name("createproduct");
Route::post('createproduct', 'ProductsController@store')->name("storeproduct");
Route::get('editproduct/{id}', 'ProductsController@edit')->name("editproduct");
Route::post('updateproduct/{id}' ,'ProductsController@update')->name("updateproduct");
Route::delete('destroyproduct/{id}' ,'ProductsController@destroy')->name("destroyproduct");




 