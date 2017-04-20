<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/','ReviewController@login');
// Route::post('/','ReviewController@loginsubmit');

// Route::get('/reviews-guest','ReviewController@guestindex');

Route::get('/reviews','ReviewController@index')->middleware('loggedin');
Route::get('/admin', 'ReviewController@admin')->middleware('protected');
Route::get('/reviews/new','ReviewController@create')->middleware('protected'); // Show create song form
Route::post('/reviews','ReviewController@store'); // Submitting the info for a new song
Route::get('/reviews/{id}/delete','ReviewController@destroy'); // Delete specific song

Route::get('/signup','SignupController@index');
Route::post('/signup','SignupController@signup');

Route::get('/login', 'LoginController@index');
Route::post('/login','LoginController@login');

Route::get('/account', function() {
    return view('account', [
        'user' => Auth::user()
    ]);
})->middleware('protected');

// Route::get('/user', function(){
// 	dd(Auth::user());
// });

Route::get('/logout','LoginController@logout');

Route::get('/projectsummary', function() {
    return view('projectsummary');
});