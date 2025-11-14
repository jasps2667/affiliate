<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('dashboard');


Route::get('/user', function () {
    return view('user_dashboard');
})->name('user_dash');


Route::get('/referrals', function () {
    return view('referral');
})->name('user_referrals');

