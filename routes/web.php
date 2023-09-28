<?php

use App\Http\Controllers\Admin\BuysController;
use App\Http\Controllers\Admin\CryptoController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\LangController as AdminLangController;
use App\Http\Controllers\Admin\MarketAnalysisController as AdminMarketAnalysisController;
use App\Http\Controllers\Admin\SellsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TranxController as AdminTranxController;
use App\Http\Controllers\Customer\BuySellController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\MarketAnalysisController;
use App\Http\Controllers\Customer\MarketplaceController;
use App\Http\Controllers\Customer\MySalesController;
use App\Http\Controllers\Customer\PaystackController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\TransactioHistoryController;
use App\Http\Controllers\Customer\TranxController;
use App\Http\Controllers\Customer\WalletController;
use App\Http\Controllers\LangController;
use App\Models\Cryptocurrency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Unicodeveloper\Paystack\Facades\Paystack;

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

Route::middleware(['auth', 'verified'])->name('customer.')->prefix('myaccount')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/support', [DashboardController::class, 'support'])->name('support');

    /* Buy/Sell Routes */
    Route::get('/buy-sell/select', [BuySellController::class, 'select'])->name('buy-sell-select');
    Route::post('/buy-sell/select-coin', [BuySellController::class, 'select_post'])->name('buy-sell-select.post');
    Route::get('/buy-sell', [BuySellController::class, 'index'])->name('buy-sell');
    Route::post('/bs', [BuySellController::class, 'buy_coin'])->name('buy_coin');
    Route::post('/sb', [BuySellController::class, 'sell_coin'])->name('sell_coin');
    Route::get('/buy-sell/sell-qr', [BuySellController::class, 'qr'])->name('qr');
    Route::post('/i_have_paid', [BuySellController::class, 'i_have_paid'])->name('i_have_paid');
    Route::get('/buy-sell/sell-successful', [BuySellController::class, 'success'])->name('buy-sell.success');
    /* End of Buy/Sell Route*/

    Route::get('/wallets', [WalletController::class, 'index'])->name('wallets');

    /* Transaction History Route */
    Route::get('/transaction-history', [TransactioHistoryController::class, 'index'])->name('transaction-history');
    Route::get('/transaction-history/{id}', [TransactioHistoryController::class, 'detail'])->name('transaction-history.detail');
    /* End of Transaction History Route */

    /* My Profile Route */
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update');
    Route::post('/change-password', [ProfileController::class, 'change_password'])->name('change-password');
    /* End of My Profile Route */

    Route::get('/marketplace', [MarketplaceController::class, 'list'])->name('list');

    /* Tranx Routes */
    Route::post('/payment', [MarketplaceController::class, 'payment'])->name('payment');

    /* Deposit Route */
    Route::get('/deposit', [TranxController::class, 'deposit'])->name('deposit');
    Route::post('/deposit-process', [TranxController::class, 'deposit_process'])->name('deposit.process');
    Route::get('/deposit-verify', [TranxController::class, 'deposit_verify'])->name('deposit.verify');
    /* End of Deposit Route */
    
    /* Withdrawal Route */
    Route::get('/withdrawal', [TranxController::class, 'withdrawal'])->name('withdrawal');
    Route::post('/withdrawal/process', [TranxController::class, 'withdrawal_process'])->name('withdrawal.process');
    Route::get('/withdrawal/success', [TranxController::class, 'withdrawal_success'])->name('withdrawal.success');
    /* End of Withdrawal Route */

    /* Transfer Route */
    Route::get('/transfer', [TranxController::class, 'transfer'])->name('transfer');
    Route::post('/transfer_proccess', [TranxController::class, 'transfer_process'])->name('transfer_process');
    Route::get('/transfer/successful', [TranxController::class, 'transfer_success'])->name('transfer-success');
    /* End of Transfer Route */
    /* End of Tranx Routes */

    Route::get('/my-sales', [MySalesController::class, 'index'])->name('my-sales');
    Route::get('/market-analysis', [MarketAnalysisController::class, 'index'])->name('market-analysis');
});

/* Buy Crypto Payment Route */
Route::get('/pay', [PaystackController::class, 'pay'])->name('pay');

Route::get('/verify', [PaystackController::class, 'verify'])->name('verify');
/* End of Buy Crypto Payment Route */

Route::prefix('admin')->name('admin.')->group(function(){
Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

/* Customer List Route */
Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
Route::get('/customers/{id}',[CustomersController::class, 'detail'])->name('customers.detail');
Route::get('/customer/suspend/{id}', [CustomersController::class, 'suspend'])->name('customers.suspend');
Route::get('/customers/reactive/{id}', [CustomersController::class, 'reactive'])->name('customers.reactive');
/* End of Customer List Route */

/* Crypto List Route */
Route::get('/cryptos', [CryptoController::class, 'index'])->name('cryptos');
/* Edit Crypto Route */
Route::get('cryptos/edit/{id}', [CryptoController::class, 'edit'])->name('cryptos.edit');
Route::post('/cryptos/edit/process/{id}', [CryptoController::class, 'edit_process'])->name('cryptos.edit.process');
/* End of Edit Crypto Route */

/* Add Crypto Route */
Route::get('/cryptos/add', [CryptoController::class, 'add'])->name('cryptos.add');
Route::post('/cryptos/add/process', [CryptoController::class, 'add_process'])->name('cryptos.add.process');
/* End of Add Crypto Route */

//Delete Crypto
Route::get('/cryptos/delete/{id}', [CryptoController::class, 'delete'])->name('cryptos.delete');
/* End of Crypto List Route */

/* Crypto Buys Route */
Route::get('/crypto-buys', [BuysController::class, 'index'])->name('crypto.buys');
/* End of Crypto Buys Route */

/* Crypto Sells Route */
Route::get('/crypto-sells', [SellsController::class, 'index'])->name('crypto.sells');
Route::get('/crypto-sells/buy/{id}', [SellsController::class, 'buy'])->name('crypto.sells.buy');
/* End of Crypto Sells Route */

/* Transactions Route */
Route::get('/transactions', [AdminTranxController::class, 'index'])->name('transactions');
/* End of Transactions Route */

/* Market Analysis Route */
Route::get('/market-analysis', [AdminMarketAnalysisController::class, 'index'])->name('market-analysis');
/* End of Market Analysis Route */

/* Settings Route */
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::post('/setting/change-password', [SettingsController::class, 'change_password'])->name('settings.change-password');
Route::post('/settings/update-info', [SettingsController::class, 'update_profile'])->name('settings.update-info');
Route::post('/setting/web', [SettingsController::class, 'web_setting'])->name('setting.web');
/* End of Settings Route */

/* Language Route */
Route::get('/languages', [AdminLangController::class, 'index'])->name('lang');
Route::get('/languages/add', [AdminLangController::class, 'add'])->name('lang.add');
Route::post('/languages/add/process', [AdminLangController::class, 'add_process'])->name('lang.add.process');
});

Route::get('/change-language/{code}', [LangController::class, 'changeLang'])->name('changeLang');

Route::get('/cr', function () {
    return view('home');
});

