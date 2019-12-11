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

Route::get('hello', 'TuanController@hello');
Route::get('tin-tuc', 'TuanController@news');
Route::get('them-tin-tuc', 'TuanController@addnews');

/*--------------------------------------------------------------------------*/

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
    });

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    });

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    });

    Route::get('tham-so/{id}/slug/{slug?}', function ($a, $b = 0) {
        return 'Tham số ID ' .$a. "Tham số Slug " .$b;
    });

    Route::get('parameter/{slug?}', function ($b = 1) {
        return "Tham số Slug " .$b;
    });

    Route::get('laravel/{id}', function ($a) {
        return 'Tham số ID ' .$b;
    });

    Route::get('tai-lieu/lap-trinh/khoa-hoc-lap-trinh-laravel/lession-01', function () {
        return 'Lession 01';
    })->name('lession01');

    Route::get('chuyen-huong', function () {
        return redirect()->route('lession01');
    });

/*--------------------------------------------------------------------------*/
