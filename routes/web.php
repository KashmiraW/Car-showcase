<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
})
    -> name('home');

Route::get('about-us', function () {
    return view('about-us');
})
    -> name('about-us');

Route::get('contact-us', function () {
    return view('contact-us');
})
    -> name('contact-us');

Route::get('login', function () {
    return view('login');
})
    -> name('login');

Route::get('register', function () {
    return view('register');
})
    -> name('register');

Route::resource('/cars', \App\Http\Controllers\CarController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
