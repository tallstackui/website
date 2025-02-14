<?php

namespace App\Enums\Examples\V2\Personalization;

class Color
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

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;

    public const COMMAND = <<<'HTML'
    php artisan tallstackui:setup-color
    HTML;

    public const COLOR_CLASS = <<<'HTML'
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
                    'white' => null,
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
                    'white' => null,
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
                    'white' => null,
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
                    'white' => null,
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
                    'white' => null,
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
                    'white' => null,
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

    public const NAMESPACE_ENV_VARIABLE = <<<'HTML'
    TALLSTACKUI_COLOR_CLASSES_NAMESPACE="App\\View\\Components\\TallStackUi\\Colors"
    HTML;

    public const CREATE_CUSTOM_COLOR = <<<'HTML'
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

    public const USE_CUSTOM_COLOR = <<<'HTML'
    <x-alert text="My custom color is foo-bar" color="foo-bar" />
    HTML;

    public const NEW_CUSTOM_COLOR = <<<'HTML'
    theme: {
        extend: {
            // ...

            colors: {
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

    public const CREATE_CUSTOM_COLOR_USING_NEW_TAILWIND_COLOR = <<<'HTML'
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

    public const USE_NEW_CUSTOM_COLOR = <<<'HTML'
    <x-alert text="My custom color is foo-bar" color="malibu" />
    HTML;
}
