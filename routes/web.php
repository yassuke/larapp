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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'series'], function () {
    Route::get('/', ['uses' => 'Series\SeriesController@index'])->name('list_series');
    Route::get('create', ['uses' => 'Series\SeriesController@create'])->name('create_serie');
    Route::post('store', ['uses' => 'Series\SeriesController@store'])->name('store_serie');
    Route::delete('delete/{id}', ['uses' => 'Series\SeriesController@destroy'])->name('delete_serie');
});
