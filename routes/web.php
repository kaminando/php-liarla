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
    return view('content/home');
});


Route::get('about-us', function () {
    return view('content/about-us');
});

Route::get('contact', function () {
    return view('content/contact');
});

Route::get('dashboard', function () {
    return view('content/dashboard');
});

Route::get('hotel-detail', function () {
    return view('content/hotel-detail');
});

Route::get('profile', function () {
    return view('content/profile');
});

Route::get('search-results', function () {
    return view('content/search-results');
});

Route::get('settings', function () {
    return view('content/settings');
});

Route::get('shared-stories', function () {
    return view('content/shared-stories');
});
