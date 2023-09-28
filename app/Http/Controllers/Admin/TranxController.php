<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransactionHistory;

class TranxController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Transactions | Admin');
        $tranx = TransactionHistory::orderByDesc('id')->get();
        return view('admin.transactions.index', compact('tranx'));
    }
}
