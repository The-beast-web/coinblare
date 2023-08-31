<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Facades\Paystack;
use Illuminate\Support\Str;

class PaystackController extends Controller
{
    public function pay(){
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
    
    public function verify(){
        $paymentDetails = Paystack::getPaymentData();
        $wallet = Wallet::where('user_id', Auth::id())->where('crypto_wallet', request()->session()->get('crypto_wallet'))->first();
        $user = Auth::user();

        if(is_null($wallet)){
            $wallet = new Wallet();
            $wallet->user_id = Auth::id();
            $wallet->wallet_symbol = 'icon ni ni-'.request()->session()->get('crypto_wallet');
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
