<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/galery', function () {
    return view('galery');
})->name('galery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/image/blur', [\App\Http\Controllers\ImageController::class, 'blur']);
Route::post('/image/rotate', [\App\Http\Controllers\ImageController::class, 'rotate']);
Route::post('/image/scale', [\App\Http\Controllers\ImageController::class, 'scale']);
Route::post('/image/crop', [\App\Http\Controllers\ImageController::class, 'crop']);
Route::post('/data/rle-compress', [\App\Http\Controllers\ImageController::class, 'rleCompress']);

require __DIR__.'/auth.php';
