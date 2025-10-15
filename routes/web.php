<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

// Home page
Route::get('/home', [BlogController::class, 'home'])->name('home.index');

// About page
Route::get('/about', [BlogController::class, 'about'])->name('about.index');

// ✅ Blog page
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.index');

// Contact page
Route::get('/contact', [BlogController::class, 'contact'])->name('contact.index');


