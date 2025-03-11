<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/', 'admin.index')->name('home');
    Route::resource('services', ServiceController::class);
    Route::resource('features', FeatureController::class);
});

require __DIR__ . '/auth.php';
