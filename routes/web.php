<?php

use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/image-upload', function () {
    return view('welcome');
});

Route::post('/image-upload', [ImageUploadController::class, 'upload'])->name('image.upload');

