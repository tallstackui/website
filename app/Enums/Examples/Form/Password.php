<?php

namespace App\Enums\Examples\Form;

class Password
{
    public const string BASIC = <<<'HTML'
    <x-password value="TallStackUI" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
    HTML;

    public const string ASTERISK = <<<'HTML'
    <x-password label="Password *" hint="Insert your password" value="TallStackUi" />
    HTML;

    public const string CAPS_LOCK = <<<'HTML'
    <x-password hint="Activate caps lock to see the indicator." />

    <!-- To disable and do not show the indicator use `mixed-case` -->
    <x-password hint="Activate caps lock to see the indicator." mixed-case />
    HTML;

    public const string FORMAT_VALIDATOR = <<<'HTML'
    <x-password :rules="['min:8', 'symbols:!@#', 'numbers', 'mixed']" />
    HTML;

    public const string FORMAT_VALIDATOR_WITHOUT_RULES = <<<'HTML'
    <x-password rules />
    HTML;

    public const string PASSWORD_GENERATOR = <<<'HTML'
    <x-password generator :rules="['min:5', 'symbols:!@']" />
    HTML;

    public const string PASSWORD_GENERATOR_WITHOUT_RULES = <<<'HTML'
    <x-password generator />
    HTML;

    public const string ALGORITHM = <<<'HTML'
    <script>
        window.TallStackUi = window.TallStackUi || {};

        window.TallStackUi.passwordGenerator = function (min, mixed, numbers, symbols) {
            return 'logic-goes-here';
        };
    </script>
    HTML;

    public const string TYPING_ONLY = <<<'HTML'
    <x-password typing-only />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-password value="TallStackUI"
                generator
                :rules="['min:8', 'symbols', 'numbers', 'mixed']"
                x-on:reveal="alert(`Password Revealed: ${$event.detail.status}`)"
                x-on:generate="alert(`Password Generated: ${$event.detail.password}`)" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('password')
        ->block('block', 'classes');
    HTML;
}
