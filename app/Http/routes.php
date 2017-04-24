<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/', function () {
    return view('acceuil');
});

Route::resource('job','JobController');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/offres', function () {
    return view('offres');
});

Route::get('/concours', function () {
    return view('concours');
});

Route::get('/post-job', function () {
    return view('post-job');
});

Route::get('/create-resume', function () {
    return view('create-resume');
});

Route::get('/resume-details', function () {
    return view('resume-details');
});