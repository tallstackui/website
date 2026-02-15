<?php

namespace App\Enums\Examples\V1\Form;

class Textarea
{
    public const BASIC = <<<'HTML'
    <x-textarea />
    HTML;

    public const ASTERISK = <<<'HTML'
    <x-textarea label="Description *" />
    HTML;

    public const RESIZE = <<<'HTML'
    <x-textarea resize />
    HTML;

    public const RESIZE_AUTO = <<<'HTML'
    <x-textarea resize-auto />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" />
    HTML;

    public const COUNT = <<<'HTML'
    <!-- Current and Max Quantities-->
    <x-textarea maxlength="10" count />

    <!-- Only Current Quantity-->
    <x-textarea count />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
