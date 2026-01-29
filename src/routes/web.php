<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');



Route::get('/register', [AuthController::class, 'register'])
    ->name('auth.register');

Route::post('/register', [AuthController::class, 'submitRegister'])
    ->name('auth.submitRegister');

Route::get('/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::post('/login', [AuthController::class, 'submitLogin'])
    ->name('auth.submitLogin');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('auth.logout');
