<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cryptocurrency;
use App\Models\Deposit;
use App\Models\SaleOrder;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Admin Dashboard');
        $sell = SaleOrder::where('address', '!=', 'sold through wallet')->get();
        $deposit = Deposit::all();
        $rev = Admin::all();
        $revenue = $sell->sum('price') + $deposit->sum('value') + $rev->sum('total_revenue');
        $users  = User::where('id', '!=', 6)->orderByDesc('id')->limit(4)->get();
        return view('admin.dashboard.index', compact(['revenue', 'users', 'deposit', 'sell', 'rev']));
    }
}
