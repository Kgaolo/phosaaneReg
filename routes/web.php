<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Default route shows register form
Route::get('/', function () {
    return redirect('/register');
});

// Register route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Authentication routes (login, logout, etc.)
Auth::routes();

// Home route (if you ever use it)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

