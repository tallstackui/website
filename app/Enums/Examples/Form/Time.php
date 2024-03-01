<?php

namespace App\Enums\Examples\Form;

class Time
{
    public const BASIC = <<<'HTML'
    <x-time />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('time')
        ->block('block', 'classes');
    HTML;
}
