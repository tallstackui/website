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
                    DEFAULT: '#3b82f6',
                    '50': '#f0f5ff',
                    '100': '#e5edff',
                    '200': '#cddbfe',
                    '300': '#b4c6fc',
                    '400': '#8da2fb',
                    '500': '#6875f5',
                    '600': '#5850ec',
                    '700': '#5145cd',
                    '800': '#42389d',
                    '900': '#362f78',
                },
                'secondary': {
                    DEFAULT: '#6b7280',
                    '50': '#f9fafb',
                    '100': '#f3f4f6',
                    '200': '#e5e7eb',
                    '300': '#d1d5db',
                    '400': '#9ca3af',
                    '500': '#6b7280',
                    '600': '#4b5563',
                    '700': '#374151',
                    '800': '#1f2937',
                    '900': '#111827',
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
