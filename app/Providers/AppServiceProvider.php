<?php

namespace App\Providers;

use App\Http\View\Composers\UserDataComposer;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Config::set('seotools.meta.defaults.title', setting('web_name'));
        Config::set('app.name', setting('web_name'));

        view()->composer('customer.layout.footer', UserDataComposer::class);
        view()->composer('customer.layout.topbar', UserDataComposer::class);
        view()->composer('admin.layout.topbar', UserDataComposer::class);
    }
}
