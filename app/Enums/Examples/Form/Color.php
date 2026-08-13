<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Color
{
    public const string BASIC = <<<'HTML'
    <x-color />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-color label="Color" hint="Select your favorite color or insert a hexadecimal value." />
    HTML;

    public const string READONLY_DISABLED = <<<'HTML'
    <x-color label="Readonly" value="#3B82F6" readonly />
    <x-color label="Disabled" value="#3B82F6" disabled />
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

    public const string EXCLUDE_STEP = <<<'HTML'
    <x-color exclude-step="500" />

    <!-- or an array of steps -->

    <x-color :exclude-step="['100', '500']" />
    HTML;

    public const string EXCLUDE_COLOR = <<<'HTML'
    <x-color exclude-color="red" />

    <!-- or an array of colors -->

    <x-color :exclude-color="['red', 'yellow']" />
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-color clearable />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-color x-on:set="alert(`Selected Color: ${$event.detail.color}`)" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('color')
        ->block('block', 'classes');
    HTML;
}
