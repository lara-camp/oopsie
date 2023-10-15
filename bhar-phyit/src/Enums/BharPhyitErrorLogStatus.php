<?php

namespace Tallers\BharPhyit\Enums;

enum BharPhyitErrorLogStatus: string
{
    case UNREAD = 'unread';
    case READ = 'read';
    case RESOLVED = 'resolved';

    public static function unresolveStatuses(): array
    {
        return [
            self::UNREAD,
            self::READ,
        ];
    }
}
