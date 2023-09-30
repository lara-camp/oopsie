<?php

namespace Tallers\Oopsie;

use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Tallers\Oopsie\Handlers\OopsieHandler;

class OopsieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if ($this->app['log'] instanceof \Illuminate\Log\LogManager) {
            $this->app['log']->extend('oopsie', function ($app, $config) {
                $handler = new OopsieHandler();

                return new Logger('oopsie', [$handler]);
            });
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
