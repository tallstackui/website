<?php

use Illuminate\Support\Facades\Cookie;

if (! defined('LATEST_VERSION')) {
    define('LATEST_VERSION', 'v3');
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
