<?php

namespace Tallers\Oopsie\Handlers;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;

use function Laravel\Prompts\error;

class OopsieHandler extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        error($record->formatted);
    }
}
