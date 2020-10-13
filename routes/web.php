<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.index');
});

Route::get('/login', function () {
    return view('auth/login');
});
