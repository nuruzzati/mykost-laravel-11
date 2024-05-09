<?php

namespace App\Http\Middleware;

use Closure;

class EnsurePostMethod
{
    public function handle($request, Closure $next)
    {
        if ($request->method() !== 'POST') {
            abort(405, 'Method Not Allowed');
        }

        return $next($request);
    }
}
