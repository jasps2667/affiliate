<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/user', function () {
    return view('user_dashboard');
})->name('user_dash');