<?php

namespace App\Enums\Examples;

class Avatar
{
    public const BASIC = <<<'HTML'
    <x-avatar label="TS" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-avatar label="TS" color="secondary" />
    <x-avatar label="TS" color="orange" />
    <x-avatar label="TS" color="sky" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-avatar label="SM" sm />
    <x-avatar label="MD" md />
    <x-avatar label="LG" lg />
    HTML;

    public const SQUARE = <<<'HTML'
    <x-avatar label="TS" sm square />
    <x-avatar label="TS" md square />
    <x-avatar label="TS" lg square />
    HTML;

    public const MODELABLE = <<<'HTML'
    <x-avatar.modelable :model="auth()->user()" />
    HTML;

    public const MODELABLE_CUSTOMIZED = <<<'HTML'
    <x-avatar.modelable :model="auth()->user()" property="email" />
    HTML;

    public const MODELABLE_CUSTOMIZED_COLORS = <<<'HTML'
    <x-avatar.modelable :model="auth()->user()" property="email" background="ff0000" color="f2f2f2" />
    HTML;

    public const PLACEHOLDER = <<<'HTML'
    <x-avatar />
    <x-avatar color="secondary" />
    <x-avatar color="orange" />
    <x-avatar color="sky" />
    <x-avatar color="blue" />
    HTML;
}
