<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function changeLang(Request $request, $code)
    {
        App::setLocale($code);
        setting($code)->save();

        return redirect()->back();
    }
}
