<?php

use App\Models\Language;
use Stichoza\GoogleTranslate\GoogleTranslate;

function getRoute($route)
{
    if (request()->routeIs($route)) {
        return "active current-page";
    }
}

function lang($lang)
{
    $lange = Language::where('lang_code', $lang)->first();
    return $lange->language_name;
}

function translate($word)
{
    return GoogleTranslate::trans($word, app()->getLocale());
}
