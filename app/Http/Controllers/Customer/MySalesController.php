<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\SaleOrder;
use Illuminate\Http\Request;

class MySalesController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('My Sales');
        $sales = SaleOrder::where
        return view('customer.my-sales.index');
    }
}
