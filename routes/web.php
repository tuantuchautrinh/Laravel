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

/**
 * Illuminate\Contracts\Container\BindingResolutionException
 * Target class [App\Http\Controllers\Backend/ProductController] does not exist.
 *
 * Route::get('index', 'Backend/ProductController@index');
 *
 * Stack trace
 *
 * Illuminate\Container\Container::build :805
 * vendor/laravel/framework/src/Illuminate/Container/Container.php:805
 */

Route::get('index', 'Backend\ProductController@index');


