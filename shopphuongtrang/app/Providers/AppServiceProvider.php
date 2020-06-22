<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\ServiceProvider;
use App\Type_product;
use Illuminate\Contracts\Session\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['website/layout/header', 'website/pages/type_product'], function($view){
            $typeProdct = Type_product::all();
            $view->with(['typeProduct'=>$typeProdct]);
        });
    }
}
