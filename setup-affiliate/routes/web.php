<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RedirectController;
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', function () {
//     return view('home');
// })->name('dashboard');


Route::get('/redirect', [RedirectController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

});
