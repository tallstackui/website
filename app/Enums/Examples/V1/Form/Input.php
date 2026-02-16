<?php

namespace App\Enums\Examples\V1\Form;

class Input
{
    public const string BASIC = <<<'HTML'
    <x-input />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-input label="Name" hint="Insert your name" />
    HTML;

    public const string ASTERISK = <<<'HTML'
    <x-input label="Name *" hint="Insert your name" />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-input label="Name" icon="users" />
    <x-input label="Name" icon="cog" position="right" />
    HTML;

    public const string PREFIX_SUFFIX = <<<'HTML'
    <x-input prefix="https://" label="Domain" />
    <x-input suffix="@gmail.com" label="E-mail" />

    <!-- or -->

    <x-input>
        <x-slot:prefix>
            Prefix
        </x-slot:prefix>
        <x-slot:suffix>
            Suffix
        </x-slot:suffix>
    </x-input>
    HTML;

    public const string INVALIDATE = <<<'HTML'
    <x-input label="Name" invalidate />
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('input')
        ->block('block', 'classes');
    HTML;
}
