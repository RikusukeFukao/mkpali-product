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

Route::get('/', 'MkpaliController@logo');

Route::get('welcome', 'MkpaliController@welcome')->name('welcome.get');

Route::get('show1', 'MkpaliController@show1')->name('show1.get');
Route::get('show2', 'MkpaliController@show2')->name('show2.get');
Route::get('show3', 'MkpaliController@show3')->name('show3.get');

Route::get('result1', 'MkpaliController@result1')->name('result1.get');
Route::get('result2', 'MkpaliController@result2')->name('result2.get');
Route::get('result3', 'MkpaliController@result3')->name('result3.get');

Route::get('ng', 'MkpaliController@ng')->name('ng.get');

