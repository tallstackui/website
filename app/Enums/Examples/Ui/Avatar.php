<?php

namespace App\Enums\Examples\Ui;

class Avatar
{
    public const BASIC = <<<'HTML'
    <x-avatar label="TS" />
    HTML;

    public const COLORS = <<<'HTML'
    <x-avatar text="TS" />
    <x-avatar text="TS" color="secondary" />
    <x-avatar text="TS" color="slate" />
    <x-avatar text="TS" color="gray" />
    <x-avatar text="TS" color="zinc" />
    <x-avatar text="TS" color="neutral" />
    <x-avatar text="TS" color="stone" />
    <x-avatar text="TS" color="red" />
    <x-avatar text="TS" color="orange" />
    <x-avatar text="TS" color="amber" />
    <x-avatar text="TS" color="yellow" />
    <x-avatar text="TS" color="lime" />
    <x-avatar text="TS" color="green" />
    <x-avatar text="TS" color="emerald" />
    <x-avatar text="TS" color="teal" />
    <x-avatar text="TS" color="cyan" />
    <x-avatar text="TS" color="sky" />
    <x-avatar text="TS" color="blue" />
    <x-avatar text="TS" color="indigo" />
    <x-avatar text="TS" color="violet" />
    <x-avatar text="TS" color="purple" />
    <x-avatar text="TS" color="fuchsia" />
    <x-avatar text="TS" color="pink" />
    <x-avatar text="TS" color="rose" />
    <x-avatar text="TS" color="black" />
    <x-avatar text="TS" color="white" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-avatar label="SM" sm />
    <x-avatar label="MD" md />
    <x-avatar label="LG" lg />
    HTML;

    public const SQUARE = <<<'HTML'
    <x-avatar label="TS" square />
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
    <x-avatar color="black" />
    <x-avatar color="white" />
    HTML;
}
