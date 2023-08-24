<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function list(){
        return view('customer.marketplace.list');
    }

    public function detail()
    {
        return view('customer.marketplace.detail');
    }
}
