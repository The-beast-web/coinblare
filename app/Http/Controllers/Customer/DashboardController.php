<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Crypto Dashboard');
            $wallet = Wallet::where('user_id', Auth::id());
            $wall = Wallet::where('user_id', Auth::id())->get();
        return view('customer.dashboard.index', compact(['wallet', 'wall']));
    }
}
