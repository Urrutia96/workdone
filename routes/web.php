<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->middleware(['guest'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware(['guest']);

Route::get('login', [LoginController::class, 'create'])->middleware(['guest'])->name('login');
Route::post('login', [LoginController::class, 'store'])->middleware(['guest']);
Route::get('logout', [LoginController::class, 'destroy'])->middleware(['auth'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->middleware(['guest'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->middleware(['guest'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->middleware(['guest'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'update'])->middleware(['guest'])->name('password.update');
