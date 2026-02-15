<?php

namespace App\Enums\Examples\V3\Ui;

class Avatar
{
    public const BASIC = <<<'HTML'
    <x-avatar text="TS" />
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
    HTML;

    public const SIZES = <<<'HTML'
    <x-avatar text="XS" xs />
    <x-avatar text="SM" sm />
    <x-avatar text="MD" md />
    <x-avatar text="LG" lg />
    HTML;

    public const SQUARE = <<<'HTML'
    <x-avatar text="TS" square />
    HTML;

    public const MODELABLE = <<<'HTML'
    <x-avatar :model="auth()->user()" color="fff" />
    HTML;

    public const MODELABLE_CUSTOMIZED = <<<'HTML'
    <x-avatar :model="auth()->user()" property="email" color="fff" />
    HTML;

    public const MODELABLE_CUSTOMIZED_COLORS = <<<'HTML'
    <!-- "background" and "color" must be hexadecimals -->

    <x-avatar :model="auth()->user()"
              property="email"
              background="ff0000"
              color="fff" />
    HTML;

    public const MODELABLE_OPTIONS = <<<'HTML'
    <x-avatar :model="auth()->user()"
              property="email"
              background="ff0000"
              color="fff"
              :options="['uppercase' => false, 'rounded' => true]"
    />
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
    HTML;

    public const BORDERLESS = <<<'HTML'
    <x-avatar color="primary" borderless />
    HTML;

    public const IMAGE = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" xs />
    <x-avatar image="https://i.pravatar.cc/300" sm />
    <x-avatar image="https://i.pravatar.cc/300" md />
    <x-avatar image="https://i.pravatar.cc/300" lg />
    HTML;

    public const IMAGE_BIND_SRC = <<<'HTML'
    <div x-data="{ image: 'https://i.pravatar.cc/300' }">
        <x-avatar image x-bind:src="image" />
    </div>
    HTML;

    public const IMAGE_ALT = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" text="alt-text-goes-here" />
    HTML;

    public const AVATAR_GROUP = <<<'HTML'
    <x-avatar.group>
        <x-avatar image="https://i.pravatar.cc/300" borderless />
        <x-avatar image="https://i.pravatar.cc/200" borderless />
        <x-avatar image="https://i.pravatar.cc/100" borderless />
    </x-avatar.group>
    HTML;

    public const PRESENCE = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence />

    <!-- with a pulse indicator -->

    <x-avatar image="https://i.pravatar.cc/300" presence pulse />
    HTML;

    public const PRESENCE_COLORS = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence presence-color="green" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-color="neutral" />
    HTML;

    public const PRESENCE_POSITIONS = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="top-left" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="top-right" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="bottom-left" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="bottom-right" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->avatar()
        ->block('block', 'classes');
    HTML;
}
