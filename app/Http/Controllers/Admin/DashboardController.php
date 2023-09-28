<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cryptocurrency;
use App\Models\SaleOrder;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Admin Dashboard');
        $revenue = Admin::all();
        $users  = User::orderByDesc('id')->limit(4)->get();
        return view('admin.dashboard.index', compact(['revenue', 'users']));
    }
}
