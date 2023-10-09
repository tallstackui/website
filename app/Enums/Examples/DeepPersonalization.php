<?php

namespace App\Enums\Examples;

class DeepPersonalization
{
    public const COMMAND = <<<'HTML'
    php artisan make:component Input
    HTML;

    public const OVERRIDE = <<<'HTML'
    // ...

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
        'checkbox' => Components\Form\Checkbox::class,
        'icon' => Components\Icon::class,
        'label' => Components\Form\Label::class,
        'alert' => Components\Alert::class,
        'card' => Components\Card::class,
        'badge' => Components\Badge::class,
        'avatar' => Components\Avatar\Index::class,
        'avatar.modelable' => Components\Avatar\Modelable::class,
        'hint' => Components\Hint::class,
        'error' => Components\Error::class,
        'errors' => Components\Errors::class,
        'tooltip' => Components\Tooltip::class,
        'button' => Components\Button\Index::class,
        'button.circle' => Components\Button\Circle::class,
        'select' => Components\Select\Select::class,
        'select.styled' => Components\Select\Styled::class,
        'select.searchable' => Components\Select\Searchable::class,
        'modal' => Components\Modal::class,
        'toast' => Components\Interaction\Toast::class,
        'dialog' => Components\Interaction\Dialog::class,
        'wrapper.input' => Components\Wrapper\Input::class,
        'wrapper.radio' => Components\Wrapper\Radio::class,
        'wrapper.select' => Components\Wrapper\Select::class,
        'tabs' => Components\Tabs\Index::class,
        'tabs.items' => Components\Tabs\Items::class,
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

        public function render(): View
        {
            return view('components.input');
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

        public function customization(): array // [tl! focus:3]
        {
            return [/* ... */];
        }

        public function render(): View
        {
            return view('components.input');
        }
    }
    HTML;

}
