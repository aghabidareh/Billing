<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BillsController;
use App\Http\Controllers\Admin\PartyController;
use App\Http\Controllers\Admin\PartiesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Account\MyAccountController;

Route::namespace("authentication")->group(function () {
    Route::get('/' , [AuthController::class , 'loginPage'])->name('loginPage');
    Route::post('/', [AuthController::class ,'login'])->name('login');

    Route::get('logout', [AuthController::class ,'logout'])->name('logout');

    Route::get('register', [AuthController::class ,'register'])->name('register');
    Route::post('register', [AuthController::class ,'store'])->name('store');

    Route::get('forgot', [AuthController::class ,'forgot'])->name('forgot');
});

Route::group(['middleware' => 'admin'] , function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard' , [DashboardController::class ,'dashboard'])->name('dashboard');
        Route::prefix('partiesType')->group(function(){
            Route::get('/', [PartiesController::class ,'partiesType'])->name('parties-type');

            Route::get('add' , [PartiesController::class ,'add'])->name('addPartyType');
            Route::post('add' , [PartiesController::class ,'store'])->name('stoerPartyType');

            Route::get('edit/{id}', [PartiesController::class ,'edit'])->name('editPartyType');
            Route::post('update/{id}', [PartiesController::class ,'update'])->name('updatePartyType');

            Route::get('delete/{id}' , [PartiesController::class ,'delete'])->name('deletePartyType');

            Route::get('pdf-generator', [PartiesController::class ,'pdfGenerator'])->name('pdf-generator');
        });
        Route::prefix('parties')->group(function(){
            Route::get("/" , [PartyController::class ,"parties"])->name("parties");
            Route::get('add' , [PartyController::class ,'add'])->name('addParty');
            Route::post('add' , [PartyController::class ,'store'])->name('stoerParty');

            Route::get('edit/{id}', [PartyController::class ,'edit'])->name('editParty');
            Route::post('update/{id}', [PartyController::class ,'update'])->name('updateParty');

            Route::get('delete/{id}' , [PartyController::class ,'delete'])->name('deleteParty');
        });
        Route::prefix('bills')->group(function(){
            Route::get('/' , [BillsController::class ,'bills'])->name('bills');

            Route::get('add' , [BillsController::class ,'add'])->name('addBill');
            Route::post('add' , [BillsController::class ,'store'])->name('stoerBill');

            Route::get('edit/{id}', [BillsController::class ,'edit'])->name('editBill');
            Route::post('update/{id}', [BillsController::class ,'update'])->name('updateBill');

            Route::get('delete/{id}' , [BillsController::class ,'delete'])->name('deleteBill');
        });
        Route::prefix('my-account')->group(function(){
            Route::get('/' , [MyAccountController::class ,'myAccount'])->name('my-account');
            Route::post('/' , [MyAccountController::class ,'updateAccount'])->name('update-account');
        });
    });
});

Route::prefix('home')->group(function(){
    Route::get('/', [HomeController::class ,'homePage'])->name('homePage');
});


// be careful for your self
//  LOVE
//
