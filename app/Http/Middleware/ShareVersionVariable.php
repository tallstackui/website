<?php

namespace App\Http\Middleware;

use App\Traits\VersionDiscovery;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareVersionVariable
{
    use VersionDiscovery;

    public function handle(Request $request, Closure $next): Response
    {
        View::share('version', $this->current());

        return $next($request);
    }
}
