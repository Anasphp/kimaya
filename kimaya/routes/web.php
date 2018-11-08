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
    return view('index');
});

Route::get('/d', function () {
    return view('index');
});


Route::get('/contact', function () {
    echo'anas';
});

Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/tours', function () {
    return view('tours');
});

Route::get('/tours-detail', function () {
    return view('tours-detail');
});




