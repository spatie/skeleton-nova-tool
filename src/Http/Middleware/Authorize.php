<?php

namespace Spatie\TailTool\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\TailTool\TailTool;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return app(TailTool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}