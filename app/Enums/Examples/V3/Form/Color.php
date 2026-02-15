<?php

namespace App\Enums\Examples\V3\Form;

class Color
{
    public const BASIC = <<<'HTML'
    <x-color />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-color label="Color" hint="Select your favorite color or insert a hexadecimal value." />
    HTML;

    public const PICKER = <<<'HTML'
    <x-color picker />
    HTML;

    public const SELECTABLE = <<<'HTML'
    <x-color selectable />
    HTML;

    public const CUSTOM = <<<'HTML'
    <x-color :colors="['#83493D', '#3D8357', '#693D83', '#3AB3D1', '#5DD116']" />
    HTML;

    public const EXCLUDE_STEP = <<<'HTML'
    <x-color exclude-step="500" />

    <!-- or an array of steps -->

    <x-color :exclude-step="['100', '500']" />
    HTML;

    public const EXCLUDE_COLOR = <<<'HTML'
    <x-color exclude-step="red" />

    <!-- or an array of colors -->

    <x-color :exclude-step="['red', 'yellow']" />
    HTML;

    public const CLEARABLE = <<<'HTML'
    <x-color clearable />
    HTML;

    public const EVENTS = <<<'HTML'
    <x-color x-on:set="alert(`Selected Color: ${$event.detail.color}`)" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('color')
        ->block('block', 'classes');
    HTML;
}
