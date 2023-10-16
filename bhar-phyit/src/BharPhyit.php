<?php

namespace Tallers\BharPhyit;

use Closure;
use Illuminate\Http\Request;

class BharPhyit
{
    protected static Closure $authUsing;

    public static function authUsing(Closure $callback): void
    {
        static::$authUsing = $callback;
    }

    public static function check(Request $request): bool
    {
        return (static::$authUsing)($request) ?: app()->environment('local');
    }
}
