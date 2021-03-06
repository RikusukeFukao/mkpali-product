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
Route::get('result4', 'MkpaliController@result4')->name('result4.get');
Route::get('result5', 'MkpaliController@result5')->name('result5.get');
Route::get('result6', 'MkpaliController@result6')->name('result6.get');
Route::get('result7', 'MkpaliController@result7')->name('result7.get');
Route::get('result8', 'MkpaliController@result8')->name('result8.get');
Route::get('result9', 'MkpaliController@result9')->name('result9.get');

Route::get('ng', 'MkpaliController@ng')->name('ng.get');

Route::get('ittekoi1', 'MkpaliController@ittekoi1')->name('ittekoi1.get');
Route::get('ittekoi2', 'MkpaliController@ittekoi2')->name('ittekoi2.get');
Route::get('ittekoi3', 'MkpaliController@ittekoi3')->name('ittekoi3.get');
Route::get('ittekoi4', 'MkpaliController@ittekoi4')->name('ittekoi4.get');
Route::get('ittekoi5', 'MkpaliController@ittekoi5')->name('ittekoi5.get');
Route::get('ittekoi6', 'MkpaliController@ittekoi6')->name('ittekoi6.get');
Route::get('ittekoi7', 'MkpaliController@ittekoi7')->name('ittekoi7.get');
Route::get('ittekoi8', 'MkpaliController@ittekoi8')->name('ittekoi8.get');
Route::get('ittekoi9', 'MkpaliController@ittekoi9')->name('ittekoi9.get');


