<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/signup', function () {
    return view('admin/signup');
});

Route::get('admin/login', function () {
    return view('admin/login');
});

Route::get('admin/mypage', function () {
    return view('admin/mypage');
});

Route::get('admin/profile', function () {
    return view('admin/profile');
});

Route::get('admin/event', function () {
    return view('admin/event');
});
