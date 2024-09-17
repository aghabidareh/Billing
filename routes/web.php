<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/' , [AuthController::class , 'login'])->name('login');


Route::get('register', [AuthController::class ,'register'])->name('register');
Route::post('register', [AuthController::class ,'store'])->name('store');

Route::get('forgot', [AuthController::class ,'forgot'])->name('forgot');