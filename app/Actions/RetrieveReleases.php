<?php

namespace App\Actions;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class RetrieveReleases
{
    public static function execute(): Collection
    {
        $token = config()->get('services.github.token');

        if (! $token) {
            return collect();
        }

        if ($cache = Cache::get('releases')) {
            return $cache;
        }

        $response = Http::withToken($token.'1')->get('https://api.github.com/repos/tallstackui/tallstackui/releases');

        if ($response->failed()) {
            return collect();
        }

        return Cache::remember(
            'releases',
            now()->addDay(),
            fn () => $response->collect()
        );
    }
}
