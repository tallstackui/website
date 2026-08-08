<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RetrieveReleases
{
    public static function execute(): Collection
    {
        $token = config()->get('services.github.token');

        if (! $token) {
            return collect();
        }

        return Cache::remember(
            'releases',
            now()->addDay(),
            fn () => Http::withToken($token)
                ->get('https://api.github.com/repos/tallstackui/tallstackui/releases')
                ->collect()
        );
    }
}
