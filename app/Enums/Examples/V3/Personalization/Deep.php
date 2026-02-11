<?php

namespace App\Enums\Examples\V3\Personalization;

class Deep
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
        // ...

        'input' => Components\Form\Input::class, // [tl! remove]
        'input' => \App\View\Components\Input::class, // [tl! add]

        // ...
    ],
    HTML;

    public const EXTENDS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input // [tl! highlight]
    {
        //
    }
    HTML;

    public const CUSTOMIZATION = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input
    {
        public function personalization(): array // [tl! focus:3]
        {
            return [/* ... */];
        }
    }
    HTML;

    public const TAILWINDCSS_V3 = <<<'HTML'
    content: [
        './app/View/Components/**/*.php', // [tl! highlight]
    ],
    HTML;

    public const TAILWINDCSS_V4 = <<<'HTML'
    @source '../../app/View/Components/**/*.php';
    HTML;

    public const VIEWS = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.views
    HTML;
}
