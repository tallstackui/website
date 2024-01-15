<?php

namespace App\Enums\Examples\Personalization;

class DeepPersonalization
{
    public const COMMAND = <<<'HTML'
    php artisan make:component Input
    HTML;

    public const OVERRIDE = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Components List
    |--------------------------------------------------------------------------
    |
    | List of all TallStackUi components.
    */
    'components' => [
        'input' => \App\View\Components\Input::class, // [tl! focus]
        'textarea' => Components\Form\Textarea::class,
        'password' => Components\Form\Password::class,
        'toggle' => Components\Form\Toggle::class,
        'radio' => Components\Form\Radio::class,

        // ...
    ],
    HTML;

    public const EXTENDS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input // [tl! highlight]
    {
        public function __construct()
        {
            parent::__construct(); // [tl! highlight]
        }
    }
    HTML;

    public const CUSTOMIZATION = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function personalization(): array // [tl! focus:3]
        {
            return [/* ... */];
        }
    }
    HTML;

    public const COLORS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class CustomButton extends \TallStackUi\View\Components\Button\Button // [tl! highlight]
    {
        public function backgroundColor(): array // [tl! highlight]
        {
            return [
                'solid' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
                'outline' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
                'light' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
            ];
        }

        public function iconColor(): array // [tl! highlight]
        {
            return [
                'solid' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
                'outline' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
                'light' => [
                    'primary' => '...',

                    // all other colors goes here: 'red' => '...'
                ],
            ];
        }
    }
    HTML;

    public const COLORS_PERSONALIZATION_EXAMPLE = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class CustomButton extends \TallStackUi\View\Components\Button\Button // [tl! highlight]
    {
        public function backgroundColor(): array
        {
            return [
                'solid' => [
                    'primary' => 'bg-primary-500 border-primary-500',
                ],
            ];
        }
    }
    HTML;

    public const PREPARE_TAILWIND_FOR_CUSTOM_COLOR = <<<'HTML'
    theme: {
        extend: {
            // ...

            colors: {
                'ocean': { // this will be the name of the color [tl! highlight]
                    '50': '#f1f8fe',
                    '100': '#e3effb',
                    '200': '#c0e0f7',
                    '300': '#88c7f1',
                    '400': '#49aae7',
                    '500': '#2292d8',
                    '600': '#1472b5',
                    '700': '#115b93',
                    '800': '#124e7a',
                    '900': '#154265',
                    '950': '#0e2a43',
                },
            }
        },
    },
    HTML;

    public const APPLYING_CUSTOM_COLORS_USING_DEEP_PERSONALIZATION = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class CustomButton extends \TallStackUi\View\Components\Button\Button
    {
        public function backgroundColor(): array
        {
            return [
                'solid' => [
                    // other indexes goes here ...

                    'ocean' => 'bg-ocean-500 border-ocean-500 ...', // [tl! highlight]
                ],
                'outline' => [
                    // other indexes goes here ...

                    'ocean' => 'bg-transparent border-ocean-500 ...', // [tl! highlight]
                ],
                'light' =>
                    // other indexes goes here ...

                    'ocean' => 'bg-ocean-300 border-ocean-300 ...', // [tl! highlight]
                ],
            ];
        }
    }
    HTML;

    public const USING_COMPONENT_WITH_CUSTOM_COLORS = <<<'HTML'
    <x-button icon="users"
              color="ocean" {{-- [tl! highlight:1] --}}
              outline
              position="right">
        Users
    </x-button>
    HTML;

    public const VIEWS = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.views
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    content: [
        // ...

        './app/View/Components/**/*.php', // [tl! highlight]
    ],
    HTML;
}
