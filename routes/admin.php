<?php

use App\Models\Testmonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::resource('services', ServiceController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
    Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
    Route::resource('testmonials', TestmonialController::class);
    Route::resource('members', MemberController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('settings', SettingController::class)->only(['index', 'update']);
    Route::resource('roles', RoleController::class);
});

require __DIR__ . '/auth.php';
