<?php

namespace Spatie\NovaTool\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\NovaTool\NovaTool;
use Spatie\NovaTailTool\NovaTailTool;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        return NovaTool::check($request)
            ? $next($request)
            : abort(403);
    }
}