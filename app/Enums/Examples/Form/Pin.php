<?php

namespace App\Enums\Examples\Form;

class Pin
{
    public const BASIC = <<<'HTML'
    <x-pin length="2" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('pin')
        ->block('block', 'classes');
    HTML;
}
