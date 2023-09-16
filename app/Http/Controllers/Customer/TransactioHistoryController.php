<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactioHistoryController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Transaction History');
        $tranx = TransactionHistory::where('user_id', Auth::id())->get();
        return view('customer.transaction-history.index', compact('tranx'));
    }
}
