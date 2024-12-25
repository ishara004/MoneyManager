<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\RevenueController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\DashboardController;

Route::get('/', function(){
    return view('welcome');
});

// Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/make-revenue', [RevenueController::class, 'create'])->name('revenue.create');
    Route::post('/make-revenue', [RevenueController::class, 'store'])->name('revenue.store');
    Route::get('/revenue-history', [RevenueController::class, 'index'])->name('revenue.index');

    Route::get('/make-expenditure', [ExpenditureController::class, 'create'])->name('expenditure.create');
    Route::post('/make-expenditure', [ExpenditureController::class, 'store'])->name('expenditure.store');
    Route::get('/expenditure-history', [ExpenditureController::class, 'index'])->name('expenditure.index');

    Route::get('/balance', [DashboardController::class, 'balance'])->name('balance');
// });