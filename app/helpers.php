<?php

use Illuminate\Support\Facades\Cookie;

if (! function_exists('apply_prefix')) {
    function apply_prefix(array $data): array
    {
        $prefix = Cookie::get('prefix');

        if ($prefix === null) {
            return $data;
        }

        return collect($data)
            ->filter(fn ($value) => is_string($value))
            ->filter(fn ($value) => str_contains($value, '<x-'))
            ->mapWithKeys(function (string $value, string $key) use ($prefix) {
                $value = str_replace('<x-', "<x-{$prefix}", $value);
                $value = str_replace('</x-', "</x-{$prefix}", $value);

                return [$key => $value];
            })
            ->toArray();
    }
}
