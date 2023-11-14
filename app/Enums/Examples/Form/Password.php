<?php

namespace App\Enums\Examples\Form;

class Password
{
    public const BASIC = <<<'HTML'
    <x-password value="TallStackUi" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('password')
        ->block('block', 'classes');
    HTML;
}
