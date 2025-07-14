<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index'); // home ostaje
});

Route::get('/welcome', function () {
    return view('welcome.welcome');
});

Route::get('/about', function () {
    return view('aboutUs.aboutUs');
});

Route::get('/fixtures', function () {
    return view('fixtures.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

