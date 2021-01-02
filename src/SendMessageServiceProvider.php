<?php
namespace Kaushal\Sms;

use Illuminate\Support\ServiceProvider;

class SendMessageServiceProvider extends ServiceProvider 
{
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/SendMessage.php';
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