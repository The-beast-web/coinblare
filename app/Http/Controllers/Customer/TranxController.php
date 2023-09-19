<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cryptocurrency;
use App\Models\TransactionHistory;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;

class TranxController extends Controller
{
    public function deposit()
    {
        $this->seo()->setTitle('Deposit');
        return view('customer.transactions.deposit');
    }

    public function withdrawal()
    {
        $this->seo()->setTitle('Withdrawal');
        return view('customer.transactions.withdrawal');
    }

    public function transfer()
    {
        $this->seo()->setTitle('Transfer Cryptos');
        $crypto = Cryptocurrency::all();
        return view('customer.transfer.index', compact(['crypto']));
    }

    public function transfer_process(Request $request)
    {
        $_rules = [
            'crypto' => 'required',
            'amount' => ['required', function ($field, $value, $fail) {
                $request = request()->all();
                $wallet = Wallet::where('user_id', Auth::id())->where('crypto_wallet', $request['crypto'])->first();
                if ($value <= 0) {
                    $fail('Please Enter A Valid Amount');
                } elseif ($value > $wallet->balance_in_currency) {
                    $fail('Insufficient Balance');
                }
            }],
            'rec_crypto_id' => ['required', function ($field, $value, $fail) {
                $reciepient = User::where('email', $value)->first();
                if (!$reciepient) {
                    $fail('Invalid Cryptobot ID');
                } elseif ($reciepient->id == Auth::id()) {
                    $fail("You Can't Make A Transfer To Yourself");
                }
            }],
            'password' => ['required', function ($field, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Incorrect Password');
                }
            }]
        ];

        $message = [
            'crypto.required' => 'Select A Cryptocurrency To Transfer',
            'amount.required' => 'Enter The Transfer Amount In USD',
            'rec_crypto_id.required' => "Enter The Reciepient's ID",
            'password.required'  => 'Enter Your Password'
        ];

        $validated = Validator::make($request->all(), $_rules, $message);

        if ($validated->fails()) {
            return Response::json(
                array(
                    'status' => false,
                    'errors' => $validated->getMessageBag()->toArray()
                ),
                400
                //400 being the HTTP code for an invalid request.
            );
        }

        if ($validated->passes()) {
            $reciever = User::where('email', $request->rec_crypto_id)->first();
            $wallet = Wallet::where('user_id', $reciever->id)->where('crypto_wallet', $request->crypto)->first();
            if (is_null($wallet)) {
                $wallet = new Wallet();
                $crypto = Cryptocurrency::where('name', $request->crypto)->first();
                $wallet->user_id = $reciever->id;
                $wallet->wallet_symbol = 'icon ni ni-' . $request->crypto;
                $wallet->crypto_wallet = $request->crypto;
                $wallet->abbr = $crypto->abbr;
                $wallet->balance_in_crypto = $request->amount / $crypto->r_value;
                $wallet->balance_in_currency = $request->amount;
                $wallet->save();
                $user = User::where('id', $reciever->id)->first();
                $user->balance = $user->balance + $request->amount;
                $user->save();

                /* Save to Transaction History Table */
                $tranx = new TransactionHistory();
                $tranx->user_id = Auth::id();
                $tranx->tranx_type = "Transfer " . $request->crypto;
                $tranx->method = "transfer";
                $tranx->amount = $request->amount;
                $tranx->price = $request->amount / $crypto->r_value;
                $tranx->abbr = $crypto->abbr;
                $tranx->save();

                $request->session()->put('amount', $request->amount);
                $request->session()->put('reciever', $reciever->email);
                $request->session()->put('abbr', $crypto->abbr);
            } else {
                $crypto = Cryptocurrency::where('name', $request->crypto)->first();
                $wallet->balance_in_crypto = $wallet->balance_in_crypto + $request->amount / $crypto->r_value;
                $wallet->balance_in_currency =  $wallet->balance_in_currency + $request->amount;
                $wallet->save();
                $user = User::where('id', $reciever->id)->first();
                $user->balance = $user->balance + $request->amount;
                $user->save();

                /* Save to Transaction History Table */
                $tranx = new TransactionHistory();
                $tranx->user_id = Auth::id();
                $tranx->tranx_type = "Transfer " . $request->crypto;
                $tranx->method = "transfer";
                $tranx->amount = $request->amount;
                $tranx->price = $request->amount / $crypto->r_value;
                $tranx->abbr = $crypto->abbr;
                $tranx->save();

                $request->session()->put('amount', $request->amount);
                $request->session()->put('reciever', $reciever->email);
                $request->session()->put('abbr', $crypto->abbr);
            }
            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.buy-sell.success')
            ], 200);
        }
    }

    public function  transfer_success()
    {
        $this->seo()->setTitle('Transfer Successful');
        return view('customer.transfer.success');
    }
}
