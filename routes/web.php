<?php

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
    Route::get('/deposit', [TranxController::class, 'deposit'])->name('deposit');
    Route::get('/withdrawal', [TranxController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/transfer', [TranxController::class, 'transfer'])->name('transfer');
    Route::post('/transfer_proccess', [TranxController::class, 'transfer_process'])->name('transfer_process');
    Route::get('/transfer/successful', [TranxController::class, 'transfer_success'])->name('transfer-success');
    /* End of Tranx Routes */

    Route::get('/my-sales', [MySalesController::class, 'index'])->name('my-sales');
    Route::get('/market-analysis', [MarketAnalysisController::class, 'index'])->name('market-analysis');
});


Route::get('/pay', [PaystackController::class, 'pay'])->name('pay');

Route::get('/verify', [PaystackController::class, 'verify'])->name('verify');

Route::get('/cr', function () {
    return view('home');
});

Route::post('/crr', function () {

    $request = request()->all();
    $cry = new Cryptocurrency();
    $cry->name = $request['name'];
    $cry->value = $request['value'];
    $cry->address = $request['address'];
    if (request()->has('image')) {
        $path = Storage::disk('mydisk')->put('crypto', $request['image']);
        $cry->crypto_img = $path;
    }
    $cry->save();
})->name('dgg');
