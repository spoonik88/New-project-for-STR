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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BaseController@getIndex');
Route::get('/category', 'TovarController@getAll');
 Route::get('basket/add/{id}', 'BacketController@getAdd');
 Route::get('basket', 'BacketController@getAll');
Route::get('basket/delete/{id}', 'BacketController@getDelete');
Route::get('/{url}', 'PageController@getIndex');
