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

Route::namespace('Backend')->group(function() {
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::prefix('product')->name('product.')->group(function() {
            Route::get('index','ProductController@index')->name('index');
            Route::get('create','ProductController@create')->name('create');
            Route::post('store','ProductController@store')->name('store');
            Route::get('edit/{id}','ProductController@edit')->name('edit');
            Route::get('update/{id}','ProductController@update')->name('update');
            Route::get('destroy/{id}','ProductController@destroy')->name('destroy');
        });
    });
});
