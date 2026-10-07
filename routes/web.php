<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about-us', function() {
//    $company = 'Car Showcase';
//    return view('about-us', [
//        'company' => $company
//    ]);
//}) ->name('about-us');

Route::get('/about-us', [AboutController::class, 'index']) ->name('about-us');

Route::get('products/{name}', function (string $name){
//   return view ('products', ['name' => $name]);
    return view ('products', compact('name'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
