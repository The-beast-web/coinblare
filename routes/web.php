<?php

use App\Http\Controllers\Customer\BuySellController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\MarketplaceController;
use App\Http\Controllers\Customer\MySalesController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\TransactioHistoryController;
use App\Http\Controllers\Customer\TranxController;
use App\Http\Controllers\Customer\WalletController;
use Illuminate\Support\Facades\Auth;
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
})->name('customer.home');

Auth::routes(['verify' => true]);

Route::middleware(['auth','verified'])->name('customer.')->prefix('myaccount')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buy-sell', [BuySellController::class, 'index'])->name('buy-sell');
Route::get('/wallets', [WalletController::class, 'index'])->name('wallets');
Route::get('/transaction-history', [TransactioHistoryController::class, 'index'])->name('transaction-history');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/marketplace', [MarketplaceController::class, 'list'])->name('list');
Route::get('/marketplace-detail', [MarketplaceController::class, 'detail'])->name('detail');
Route::get('/deposit', [TranxController::class, 'deposit'])->name('deposit');
Route::get('/withdrawal', [TranxController::class, 'withdrawal'])->name('withdrawal');
Route::get('/my-sales', [MySalesController::class, 'index'])->name('my-sales');
});

