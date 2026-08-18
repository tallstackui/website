<?php

declare(strict_types=1);

use Sentry\Laravel\Integration;
use Illuminate\Foundation\Application;
use Torchlight\Middleware\RenderTorchlight;
use Torchlight\Exceptions\TorchlightException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(RenderTorchlight::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->dontReport(TorchlightException::class);

        Integration::handles($exceptions);
    })->create();
