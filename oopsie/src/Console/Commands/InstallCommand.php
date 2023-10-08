<?php

namespace Tallers\Oopsie\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oopsie:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initiate oopsie with configuration steps';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

    }
}
