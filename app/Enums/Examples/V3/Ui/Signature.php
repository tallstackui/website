<?php

namespace App\Enums\Examples\V3\Ui;

class Signature
{
    public const BASIC = <<<'HTML'
    <x-signature />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-signature label="Sign your name" hint="You can revert if you have written something wrong." />
    HTML;

    public const PEN = <<<'HTML'
    <x-signature color="#ff0000" />
    HTML;

    public const BACKGROUND = <<<'HTML'
    <x-signature background="#cc1002" />
    HTML;

    public const LINE = <<<'HTML'
    <x-signature line="10" />
    HTML;

    public const HEIGHT = <<<'HTML'
    <x-signature height="500" />
    HTML;

    public const CLEARABLE = <<<'HTML'
    <x-signature clearable />
    HTML;

    public const EXPORTABLE = <<<'HTML'
    <x-signature exportable />

    <!-- You can set "jpeg" to export as jpeg -->
    <x-signature exportable jpeg />
    HTML;

    public const EVENT = <<<'HTML'
    <!-- $event.detail will receive: {signature: url} -->

    <x-signature exportable x-on:export="alert('Exported!')" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->signature()
        ->block('block', 'classes');
    HTML;
}
