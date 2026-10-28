<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FavoriteController;

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

Route::get('/admin', [CarController::class, 'admin'])
    ->middleware(['auth', 'admin'])
    ->name('admin');

Route::resource('/cars', CarController::class)->except(['destroy']);

Route::post('/cars/{car}/change-status', [CarController::class, 'changeStatus'])
    ->middleware(['auth', 'admin'])
    ->name('cars.changeStatus');

Route::middleware('auth')->group(function () {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/{car}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{car}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
});

Route::delete('/cars/{car}', [CarController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('cars.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
