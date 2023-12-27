<?php

namespace App\Enums\Examples\Ui;

class Table
{
    //

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->table()
        ->block('block', 'classes');
    HTML;
}
