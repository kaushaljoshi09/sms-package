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
        include __DIR__.'/Twilio.php';
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