<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/', 'admin.index');
    Route::view('/login', 'admin.auth.login')->name('login');
});

require __DIR__ . '/auth.php';
