<?php

namespace App\Enums\Examples\Form;

class Input
{
    public const BASIC = <<<'HTML'
    <x-input />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-input label="Name" hint="Insert your name" />
    HTML;

    public const ASTERISK = <<<'HTML'
    <x-input label="Name *" hint="Insert your name" />
    HTML;

    public const ICONS = <<<'HTML'
    <x-input label="Name" icon="users" />
    <x-input label="Name" icon="cog" position="right" />
    HTML;

    public const PREFIX_SUFFIX = <<<'HTML'
    <x-input prefix="https://" label="Domain" />
    <x-input suffix="@gmail.com" label="E-mail" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('input')
        ->block('block', 'classes');
    HTML;
}
