<?php

namespace App\Enums\Examples\V2\Ui;

class KeyValue
{
    public const BASIC = <<<'HTML'
    <x-key-value />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->keyValue()
        ->block('block', 'classes');
    HTML;
}
