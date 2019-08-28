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

    // Redirect Routes
    Route::redirect('/foo', '/fo', 303); //only 302, 303

    // View Routes
    Route::view('/welcome', 'welcome');


// Route Parameters

    // Required Parameters
    // Route::get('tham-so/{id}/{slug}', function ($id, $slug) {
    //     return 'Tham số ID ' .$id. "Tham số Slug " .$slug;
    // });

    // Route::get('tham-so/{id}/slug/{slug}', function ($a, $b) {
    //     return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    // });

    // Optional Parameters
    Route::get('tham-so/{id}/slug/{slug?}', function ($a) {
        return 'Tham số ID ' .$a;
    });

    // Regular Expression Constraints
    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    })->where(['id' => '[0-9]{2}', 'slug' => '[0-9a-zA-Z_]+']);;

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    })->where(['id' => '[0-9]{2}', 'slug' => '[a-zA-Z-]+']);;

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    })->where(['id' => '[0-9]{2}', 'slug' => '[a-zA-Z+]+']);;

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    })->where(['id' => '[0-9]{2}', 'slug' => '[a-zA-Z=]+']);;