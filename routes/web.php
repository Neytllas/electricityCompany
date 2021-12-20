<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route::post('/client/authorization', 'App\Http\Controllers\ClientController@checkLogin')->name('client-authorization');
// Route::get('/client/personal-account', 'App\Http\Controllers\ClientController@checkLogin')->name('personal-account');
// Route::post('/client/submit', 'App\Http\Controllers\ClientController@submit')->name('client-form');
// Route::post('/client/forgotLogin', 'App\Http\Controllers\ClientController@showPassword')->name('client-show-password');
