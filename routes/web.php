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


use App\Http\Controllers\ImageController;

Route::get('/compress-assets', function () {
    $imageController = new ImageController();

    $assetsPath = public_path('assets');
    $outputPath = public_path('compressed-assets');

    if (!file_exists($outputPath)) {
        mkdir($outputPath, 0777, true);
    }

    foreach (glob($assetsPath . '/*.{jpg,jpeg,png,webp}', GLOB_BRACE) as $filePath) {
        $fileName = basename($filePath);
        $imageController->compressImage($filePath, $outputPath . '/' . $fileName);
    }

    return "All images compressed and saved to 'compressed-assets' folder.";
});



require __DIR__.'/auth.php';
