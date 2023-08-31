<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MySalesController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('My Sales');
        return view('customer.my-sales.index');
    }
}
