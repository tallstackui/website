<?php

namespace App\Enums\Examples\Form;

class Password
{
    public const BASIC = <<<'HTML'
    <x-password value="TallStackUi" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-password label="Password"
                hint="Insert your best password"
                value="TallStackUi" />
    HTML;

    public const ASTERISK = <<<'HTML'
    <x-password label="Password *"
                hint="Insert your password"
                value="TallStackUi" />
    HTML;

    public const FORMAT_VALIDATOR = <<<'HTML'
    <!-- Allowed: min, symbols, numbers, mixed -->

    <!-- You can set min to `min:8` or
    omit the number to use the default -->

    <!-- You can define symbols like `symbols:!@#`
    or omit symbols to use the defaults -->

    <x-password :rules="['min:8', 'symbols:!@#', 'numbers', 'mixed']" />
    HTML;

    public const PASSWORD_GENERATOR = <<<'HTML'
    <x-password generator :rules="['min:8', 'symbols', 'numbers', 'mixed']" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-password label="Password"
                hint="Insert your best password"
                value="TallStackUi"
                invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('password')
        ->block('block', 'classes');
    HTML;
}
