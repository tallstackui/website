<?php

namespace App\Enums\Examples\V2\Personalization;

class Deep
{
    public const string COMMAND = <<<'HTML'
    php artisan make:component Input
    HTML;

    public const string OVERRIDE = <<<'HTML'
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

    public const string EXTENDS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input // [tl! highlight]
    {
        //
    }
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
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

    public const string TAILWINDCSS_V3 = <<<'HTML'
    content: [
        './app/View/Components/**/*.php', // [tl! highlight]
    ],
    HTML;

    public const string TAILWINDCSS_V4 = <<<'HTML'
    @source '../../app/View/Components/**/*.php';
    HTML;

    public const string VIEWS = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.views
    HTML;
}
