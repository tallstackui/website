<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Cookie;
use TallStackUi\TallStackUiServiceProvider;

if (! function_exists('tallstackui_configuration')) {
    /** The configuration file shipped by the installed TallStackUI, read at runtime. */
    function tallstackui_configuration(): string
    {
        $provider = (new ReflectionClass(TallStackUiServiceProvider::class))->getFileName();

        if ($provider === false || ! is_readable($path = dirname($provider).'/config.php')) {
            return '// The TallStackUI configuration file could not be located.';
        }

        return mb_rtrim((string) file_get_contents($path));
    }
}

if (! function_exists('latest_version')) {
    /** The newest major currently published, taken from the top of the sites map. */
    function latest_version(): string
    {
        return array_key_first(config('documentation.sites'));
    }
}

if (! function_exists('version_url')) {
    /** Absolute URL of a documentation page on the deployment that serves that major. */
    function version_url(string $version, string ...$segments): string
    {
        $base = mb_rtrim(config("documentation.sites.$version"), '/');

        return $segments ? $base.'/docs/'.implode('/', $segments) : $base.'/docs';
    }
}

if (! function_exists('apply_prefix')) {
    function apply_prefix(array $data): array
    {
        if (($prefix = Cookie::get('prefix')) === null) {
            return $data;
        }

        return collect($data)
            ->filter(fn (mixed $value) => is_string($value))
            ->filter(fn (string $value) => str_contains($value, '<x-'))
            ->mapWithKeys(function (string $value, string $key) use ($prefix) {
                $value = preg_replace_callback('/(<\/?x-(?!slot:))([^>]*>)/', function (array $matches) use ($prefix) {
                    return "{$matches[1]}{$prefix}{$matches[2]}";
                }, $value);

                return [$key => $value];
            })
            ->toArray();
    }
}
