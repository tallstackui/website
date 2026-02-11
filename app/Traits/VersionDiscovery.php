<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait VersionDiscovery
{
    /**
     * The available versions.
     */
    public function versions(): array
    {
        return [
            'v1',
            'v2',
            'v3',
        ];
    }

    /**
     * Discover the current selected version based
     * on the current route or get the default.
     */
    public function current(): string
    {
        $version = str(Route::getCurrentRoute()?->parameter('version'))->after('docs/')
            ->before('/')
            ->value();

        return $version ?: LATEST_VERSION;
    }

    /**
     * Get the current route URI.
     */
    public function uri(): string
    {
        return Route::getCurrentRoute()->uri();
    }

    /**
     * Get the cache key for the current route.
     */
    public function cacheKey(): string
    {
        return $this->current().'-'.$this->uri();
    }
}
