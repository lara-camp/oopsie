<?php

namespace Tallers\BharPhyit\Handlers;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;

use function Laravel\Prompts\error;

class BharPhyitHandler extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        dd($record);
        error(json_encode($record));
    }
}
