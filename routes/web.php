<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 🏠 Home page
Route::get('/', function () {
    return view('home'); // You already have home.blade.php
})->name('home');

// 📊 Dashboard (requires login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 🌍 Public pages
Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');

// 👤 Profile (auth required)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
