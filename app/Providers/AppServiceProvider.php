<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

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
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'g2vptf9jyy7dkmjb',
                    'publicKey' => 'pwkypwkxm622f4p4',
                    'privateKey' => 'ac601e604d170fcde03dc4ca9799296e'
                ]
                );
        });
    }
}
