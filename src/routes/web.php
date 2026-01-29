<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController ;
use App\Http\Controllers\AuthController ;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class ,  'index'] );
Route::get('/register', [AuthController::class ,  'showRegister'] );
Route::get('/login', [AuthController::class ,  'showLogin'] );
Route::get('/about', [AuthController::class ,  'showAbout'] );
Route::get('/questions', [HomeController::class ,  'question'] );