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
Route::get('test','BarangController@Template1');
Route::get('test2','BarangController@Template2');
Route::get('test3','BarangController@Template3');
Route::get('test4','BarangController@Template4');
Route::get('test5','BarangController@Template5');
Route::get('/', function () {
    return view('welcome');
});
