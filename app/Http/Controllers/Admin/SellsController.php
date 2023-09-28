<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SaleOrder;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SellsController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Sells | Admin');
        $tranx = SaleOrder::all();
        return view('admin.sells.index', compact('tranx'));
    }

    public function buy($id)
    {
        $sale = SaleOrder::find($id);
        $tranx = TransactionHistory::find($sale->tran_id);

        $sale->status = 'sold';
        $sale->save();
        $tranx->status = 'sold';
        $tranx->save();

        $user  = User::where('id', $sale->user_id)->first();
        $user->balance = $user->balance + $sale->price;
        $user->withdrawalable = $user->withdrawalable  + $sale->price;
        $user->save();

        return redirect()->back();
    }
}
