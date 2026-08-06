<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait VersionDiscovery
{
    /**
     * The versions served by this deployment.
     */
    public function versions(): array
    {
        return [
            config('documentation.version'),
        ];
    }

    /**
     * The version this deployment falls back to.
     */
    public function default(): string
    {
        return head($this->versions());
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

        return $version ?: $this->default();
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
