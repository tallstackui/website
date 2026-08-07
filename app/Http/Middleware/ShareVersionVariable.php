<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareVersionVariable
{
    public function handle(Request $request, Closure $next): Response
    {
        View::share('version', config('documentation.version'));

        return $next($request);
    }
}
