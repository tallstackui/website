<?php

namespace App\Enums\Examples;

class Badge
{
    public const BASIC = <<<HTML
    <x-badge text="TallStackUi" />
    HTML;

    public const SQUARE = <<<HTML
    <x-badge text="TallStackUi" square />
    HTML;

    public const ICONS = <<<HTML
    <x-badge text="TallStackUi" icon="users" position="left" />
    <x-badge text="TallStackUi" icon="cog" position="right" />
    HTML;

    public const SIZES = <<<HTML
    <x-badge text="Default" />
    <x-badge text="MD" md />
    <x-badge text="LG" lg />
    HTML;

    public const COLORS = <<<HTML
    <x-badge text="TallStackUi" color="orange" />
    <x-badge text="TallStackUi" color="pink" />
    <x-badge text="TallStackUi" color="sky" />
    HTML;

    public const OUTLINES = <<<HTML
    <x-badge text="TallStackUi" color="orange" outline />
    <x-badge text="TallStackUi" color="pink" outline />
    <x-badge text="TallStackUi" color="sky" outline />
    HTML;
}
