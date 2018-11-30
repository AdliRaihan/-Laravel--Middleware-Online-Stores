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




Route::get('/', [
    'middleware' => 'auth_index',
    'uses' => 'Stores\indexStoreController@index',
]);
Route::get('/list',[
    'middleware' => 'auth_access:admin',
    'uses' => 'Stores\addStoreController@index',
]);
Route::get('/add_store','Stores\addStoreController@addItem')->middleware('auth_access');
Route::get('/add_queue','Stores\addStoreController@addItem_onqueue')->middleware('auth_access');

Route::get('/logout','Stores\addStoreController@destroy');
Route::get('/stores','Stores\addStoreController@store')->middleware('auth_valid');


Route::get('/seedata','Stores\addStoreController@index');

