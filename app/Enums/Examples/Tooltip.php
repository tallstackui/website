<?php

namespace App\Enums\Examples;

class Tooltip
{
    public const BASIC = <<<'HTML'
    <x-tooltip text="Top" position="top" />
    <x-tooltip text="Bottom" position="bottom" />
    <x-tooltip text="Left" position="left" />
    <x-tooltip text="Right" position="right" />
    HTML;

    public const ICONS = <<<'HTML'
    <x-tooltip text="Top" position="top" icon="exclamation-circle" />
    <x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle" />
    <x-tooltip text="Left" position="left" icon="shield-exclamation" />
    <x-tooltip text="Right" position="right" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-tooltip text="SM" sm />
    <x-tooltip text="MD" md />
    <x-tooltip text="LG" lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-tooltip text="Primary" position="top" color="primary" />
    <x-tooltip text="Secondary" position="bottom" color="secondary" />
    <x-tooltip text="Sky" position="left" color="sky" />
    <x-tooltip text="Orange" position="right" color="orange" />
    HTML;

    public const OUTLINES = <<<'HTML'
    <x-tooltip text="Primary" position="top" color="primary" outline />
    <x-tooltip text="Secondary" position="bottom" color="secondary" outline />
    <x-tooltip text="Sky" position="left" color="sky" outline />
    <x-tooltip text="Orange" position="right" color="orange" outline />
    HTML;
}
