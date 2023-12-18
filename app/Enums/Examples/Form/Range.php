<?php

namespace App\Enums\Examples\Form;

class Range
{
    public const BASIC = <<<'HTML'
    <x-range />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-range label="Quantity" hint="Select an average desired salary" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-range sm />
    <x-range md />
    <x-range lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-range label="Primary" />
    <x-range color="secondary" label="Secondary" />
    <x-range color="slate" label="Slate" />
    <x-range color="gray" label="Gray" />
    <x-range color="zinc" label="Zinc" />
    <x-range color="neutral" label="Neutral" />
    <x-range color="stone" label="Stone" />
    <x-range color="red" label="Red" />
    <x-range color="orange" label="Orange" />
    <x-range color="amber" label="Amber" />
    <x-range color="yellow" label="Yellow" />
    <x-range color="lime" label="Lime" />
    <x-range color="green" label="Green" />
    <x-range color="emerald" label="Emerald" />
    <x-range color="teal" label="Teal" />
    <x-range color="cyan" label="Cyan" />
    <x-range color="sky" label="Sky" />
    <x-range color="blue" label="Blue" />
    <x-range color="indigo" label="Indigo" />
    <x-range color="violet" label="Violet" />
    <x-range color="purple" label="Purple" />
    <x-range color="fuchsia" label="Fuchsia" />
    <x-range color="pink" label="Pink" />
    <x-range color="rose" label="Rose" />
    <x-range color="black" label="Black" />
    <x-range color="white" label="White" />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-range label="Quantity" invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('range')
        ->block('block', 'classes');
    HTML;
}
