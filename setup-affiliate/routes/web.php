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


Route::get('/commissions', function () {
    return view('comission');
})->name('user_comissions');

Route::get('/payouts', function () {
    return view('payouts');
})->name('user_payouts');

