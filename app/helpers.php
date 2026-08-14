<?php

declare(strict_types=1);

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cookie;
use TallStackUi\TallStackUiServiceProvider;

if (! function_exists('tallstackui_configuration')) {
    /** The configuration file shipped by the installed TallStackUI, read at runtime. */
    function tallstackui_configuration(): string
    {
        return \Illuminate\Support\Facades\Cache::remember('config.tallstackui', now()->addHour(), function (): string {
            $provider = (new ReflectionClass(TallStackUiServiceProvider::class))->getFileName();

            if ($provider === false || ! is_readable($path = dirname($provider).'/config.php')) {
                return '// The TallStackUI configuration file could not be located.';
            }

            return mb_rtrim((string) file_get_contents($path));
        });
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

if (! function_exists('landing_ticker_components')) {
    /**
     * Landing ticker: every TallStackUI component that has a documentation page.
     *
     * @return Collection<int, array{name: string, main: string, children: string}>
     */
    function landing_ticker_components(): Collection
    {
        $aliases = ['errors' => 'error'];
        // `error` is the internal form helper. The Errors component is `errors` → ui/error.
        $skip     = ['error', 'hint', 'label', 'floating'];
        $sections = ['form', 'ui', 'interactions'];
        $seen     = [];

        return collect(config('ts-ui.components'))
            ->keys()
            ->reject(fn (string $key): bool => in_array($key, $skip, true) || str_starts_with($key, 'wrapper.'))
            ->map(function (string $key) use ($aliases, $sections, &$seen): ?array {
                $slug  = $aliases[$key] ?? str($key)->replace('.', '-')->value();
                $label = $key;

                $item = null;

                foreach ($sections as $section) {
                    if (view()->exists("documentation.{$section}.{$slug}")) {
                        $item = [$section, $slug];

                        break;
                    }
                }

                if ($item === null && str_contains($key, '.')) {
                    $slug  = str($key)->before('.')->value();
                    $label = $slug;

                    foreach ($sections as $section) {
                        if (view()->exists("documentation.{$section}.{$slug}")) {
                            $item = [$section, $slug];

                            break;
                        }
                    }
                }

                if ($item === null || isset($seen[$item[1]])) {
                    return null;
                }

                $seen[$item[1]] = true;

                return [
                    'name'     => str($label)->replace(['.', '-'], ' ')->title()->value(),
                    'main'     => $item[0],
                    'children' => $item[1],
                ];
            })
            ->filter()
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();
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
