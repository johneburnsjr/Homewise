<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing page
Route::get('/', function () {
    return view('welcome'); // or create a custom home.blade.php
})->name('home');

// Dashboard (requires auth + verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Projects
Route::get('/projects', function () {
    return view('projects.index'); // resources/views/projects/index.blade.php
})->name('projects');

// Maintenance
Route::get('/maintenance', function () {
    return view('maintenance.index'); // resources/views/maintenance/index.blade.php
})->name('maintenance');

// Upgrades
Route::get('/upgrades', function () {
    return view('upgrades.index'); // resources/views/upgrades/index.blade.php
})->name('upgrades');

// About
Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
})->name('about');

// Profile (auth only)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth scaffolding (Breeze/Jetstream/etc.)
require __DIR__.'/auth.php';
