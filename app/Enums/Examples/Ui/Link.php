<?php

namespace App\Enums\Examples\Ui;

class Link
{
    //

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->link()
        ->block('block', 'classes');
    HTML;
}
