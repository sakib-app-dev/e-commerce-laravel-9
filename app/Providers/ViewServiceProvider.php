<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\FrontendComposer;
use App\View\Composers\CartCountComposer;

class ViewServiceProvider extends ServiceProvider
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
        // dd('check boot');
        View::composer('components.frontend.layouts.nav', FrontendComposer::class);
        View::composer('components.frontend.layouts.nav', CartCountComposer::class);
        // return view("components.frontend.layouts.nav");
    }
}
