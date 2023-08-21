<?php

use App\Http\Controllers\Customer\BuySellController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\TransactioHistoryController;
use App\Http\Controllers\Customer\WalletController;
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

Route::get('/', function () {
    return view('website.index');
});

Route::name('customer.')->prefix('myaccount')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buy-sell', [BuySellController::class, 'index'])->name('buy-sell');
Route::get('/wallets', [WalletController::class, 'index'])->name('wallets');
Route::get('/transaction-history', [TransactioHistoryController::class, 'index'])->name('transaction-history');
});
