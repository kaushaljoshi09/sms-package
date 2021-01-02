<?php
namespace Kaushal\Twilio;

use Illuminate\Support\ServiceProvider;

class TwilioServiceProvider extends ServiceProvider 
{
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/TwilioApi.php';
        include __DIR__.'/Exceptions/Handler.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}