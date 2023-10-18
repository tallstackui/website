<?php

namespace App\Enums\Examples\Personalization;

class ColorPersonalization
{
    public const CONTENT = <<<'HTML'
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
                'dark': {
                    DEFAULT: '#3f4d69',
                    '50': '#f6f7f9',
                    '100': '#ebeef3',
                    '200': '#d3d9e4',
                    '300': '#acb8cd',
                    '400': '#7f92b1',
                    '500': '#5f7498',
                    '600': '#4b5d7e',
                    '700': '#3f4d69',
                    '800': '#364156',
                    '900': '#30384a',
                    '950': '#202531',
                }
            }
        },
    },
    HTML;

    public const BUILD = <<<'HTML'
    npm run build
    HTML;

    public const CLEANUP = <<<'HTML'
    php artisan optimize:clear
    HTML;
}
