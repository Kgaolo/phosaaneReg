<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

// Redirect root to /register
Route::get('/', function () {
    return redirect('/register');
});

// Custom registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Laravel auth (login, logout, password reset)
Auth::routes();

// Home route (only for authenticated users)
Route::get('/home', [HomeController::class, 'index'])->name('home');

