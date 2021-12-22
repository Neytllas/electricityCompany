<?php

use App\Models\Client;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, "index"])->name('main');

Route::get('/login', [ClientController::class, "show"])->name('login');
Route::post('/login', [ClientController::class, "login"]);
Route::get('/logout', [ClientController::class, "logout"]);

Route::get('/history', [ClientController::class, "history"])->name('history');
Route::get('/profile', [ClientController::class, "edit_form"])->name('profile');
