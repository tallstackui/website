<?php

namespace App\Enums\Examples\V1\Form;

class Password
{
    public const BASIC = <<<'HTML'
    <x-password value="TallStackUi" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
    HTML;

    public const ASTERISK = <<<'HTML'
    <x-password label="Password *" hint="Insert your password" value="TallStackUi" />
    HTML;

    public const CAPS_LOCK = <<<'HTML'
    <x-password hint="Activate caps lock to see the indicator." />

    <!-- To disable and do not show the indicator use `mixed-case` -->
    <x-password hint="Activate caps lock to see the indicator." mixed-case />
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

    public const EVENTS = <<<'HTML'
    <x-password value="TallStackUI"
                generator
                :rules="['min:8', 'symbols', 'numbers', 'mixed']"
                x-on:reveal="alert(`Password Revealed: ${$event.detail.status}`)"
                x-on:generate="alert(`Password Generated: ${$event.detail.password}`)" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-password label="Password"
                hint="Insert your best password"
                value="TallStackUi"
                invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('password')
        ->block('block', 'classes');
    HTML;
}
