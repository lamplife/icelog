<?php
namespace Firstphp\Icelog\Providers;

use Illuminate\Support\ServiceProvider;
use Firstphp\Icelog\Services\IcelogService;
use Illuminate\Support\Facades\Config;

class IcelogServiceProvider extends ServiceProvider
{

    protected $defer = false;

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
        $this->app->singleton('IcelogService', function () {
            return new IcelogService();
        });

    }

}
