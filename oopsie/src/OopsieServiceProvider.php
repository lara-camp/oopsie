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
        if (! defined('OOPSIE_PATH')) {
            define('OOPSIE_PATH', realpath(__DIR__ . '/../'));
        }

        $this->configure();

        if ($this->app['log'] instanceof \Illuminate\Log\LogManager) {
            $this->app['log']->extend('oopsie', function ($app, $config) {
                $handler = new OopsieHandler();

                return new Logger('oopsie', [$handler]);
            });
        }
    }

    protected function configure(): void
    {
        $this->registerCommands();

        $this->mergeConfigFrom(OOPSIE_PATH . '/config/oopsie.php', 'oopsie');
    }

    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([

            ]);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
