<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth')->name('user.profile');
Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegister'])->name('auth.submitRegister');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('auth.submitLogin');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');

Route::middleware('auth')->group(function () {
    Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::put('questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');

    Route::post('questions/{question}/responses', [ResponseController::class, 'store'])->name('responses.store');
    Route::get('responses/{response}/edit', [ResponseController::class, 'edit'])->name('responses.edit');
    Route::put('responses/{response}', [ResponseController::class, 'update'])->name('responses.update');
    Route::delete('responses/{response}', [ResponseController::class, 'destroy'])->name('responses.destroy');

    Route::post('questions/{question}/favorite', [FavoriteController::class, 'toggle'])->name('favorites.toggle');
    Route::get('favorites', [FavoriteController::class, 'index'])->name('favorites.index');
});

Route::get('questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
