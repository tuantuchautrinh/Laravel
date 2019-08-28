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

// Basic Routing
Route::get('fo', function () {
    return 'Hello World';
});


        // Basic Routing - The Default Route Files
        Route::get('/user', 'UserController@index');