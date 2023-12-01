<?php

namespace App\Enums\Examples\Ui;

class Banner
{
    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->banner()
        ->block('block', 'classes');
    HTML;
}
