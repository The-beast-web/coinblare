<?php

namespace App\Http\View\Composers;

use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use illuminate\View\View;

class UserDataComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $lang = Language::all();

        $view->with([
            'lang' => $lang
        ]);
    }
}
