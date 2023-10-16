<?php

namespace Tallers\BharPhyit\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tallers\BharPhyit\BharPhyit;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return BharPhyit::check($request) ? $next($request) : abort(403);
    }
}
