<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'auth'], function () {
    Route::get('sign-up', [SignUpController::class, 'create'])->name('sign-up');
    Route::get('login', [LoginController::class, 'create'])->name('login');
});
