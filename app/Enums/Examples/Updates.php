<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Updates
{
    public const string UPDATING = <<<'HTML'
    composer update
    HTML;

    public const string UPDATING_TALLSTACKUI = <<<'HTML'
    composer update tallstackui/tallstackui
    HTML;
}
