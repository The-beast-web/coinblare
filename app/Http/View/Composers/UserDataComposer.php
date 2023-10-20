<?php

namespace App\Http\View\Composers;

use App\Models\Language;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use illuminate\View\View;

class UserDataComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $lang = Language::where('lang_code', '!=', app()->getLocale())->limit(2)->get();
        $f_lang = Language::orderBy('language_name')->get();
        $user = User::where('id', Auth::id())->first();
        $notification = $user->notifications;
        $unread = $user->unreadNotifications();

        $view->with([
            'lang' => $lang,
            'f_lang' => $f_lang,
            'notification' => $notification,
            'unread' => $unread
        ]);
    }
}
