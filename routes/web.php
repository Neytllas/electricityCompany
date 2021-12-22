<?php

use App\Models\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, "index"])->name('main');

Route::get('/login', [LoginController::class, "show"])->name('login');
Route::post('/login', [LoginController::class, "login"]);
Route::get('/logout', [LoginController::class, "logout"]);

Route::get('/history', [ClientController::class, "history"])->name('history');
Route::get('/profile', [ClientController::class, "edit_form"])->name('profile');

Route::post('/indication', [ClientController::class, "add_indication"]);