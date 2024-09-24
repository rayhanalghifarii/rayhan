<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KebakaranController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk admin (CRUD)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('kebakaran', KebakaranController::class);
});

// Route dashboard bisa diakses oleh semua user yang sudah login
Route::get('/dashboard', [KebakaranController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/kebakaran/{id}', [KebakaranController::class, 'show'])->name('kebakaran.show')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
