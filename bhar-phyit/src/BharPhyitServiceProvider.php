<?php

namespace Tallers\BharPhyit;

use Monolog\Logger;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tallers\BharPhyit\Handlers\BharPhyitHandler;

class BharPhyitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('bhar-phyit')
            ->hasConfigFile()
            ->publishesServiceProvider('BharPhyitServiceProvider')
            ->hasMigrations([
                'create_bhar_phyit_error_logs_table',
                'create_bhar_phyit_error_log_details_table',
            ])
            ->hasInstallCommand(function (InstallCommand $command): void {
                $command
                    ->publishConfigFile()
                    ->copyAndRegisterServiceProviderInApp()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('tallers/bhar-phyit');
            });
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        parent::register();

        if ($this->app['log'] instanceof \Illuminate\Log\LogManager) {
            $this->app['log']->extend('bhar-phyit', function ($app, $config) {
                $handler = new BharPhyitHandler();

                return new Logger('bhar-phyit', [$handler]);
            });
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();
    }
}
