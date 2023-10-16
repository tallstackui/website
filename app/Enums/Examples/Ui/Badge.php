<?php

namespace App\Enums\Examples\Ui;

class Badge
{
    public const BASIC = <<<'HTML'
    <x-badge text="TallStackUi" />
    HTML;

    public const SQUARE = <<<'HTML'
    <x-badge text="TallStackUi" square />
    HTML;

    public const ROUND = <<<'HTML'
    <x-badge text="TallStackUi" round />
    HTML;

    public const ICONS = <<<'HTML'
    <x-badge text="TallStackUi" icon="users" position="left" />
    <x-badge text="TallStackUi" icon="cog" position="right" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-badge text="Default" />
    <x-badge text="MD" md />
    <x-badge text="LG" lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-badge text="Primary" />
    <x-badge text="Secondary" color="secondary" />
    <x-badge text="Slate" color="slate" />
    <x-badge text="Gray" color="gray" />
    <x-badge text="Zinc" color="zinc" />
    <x-badge text="Neutral" color="neutral" />
    <x-badge text="Stone" color="stone" />
    <x-badge text="Red" color="red" />
    <x-badge text="Orange" color="orange" />
    <x-badge text="Amber" color="amber" />
    <x-badge text="Yellow" color="yellow" />
    <x-badge text="Lime" color="lime" />
    <x-badge text="Green" color="green" />
    <x-badge text="Emerald" color="emerald" />
    <x-badge text="Teal" color="teal" />
    <x-badge text="Cyan" color="cyan" />
    <x-badge text="Sky" color="sky" />
    <x-badge text="Blue" color="blue" />
    <x-badge text="Indigo" color="indigo" />
    <x-badge text="Violet" color="violet" />
    <x-badge text="Purple" color="purple" />
    <x-badge text="Fuchsia" color="fuchsia" />
    <x-badge text="Pink" color="pink" />
    <x-badge text="Rose" color="rose" />
    <x-badge text="White" color="white" />
    <x-badge text="Black" color="black" />
    HTML;

    public const OUTLINES = <<<'HTML'
    <x-badge text="Primary" outline />
    <x-badge text="Secondary" color="secondary" outline />
    <x-badge text="Slate" color="slate" outline />
    <x-badge text="Gray" color="gray" outline />
    <x-badge text="Zinc" color="zinc" outline />
    <x-badge text="Neutral" color="neutral" outline />
    <x-badge text="Stone" color="stone" outline />
    <x-badge text="Red" color="red" outline />
    <x-badge text="Orange" color="orange" outline />
    <x-badge text="Amber" color="amber" outline />
    <x-badge text="Yellow" color="yellow" outline />
    <x-badge text="Lime" color="lime" outline />
    <x-badge text="Green" color="green" outline />
    <x-badge text="Emerald" color="emerald" outline />
    <x-badge text="Teal" color="teal" outline />
    <x-badge text="Cyan" color="cyan" outline />
    <x-badge text="Sky" color="sky" outline />
    <x-badge text="Blue" color="blue" outline />
    <x-badge text="Indigo" color="indigo" outline />
    <x-badge text="Violet" color="violet" outline />
    <x-badge text="Purple" color="purple" outline />
    <x-badge text="Fuchsia" color="fuchsia" outline />
    <x-badge text="Pink" color="pink" outline />
    <x-badge text="Rose" color="rose" outline />
    <x-badge text="White" color="white" outline />
    <x-badge text="Black" color="black" outline />
    HTML;
}
