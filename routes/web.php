<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authorization');
})->name('authorization');

Route::get('/authorization', function () {
    return view('authorization');
})->name('authorization');

Route::get('/personal-account', function () {
    return view('/personal-account');
})->name('personal-account');

Route::get('/personal-area', function () {
    return view('personal-area');
})->name('personal-area');

Route::get('/forgotLogin', function () {
    return view('forgotLogin');
})->name('forgotLogin');

Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/without', function () {
    return view('main');
})->name('main');

Route::post('/client/authorization', 'App\Http\Controllers\ClientController@checkLogin')->name('client-authorization');
Route::get('/client/personal-account', 'App\Http\Controllers\ClientController@checkLogin')->name('personal-account');
Route::post('/client/submit', 'App\Http\Controllers\ClientController@submit')->name('client-form');
Route::post('/client/forgotLogin', 'App\Http\Controllers\ClientController@showPassword')->name('client-show-password');
