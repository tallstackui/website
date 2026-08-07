<?php

namespace App\Enums\Examples\Ui;

class Signature
{
    public const string BASIC = <<<'HTML'
    <x-signature />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-signature label="Sign your name" hint="You can revert if you have written something wrong." />
    HTML;

    public const string PEN = <<<'HTML'
    <x-signature color="#ff0000" />
    HTML;

    public const string BACKGROUND = <<<'HTML'
    <x-signature background="#cc1002" />
    HTML;

    public const string LINE = <<<'HTML'
    <x-signature line="10" />
    HTML;

    public const string HEIGHT = <<<'HTML'
    <x-signature height="500" />
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-signature clearable />
    HTML;

    public const string EXPORTABLE = <<<'HTML'
    <x-signature exportable />

    <!-- You can set "jpeg" to export as jpeg -->
    <x-signature exportable jpeg />
    HTML;

    public const string EVENT = <<<'HTML'
    <!-- $event.detail will receive: {signature: url} -->

    <x-signature exportable x-on:export="alert('Exported!')" />
    HTML;

    public const string PERSISTENT = <<<'HTML'
    <x-signature wire:model="signature" persistent />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->signature()
        ->block('block', 'classes');
    HTML;
}
