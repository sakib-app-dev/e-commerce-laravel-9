<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
// use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartCountComposer;


class CartCountProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd('cart');
        // View::composer('components.frontend.layouts.nav', CartCountComposer::class);
    }
}
