<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\TransactionHistory;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Facades\Paystack;
use Illuminate\Support\Str;

class PaystackController extends Controller
{
    public function pay()
    {
        $data = array(
            "amount" => request()->session()->get('price') * 100,
            "reference" => Str::random(10),
            "email" => Auth::user()->email,
            "currency" => "NGN",
            "orderID" => 23456,
            'metadata' => [
                'order_id' => rand(000000000, 999999999)
            ],
            'callback_url' => route('verify')
        );

        return Paystack::getAuthorizationUrl($data)->redirectNow();
    }

    public function verify()
    {
        $paymentDetails = Paystack::getPaymentData();
        $wallet = Wallet::where('user_id', Auth::id())->where('crypto_wallet', request()->session()->get('crypto_wallet'))->first();
        $user = User::where('id', Auth::id())->first();

        /* Save to Transaction History Table */
        $tranx = new TransactionHistory();
        $tranx->user_id = Auth::id();
        $tranx->tranx_type = "Buy " . request()->session()->get('crypto');
        $tranx->method = "Buy";
        $tranx->amount = request()->session()->get('amount');
        $tranx->price = request()->session()->get('price');
        $tranx->abbr = request()->session()->get('abbr');
        $tranx->save();

        if (is_null($wallet)) {
            $wallet = new Wallet();
            $wallet->user_id = Auth::id();
            $wallet->wallet_symbol = 'icon ni ni-' . request()->session()->get('crypto_wallet');
            $wallet->crypto_wallet = request()->session()->get('crypto_wallet');
            $wallet->abbr = request()->session()->get('abbr');
            $wallet->balance_in_crypto = request()->session()->get('amount');
            $wallet->balance_in_currency = request()->session()->get('amount') * request()->session()->get('r_value');
            $user->balance = request()->session()->get('amount') * request()->session()->get('r_value');
            $wallet->save();
            $user->save();
        } else {
            $wallet->balance_in_crypto = $wallet->balance_in_crypto + request()->session()->get('amount');
            $wallet->balance_in_currency = $wallet->balance_in_currency + request()->session()->get('price');
            $user->balance = $user->balance + request()->session()->get('amount') * request()->session()->get('r_value');
            $wallet->save();
            $user->save();
        }
        return redirect()->route('customer.dashboard');
    }
}
