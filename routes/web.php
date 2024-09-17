<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;

Route::get('/' , [AuthController::class , 'loginPage'])->name('loginPage');
Route::post('/', [AuthController::class ,'login'])->name('login');

Route::get('register', [AuthController::class ,'register'])->name('register');
Route::post('register', [AuthController::class ,'store'])->name('store');

Route::get('forgot', [AuthController::class ,'forgot'])->name('forgot');

Route::group(['middleware' => 'admin'] , function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard' , [DashboardController::class ,'dashboard'])->name('dashboard');
    });
});

Route::prefix('home')->group(function(){
    Route::get('/', [HomeController::class ,'homePage'])->name('homePage');
});