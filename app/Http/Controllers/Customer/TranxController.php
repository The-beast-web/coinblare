<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranxController extends Controller
{
    public function deposit()
    {
        return view('customer.transactions.deposit');
    }

    public function withdrawal()
    {
        return view('customer.transactions.withdrawal');
    }
}
