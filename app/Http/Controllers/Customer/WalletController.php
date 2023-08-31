<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Wallets');
        $wallet = Wallet::where('user_id', Auth::id())->get();
        return view('customer.wallets.index', compact('wallet'));
    }
}
