<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Tallers\BharPhyit\BharPhyit;
use Tallers\BharPhyit\BharPhyitServiceProvider as ServiceProvider;

class BharPhyitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();

        BharPhyit::authUsing(fn (Request $request) => app()->environment('local'));
    }
}
