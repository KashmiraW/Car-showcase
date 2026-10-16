<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
})
    -> name('home');

Route::get('about-us', function () {
    return view('about-us');
})
    -> name('about-us');


Route::get('/cars', [CarController::class, 'index'])->name('car.index');


Route::get('/cars/{id}', [CarController::class, 'show'])
    ->name('cars.show');

Route::get('create', function () {
    return view('create');
})
    -> name('create');

Route::get('update', function () {
    return view('update');
})
    -> name('update');





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
