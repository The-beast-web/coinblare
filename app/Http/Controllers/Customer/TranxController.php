<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
