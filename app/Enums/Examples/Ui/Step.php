<?php

namespace App\Enums\Examples\Ui;

class Step
{
    public const BASIC = <<<'HTML'
    <x-step />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->step()
        ->block('block', 'classes');
    HTML;
}
