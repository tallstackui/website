<?php

namespace App\Enums\Examples\V2\Personalization;

class Color
{
    public const string TAILWINDCSS_V3_FILE = <<<'HTML'
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
                },
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

    public const string TAILWINDCSS_V4_FILE = <<<'HTML'
    @theme {
        --color-primary-50: #eef2ff;
        --color-primary-100: #e0e7ff;
        --color-primary-200: #c7d2fe;
        --color-primary-300: #a5b4fc;
        --color-primary-400: #818cf8;
        --color-primary-500: #6366f1;
        --color-primary-600: #4f46e5;
        --color-primary-700: #4338ca;
        --color-primary-800: #3730a3;
        --color-primary-900: #312e81;
        --color-primary-950: #1e1b4b;

        --color-secondary-50: #f8fafc;
        --color-secondary-100: #f1f5f9;
        --color-secondary-200: #e2e8f0;
        --color-secondary-300: #cbd5e1;
        --color-secondary-400: #94a3b8;
        --color-secondary-500: #64748b;
        --color-secondary-600: #475569;
        --color-secondary-700: #334155;
        --color-secondary-800: #1e293b;
        --color-secondary-900: #0f172a;
        --color-secondary-950: #020617;

        --color-dark-50: #f8fafc;
        --color-dark-100: #f1f5f9;
        --color-dark-200: #e2e8f0;
        --color-dark-300: #cbd5e1;
        --color-dark-400: #94a3b8;
        --color-dark-500: #64748b;
        --color-dark-600: #475569;
        --color-dark-700: #334155;
        --color-dark-800: #1e293b;
        --color-dark-900: #0f172a;
        --color-dark-950: #020617;
    }
    HTML;

    public const string BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;

    public const string COMMAND = <<<'HTML'
    php artisan tallstackui:setup-color
    HTML;

    public const string COLOR_CLASS = <<<'HTML'
    // app/View/Components/TallStackUi/Colors/AlertColors.php

    namespace App\View\Components\TallStackUi\Colors;

    use Illuminate\View\Component;

    class AlertColors
    {
        /**
         * Background colors.
         */
        public function backgroundColors(Component $component): array
        {
            return [
                'solid' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
                'outline' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
                'light' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
            ];
        }

        /**
         * Text colors.
         */
        public function textColors(Component $component): array
        {
            return [
                'solid' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
                'outline' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
                'light' => [
                    'black' => null,
                    'primary' => null,
                    'secondary' => null,
                    'slate' => null,
                    'gray' => null,
                    'zinc' => null,
                    'neutral' => null,
                    'stone' => null,
                    'red' => null,
                    'orange' => null,
                    'amber' => null,
                    'yellow' => null,
                    'lime' => null,
                    'green' => null,
                    'emerald' => null,
                    'teal' => null,
                    'cyan' => null,
                    'sky' => null,
                    'blue' => null,
                    'indigo' => null,
                    'violet' => null,
                    'purple' => null,
                    'fuchsia' => null,
                    'pink' => null,
                    'rose' => null,
                ],
            ];
        }
    }
    HTML;

    public const string NAMESPACE_ENV_VARIABLE = <<<'HTML'
    TALLSTACKUI_COLOR_CLASSES_NAMESPACE="App\\View\\Components\\TallStackUi\\Colors"
    HTML;

    public const string CREATE_CUSTOM_COLOR = <<<'HTML'
    namespace App\View\Components\TallStackUi\Colors;

    use Illuminate\View\Component;

    class AlertColors
    {
        /**
         * Background colors.
         */
        public function backgroundColors(Component $component): array
        {
            // You can omit all other colors if you don't want to change them. [tl! highlight]
            return [
                'solid' => [
                    'foo-bar' => 'bg-gradient-to-bl from-slate-700 via-violet-600 to-indigo-600', // [tl! add]
                    // 'primary' => null,
                    // 'secondary' => null,
                    // 'slate' => null,
                ],
                // 'outline' => [/* ... */],
                // 'light' => [/* ... */],
            ];
        }

        /**
         * Text colors.
         */
        public function textColors(Component $component): array
        {
            return [
                'solid' => [
                    'foo-bar' => 'text-slate-900', // [tl! add]
                    // 'primary' => null,
                    // 'secondary' => null,
                    // 'slate' => null,
                ],
                // 'outline' => [/* ... */],
                // 'light' => [/* ... */],
            ];
        }
    }
    HTML;

    public const string USE_CUSTOM_COLOR = <<<'HTML'
    <x-alert text="My custom color is foo-bar" color="foo-bar" />
    HTML;

    public const string NEW_CUSTOM_COLOR_V3 = <<<'HTML'
    theme: {
        extend: {
            // ...

            colors: {
                // ...

                'malibu': {
                    DEFAULT: '#6ebcf7',
                    '50': '#f0f7ff',
                    '100': '#e1effd',
                    '200': '#bcdefb',
                    '300': '#6ebcf7',
                    '400': '#3ea8f2',
                    '500': '#158ce2',
                    '600': '#086ec1',
                    '700': '#08589c',
                    '800': '#0b4b81',
                    '900': '#0f3f6b',
                    '950': '#0a2847',
                },
            }
        },
    },
    HTML;

    public const string NEW_CUSTOM_COLOR_V4 = <<<'HTML'
    @theme {
        --color-malibu-50: #f0f7ff;
        --color-malibu-100: #e1effd;
        --color-malibu-200: #bcdefb;
        --color-malibu-300: #6ebcf7;
        --color-malibu-400: #3ea8f2;
        --color-malibu-500: #158ce2;
        --color-malibu-600: #086ec1;
        --color-malibu-700: #08589c;
        --color-malibu-800: #0b4b81;
        --color-malibu-900: #0f3f6b;
        --color-malibu-950: #0a2847;
    }
    HTML;

    public const string CREATE_CUSTOM_COLOR_USING_NEW_TAILWIND_COLOR = <<<'HTML'
    namespace App\View\Components\TallStackUi\Colors;

    use Illuminate\View\Component;

    class AlertColors
    {
        /**
         * Background colors.
         */
        public function backgroundColors(Component $component): array
        {
            return [
                'solid' => [
                    'malibu' => 'bg-malibu-500', // [tl! add]

                    // ...
                ],
                // ...
            ];
        }

        /**
         * Text colors.
         */
        public function textColors(Component $component): array
        {
            return [
                'solid' => [
                    'malibu' => 'text-malibu-900', // [tl! add]

                    // ...
                ],

                // ...
            ];
        }
    }
    HTML;

    public const string USE_NEW_CUSTOM_COLOR = <<<'HTML'
    <x-alert text="My custom color is foo-bar" color="malibu" />
    HTML;
}
