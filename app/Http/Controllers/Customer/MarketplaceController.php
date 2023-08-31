<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cryptocurrency;
use App\Models\Marketplace;
use App\Models\User;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function list()
    {
        $crypto = Cryptocurrency::where('name', request()->session()->get('crypto'))->first();
        $price = request()->session()->get('amount') * $crypto->value;
        request()->session()->put('price', $price);
        request()->session()->put('abbr', $crypto->abbr);
        request()->session()->put('r_value', $crypto->r_value);
        request()->session()->put('crypto_wallet', $crypto->name); 
        return view('customer.marketplace.list', compact(['price', 'crypto']));
    }

    public function payment(Request $request)
    {
        $input = $request->all();
        if($input['bs-method'] == "Paystack"){
            return redirect()->route('pay');
        } else {
            return redirect()->route('customer.dashboard');
        }
    }
    
}
