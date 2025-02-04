<?php

namespace App\Enums\Examples\V2\Ui;

class Carousel
{
    public const BASIC = <<<'HTML'
    <x-carousel>
        TallStackUI
    </x-carousel>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->carousel()
        ->block('block', 'classes');
    HTML;
}
