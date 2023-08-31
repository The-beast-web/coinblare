<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactioHistoryController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Transaction History');
        return view('customer.transaction-history.index');
    }
}
