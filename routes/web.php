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
    return view('home');
});

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/random-things', function () {
    return view('random-things');
});

Route::get('/contacts', function () {
    return view('contacts');
});
