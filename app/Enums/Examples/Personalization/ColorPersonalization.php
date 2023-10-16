<?php

namespace App\Enums\Examples\Personalization;

class ColorPersonalization
{
    public const FILE = <<<'HTML'
    theme: {
        extend: {
            // ...

            colors: {
                'primary': {
                    DEFAULT: '#acf73b',
                    '50': '#f7ffe5',
                    '100': '#edffc7',
                    '200': '#daff95',
                    '300': '#beff57',
                    '400': '#acf73b',
                    '500': '#83dd05',
                    '600': '#63b100',
                    '700': '#4b8605',
                    '800': '#3e690b',
                    '900': '#34590e',
                    '950': '#193201',
                },
                'secondary': {
                    DEFAULT: '#b5b5b5',
                    '50': '#f7f7f7',
                    '100': '#ededed',
                    '200': '#dfdfdf',
                    '300': '#c8c8c8',
                    '400': '#b5b5b5',
                    '500': '#999999',
                    '600': '#888888',
                    '700': '#7b7b7b',
                    '800': '#676767',
                    '900': '#545454',
                    '950': '#363636',
                }
            }
        },
    },
    HTML;

    public const REBUILD = <<<'HTML'
    npm run build
    HTML;

    public const CLEANUP = <<<'HTML'
    php artisan optimize:clear
    HTML;
}
