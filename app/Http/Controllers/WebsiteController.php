<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebsiteController extends Controller
{
    public function home()
    {
        $this->seo()->setTitle('Buy & Sell Cryptocurrency');
        return view('website.index');
    }

    public function about()
    {
        $this->seo()->setTitle('About');
        return view('website.about');
    }

    public function faq()
    {
        $this->seo()->setTitle('FAQ');
        return view('website.faq');
    }

    public function features()
    {
        $this->seo()->setTitle('Features');
        return view('website.features');
    }

    public function change_lang(Request $request, $code)
    {
        App::setLocale($code);
        session()->put('lang', $code);
        return redirect()->back();
    }
}
