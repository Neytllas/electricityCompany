<?php

use App\Models\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HistoryApiController;

Route::get('/', [ClientController::class, "index"])->name('main');

Route::get('/login', [LoginController::class, "show"])->name('login');
Route::post('/login', [LoginController::class, "login"]);
Route::get('/logout', [LoginController::class, "logout"]);

Route::get('/wauth', [AuthController::class, "wauth"])->name('wauth');
Route::post('/send_indication', [AuthController::class, "send_indication"])->name('send_indication');


Route::get('/history', [ClientController::class, "history"])->name('history');
Route::get('/profile', [ClientController::class, "edit_form"])->name('profile');

Route::post('/indication', [ClientController::class, "add_indication"]);

Route::post('/edit_user', [ClientController::class, "edit_user"])->name('edit.user');

Route::post('/edit_user_admit', [ClientController::class, "edit_user_admit"])->name('edit.user.admit');

Route::get('/api/history', [HistoryApiController::class, 'send']);
