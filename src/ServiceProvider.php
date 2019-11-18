<?php


namespace SethPhat\:namespace;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // un-comment this if you use Facade
//        App::bind(':facade',function() {
//            return new SethPhat\:namespace\Facade;
//        });
    }
}