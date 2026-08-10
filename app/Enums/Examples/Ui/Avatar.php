<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Avatar
{
    public const string BASIC = <<<'HTML'
    <x-avatar text="TS" />
    HTML;

    public const string COLORS = <<<'HTML'
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
    <x-avatar text="TS" color="mauve" />
    <x-avatar text="TS" color="olive" />
    <x-avatar text="TS" color="mist" />
    <x-avatar text="TS" color="taupe" />
    <x-avatar text="TS" color="black" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-avatar text="XS" xs />
    <x-avatar text="SM" sm />
    <x-avatar text="MD" md />
    <x-avatar text="LG" lg />
    <x-avatar text="XL" xl />
    <x-avatar text="2XL" 2xl />
    <x-avatar text="3XL" 3xl />
    <x-avatar text="4XL" 4xl />
    <x-avatar text="5XL" 5xl />
    <x-avatar text="6XL" 6xl />
    <x-avatar text="7XL" 7xl />
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-avatar text="TS" square />
    HTML;

    public const string MODELABLE = <<<'HTML'
    <x-avatar :model="auth()->user()" color="fff" />
    HTML;

    public const string MODELABLE_CUSTOMIZED = <<<'HTML'
    <x-avatar :model="auth()->user()" property="email" color="fff" />
    HTML;

    public const string MODELABLE_CUSTOMIZED_COLORS = <<<'HTML'
    <!-- "background" and "color" must be hexadecimals -->

    <x-avatar :model="auth()->user()"
              property="email"
              background="ff0000"
              color="fff" />
    HTML;

    public const string MODELABLE_OPTIONS = <<<'HTML'
    <x-avatar :model="auth()->user()"
              property="email"
              background="ff0000"
              color="fff"
              :options="['uppercase' => false, 'rounded' => true]"
    />
    HTML;

    public const string GRAVATAR = <<<'HTML'
    <!-- A value carrying an "@" is the address itself. -->

    <x-avatar gravatar="alvaro.meireles@live.com" />
    HTML;

    public const string GRAVATAR_MODEL = <<<'HTML'
    <!-- Without a value, the "email" attribute of the model is used. -->

    <x-avatar :model="auth()->user()" gravatar />
    HTML;

    public const string GRAVATAR_COLUMN = <<<'HTML'
    <!-- A value without an "@" names the model attribute holding the address. -->

    <x-avatar :model="auth()->user()" gravatar="contact_email" />
    HTML;

    public const string GRAVATAR_DEFAULT = <<<'HTML'
    <!-- Allowed: 404, mp, identicon, monsterid, wavatar, retro, robohash, blank -->

    <x-avatar gravatar="nobody@tallstackui.com" gravatar-default="identicon" />
    <x-avatar gravatar="nobody@tallstackui.com" gravatar-default="retro" />
    <x-avatar gravatar="nobody@tallstackui.com" gravatar-default="robohash" />
    <x-avatar gravatar="nobody@tallstackui.com" gravatar-default="monsterid" />
    HTML;

    public const string PLACEHOLDER = <<<'HTML'
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
    <x-avatar color="mauve" />
    <x-avatar color="olive" />
    <x-avatar color="mist" />
    <x-avatar color="taupe" />
    <x-avatar color="black" />
    HTML;

    public const string BORDERLESS = <<<'HTML'
    <x-avatar color="primary" borderless />
    HTML;

    public const string IMAGE = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" xs />
    <x-avatar image="https://i.pravatar.cc/300" sm />
    <x-avatar image="https://i.pravatar.cc/300" md />
    <x-avatar image="https://i.pravatar.cc/300" lg />
    HTML;

    public const string IMAGE_BIND_SRC = <<<'HTML'
    <div x-data="{ image: 'https://i.pravatar.cc/300' }">
        <x-avatar image x-bind:src="image" />
    </div>
    HTML;

    public const string IMAGE_ALT = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" text="alt-text-goes-here" />
    HTML;

    public const string AVATAR_GROUP = <<<'HTML'
    <x-avatar.group>
        <x-avatar image="https://i.pravatar.cc/300" borderless />
        <x-avatar image="https://i.pravatar.cc/200" borderless />
        <x-avatar image="https://i.pravatar.cc/100" borderless />
    </x-avatar.group>
    HTML;

    public const string AVATAR_GROUP_REVERSE = <<<'HTML'
    <!-- The first avatar in markup ends on the right; the overlap progresses right-to-left. -->
    <!-- DOM order is preserved, only the painted overlap is mirrored. -->

    <x-avatar.group reverse>
        <x-avatar text="A" color="indigo" />
        <x-avatar text="B" color="emerald" />
        <x-avatar text="C" color="amber" />
        <x-avatar text="D" color="pink" />
        <x-avatar text="E" color="sky" />
    </x-avatar.group>
    HTML;

    public const string PRESENCE = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence />

    <!-- with a pulse indicator -->

    <x-avatar image="https://i.pravatar.cc/300" presence pulse />
    HTML;

    public const string PRESENCE_COLORS = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence presence-color="green" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-color="red" />
    HTML;

    public const string PRESENCE_POSITIONS = <<<'HTML'
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="right-top" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="right-bottom" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="left-top" />
    <x-avatar image="https://i.pravatar.cc/300" presence presence-position="left-bottom" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->avatar()
        ->block('block', 'classes');
    HTML;
}
