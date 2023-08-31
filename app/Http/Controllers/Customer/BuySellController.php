<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cryptocurrency;
use App\Models\SaleOrder;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;
use Illuminate\Support\Str;

class BuySellController extends Controller
{

    protected $validationRules = [
        'amount_buy' => 'required',
    ];

    protected $paidRules = [
        'address' => 'required'
    ];

    public function select()
    {
        $this->seo()->setTitle('Cryptocurrency To Trade');
        $crypto = Cryptocurrency::all();
        return view('customer.buy-sell.select', compact('crypto'));
    }

    public function select_post()
    {
        $request = request()->all();
        $coin = explode("-", $request['tranx_coin']);
        request()->session()->put('crypto', $coin[0]);
        request()->session()->put('crypto_abbr', $coin[1]);
        return redirect()->route('customer.buy-sell');
    }

    public function index()
    {

        $validator = JsValidatorFacade::make($this->validationRules);
        $user = Auth::user();
        $this->seo()->setTitle('Buy/Sell' . ' ' . Str::ucfirst(request()->session()->get('crypto')));
        return view('customer.buy-sell.index', compact(['user', 'validator']));
    }

    public function buy_coin(Request $request)
    {
        $validated = Validator::make($request->all(), $this->validationRules);

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
            request()->session()->put('amount', $request['amount_buy']);
            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.list')
            ], 200);
        }
    }

    public function sell_coin(Request $request)
    {
        $rules = [
            'sell_amount' => 'required',
            'sell_price' => 'required',
            'payment_method' => 'required'
        ];

        $validated = Validator::make($request->all(), $rules);


        if ($request['payment_method'] == "external") {
            $route = 'customer.qr';
        } else {
            request()->session()->put('s-mzg', 'cryptobot');
            $crypto = Cryptocurrency::where('name', request()->session()->get('crypto'))->first();
            $wallet = Wallet::where('user_id', Auth::id())->where('crypto_wallet', request()->session()->get('crypto'))->first();
            $wallet->balance_in_crypto = $wallet->balance_in_crypto - $request['sell_amount'];
            $wallet->balance_in_currency = $wallet->balance_in_currency - $request['sell_amount'] * $crypto->r_value;
            $wallet->save();
            $route = 'customer.buy-sell.success';
        }

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
            request()->session()->put('sell_amount', $request['sell_amount']);
            request()->session()->put('sell_price', $request['sell_price']);
            return Response::json([
                'status' => true,
                'redirect_url' => route($route)
            ], 200);
        }
    }

    public function qr()
    {
        $validator = JsValidatorFacade::make($this->paidRules);
        $crypto = Cryptocurrency::where('name', request()->session()->get('crypto'))->first();
        return view('customer.buy-sell.qr', compact(['crypto', 'validator']));
    }

    public function i_have_paid(Request $request)
    {
        $validated = Validator::make($request->all(), $this->paidRules);

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
            request()->session()->put('s-mzg', 'external');
            $sell = new SaleOrder();
            $sell->user_id = Auth::id();
            $sell->amount = request()->session()->get('sell_amount');
            $sell->price = request()->session()->get('sell_price');
            $sell->crypto = request()->session()->get('crypto');
            $sell->save();
            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.buy-sell.success')
            ], 200);
        }
    }

    public function success()
    {
        return view('customer.buy-sell.success');
    }
}
