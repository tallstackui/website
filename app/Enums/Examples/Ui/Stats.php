<?php

namespace App\Enums\Examples\Ui;

class Stats
{
    public const BASIC = <<<'HTML'
    <x-stats />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->stats()
        ->block('block', 'classes');
    HTML;
}
