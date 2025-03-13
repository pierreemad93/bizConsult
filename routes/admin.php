<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use App\Models\Testmonial;

Route::middleware('auth')->group(function () {
    Route::view('/', 'admin.index')->name('home');
    Route::resource('services', ServiceController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
    Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
    Route::resource('testmonials', TestmonialController::class);
    Route::resource('settings', SettingController::class)->only(['index' , 'update']);
});

require __DIR__ . '/auth.php';
