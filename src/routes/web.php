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

Route::get('/poli_signup', function () {
    return view('poli_signup');
});

Route::get('/poli_login', function () {
    return view('poli_login');
});

Route::get('/poli_mypage', function () {
    return view('poli_mypage');
});

Route::get('/poli_profile', function () {
    return view('poli_profile');
});

Route::get('/poli_event', function () {
    return view('poli_event');
});
