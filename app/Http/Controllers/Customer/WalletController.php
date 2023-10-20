<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cryptocurrency;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;

class WalletController extends Controller
{
    protected $rules = [
        'crypto' => 'required',
        'amount' => 'required'
    ];

    protected $message = [
        'crypto.required' => 'Please select a cryptocurrency',
        'amount.required' => 'Enter An Amount',
    ];

    protected $rules_depo = [
        'address' => 'required',
        'file' => 'required'
    ];

    public $withdraw_rule;

    public function __construct()
    {
        $this->withdraw_rule = [
            'crypto' => 'required',
            'amount' => ['required', function ($field, $value, $fail) {
                if($value > 20) {
                    $fail('Error');
                }
            }]
        ];
    }

    public function index()
    {
        $this->seo()->setTitle('Wallets');
        $wallet = Wallet::where('user_id', Auth::id())->get();
        $crypto = Cryptocurrency::all();
        $validator = JsValidatorFacade::make($this->rules, $this->message);
        $validator2 = JsValidatorFacade::make($this->withdraw_rule);
        return view('customer.wallets.index', compact(['wallet', 'crypto', 'validator', 'validator2']));
    }

    public function deposit_process1(Request $request)
    {
        $validated = Validator::make($request->all(), $this->rules, $this->message);

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

            $crypto = Cryptocurrency::where('name', $request['crypto'])->first();
            session()->put('crypto', $request['crypto']);
            session()->put('amount', $request['amount']);
            session()->put('crypto_abbr', $crypto->abbr);

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.wallets.deposit.view')
            ], 200);
        }
    }

    public function deposit_view()
    {
        $this->seo()->setTitle('Crypto Deposit');
        $crypto = Cryptocurrency::where('name', session()->get('crypto'))->first();
        $validator = JsValidatorFacade::make($this->rules_depo);
        return view('customer.wallets.deposit', compact(['crypto', 'validator']));
    }

    public function deposit_process2(Request $request)
    {
        dd($request->all());
        $validated = Validator::make($request->all(), $this->rules_depo);


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

            dd($request->all());

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.wallets.deposit.view')
            ], 200);
        }
    }
}
