<?php

namespace App\Enums\Examples\Ui;

class Table
{
    public const BASIC = <<<'HTML'
    //
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->table()
        ->block('block', 'classes');
    HTML;
}
