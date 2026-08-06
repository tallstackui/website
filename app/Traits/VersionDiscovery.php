<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait VersionDiscovery
{
    /**
     * The major published by this deployment. The version no longer
     * appears in the URL, so it comes straight from the configuration.
     */
    public function current(): string
    {
        return config('documentation.version');
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
