<?php

namespace App\Enums\Examples\Ui;

class Progress
{
    public const BASIC = <<<'HTML'
    <x-reaction />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->progress()
        ->block('block', 'classes');

    TallStackUi::personalize()
        ->progress('circle')
        ->block('block', 'classes');
    HTML;
}
