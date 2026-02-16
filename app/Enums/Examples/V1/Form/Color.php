<?php

namespace App\Enums\Examples\V1\Form;

class Color
{
    public const string BASIC = <<<'HTML'
    <x-color />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-color label="Color" hint="Select your favorite color or insert a hexadecimal value." />
    HTML;

    public const string PICKER = <<<'HTML'
    <x-color picker />
    HTML;

    public const string SELECTABLE = <<<'HTML'
    <x-color selectable />
    HTML;

    public const string CUSTOM = <<<'HTML'
    <x-color :colors="['#83493D', '#3D8357', '#693D83', '#3AB3D1', '#5DD116']" />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-color x-on:set="alert(`Selected Color: ${$event.detail.color}`)" />
    HTML;

    public const string INVALIDATE = <<<'HTML'
    <x-color invalidate />
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('color')
        ->block('block', 'classes');
    HTML;
}
