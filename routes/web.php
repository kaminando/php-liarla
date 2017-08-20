<?php

/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
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

Route::get('hotel-detail', function () {
    return view('content/hotel-detail');
});

Route::get('search-results', function () {
    return view('content/search-results');
});

Route::get('shared-stories', function () {
    return view('content/shared-stories');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Protected routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['auth']], function () {

  Route::get('settings', function () {
    return view('content/settings');
  });
  Route::get('dashboard', function () {
      return view('content/dashboard');
  });
  Route::get('profile', function () {
      return view('content/profile');
  });
  
});