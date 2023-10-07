<?php

namespace App\Enums\Examples;

class Avatar
{
    public const BASIC = <<<'HTML'
    <x-avatar label="TS" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-avatar label="TS" />
    <x-avatar label="TS" color="secondary" />
    <x-avatar label="TS" color="white" />
    <x-avatar label="TS" color="black" />
    <x-avatar label="TS" color="slate" />
    <x-avatar label="TS" color="gray" />
    <x-avatar label="TS" color="zinc" />
    <x-avatar label="TS" color="neutral" />
    <x-avatar label="TS" color="stone" />
    <x-avatar label="TS" color="red" />
    <x-avatar label="TS" color="orange" />
    <x-avatar label="TS" color="amber" />
    <x-avatar label="TS" color="yellow" />
    <x-avatar label="TS" color="lime" />
    <x-avatar label="TS" color="green" />
    <x-avatar label="TS" color="emerald" />
    <x-avatar label="TS" color="teal" />
    <x-avatar label="TS" color="cyan" />
    <x-avatar label="TS" color="sky" />
    <x-avatar label="TS" color="blue" />
    <x-avatar label="TS" color="indigo" />
    <x-avatar label="TS" color="violet" />
    <x-avatar label="TS" color="purple" />
    <x-avatar label="TS" color="fuchsia" />
    <x-avatar label="TS" color="pink" />
    <x-avatar label="TS" color="rose" />
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
    <x-avatar color="white" />
    <x-avatar color="black" />
    <x-avatar color="slate" />
    <x-avatar color="gray" />
    <x-avatar color="zinc" />
    <x-avatar color="neutral" />
    <x-avatar color="stone" />
    <x-avatar color="red" />
    <x-avatar color="orange" />
    <x-avatar color="amber" />
    <x-avatar color="yellow" />
    <x-avatar color="lime" />
    <x-avatar color="green" />
    <x-avatar color="emerald" />
    <x-avatar color="teal" />
    <x-avatar color="cyan" />
    <x-avatar color="sky" />
    <x-avatar color="blue" />
    <x-avatar color="indigo" />
    <x-avatar color="violet" />
    <x-avatar color="purple" />
    <x-avatar color="fuchsia" />
    <x-avatar color="pink" />
    <x-avatar color="rose" />
    HTML;
}
