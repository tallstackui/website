<?php

namespace App\Enums\Examples\Customization;

class Globals
{
    public const string BASIC = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->flash()
        ->square()
        ->colorful();
    HTML;

    public const string FLASH = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->flash();
    HTML;

    public const string FLASH_ONLY = <<<'HTML'
    use TallStackUi\Components\Ui\Modal\Component as Modal;
    use TallStackUi\Components\Ui\Slide\Component as Slide;

    TallStackUi::customize()
        ->globals()
        ->flash(only: [Modal::class, Slide::class]);
    HTML;

    public const string FLASH_EXCEPT = <<<'HTML'
    use TallStackUi\Components\Ui\Card\Component as Card;

    TallStackUi::customize()
        ->globals()
        ->flash(except: [Card::class]);
    HTML;

    public const string SQUARE = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->square();
    HTML;

    public const string SQUARE_ONLY = <<<'HTML'
    use TallStackUi\Components\Form\Input\Component as Input;
    use TallStackUi\Components\Form\Select\Component as Select;

    TallStackUi::customize()
        ->globals()
        ->square(only: [Input::class, Select::class]);
    HTML;

    public const string COLORFUL = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->colorful();
    HTML;

    public const string COLORFUL_SELECTIVE = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->colorful(toast: true, dialog: false);
    HTML;

    public const string CHAINING = <<<'HTML'
    TallStackUi::customize()
        ->globals()
        ->flash()
        ->square()
        ->colorful();
    HTML;

    public const string COLORFUL_COLORS = <<<'PHP'
    // php artisan tallstackui:setup-color, then override colorfulColors()

    public function colorfulColors(Component $component): array
    {
        return [
            'cancel' => null,                             // keeps the default
            'confirm' => ['success' => 'text-lime-900!'], // the other types stay
        ];
    }
    PHP;
}
