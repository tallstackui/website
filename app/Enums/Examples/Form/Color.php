<?php

namespace App\Enums\Examples\Form;

class Color
{
    public const BASIC = <<<'HTML'
    <x-color />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-color label="Color"
             hint="Select your favorite color or insert a hexadecimal value." />
    HTML;

    public const PICKER = <<<'HTML'
    <x-color picker />
    HTML;

    public const CUSTOM = <<<'HTML'
    <x-color :colors="['#83493D', '#3D8357', '#693D83', '#3AB3D1', '#5DD116']" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-color invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('color')
        ->block('block', 'classes');
    HTML;
}
