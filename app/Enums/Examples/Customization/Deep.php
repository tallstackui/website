<?php

namespace App\Enums\Examples\Customization;

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

        'input' => Components\Form\Input\Component::class, // [tl! remove]
        'input' => \App\View\Components\Input::class, // [tl! add]

        // ...
    ],
    HTML;

    public const string EXTENDS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\Components\Form\Input\Component // [tl! highlight]
    {
        //
    }
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\Components\Form\Input\Component
    {
        public function customization(): array // [tl! focus:3]
        {
            return [/* ... */];
        }
    }
    HTML;

    public const string TAILWINDCSS = <<<'HTML'
    @source '../../app/View/Components/**/*.php';
    HTML;

    public const string VIEWS = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.views
    HTML;
}
