<?php

namespace App\Enums\Examples\V1\Form;

class Textarea
{
    public const string BASIC = <<<'HTML'
    <x-textarea />
    HTML;

    public const string ASTERISK = <<<'HTML'
    <x-textarea label="Description *" />
    HTML;

    public const string RESIZE = <<<'HTML'
    <x-textarea resize />
    HTML;

    public const string RESIZE_AUTO = <<<'HTML'
    <x-textarea resize-auto />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" />
    HTML;

    public const string COUNT = <<<'HTML'
    <!-- Current and Max Quantities-->
    <x-textarea maxlength="10" count />

    <!-- Only Current Quantity-->
    <x-textarea count />
    HTML;

    public const string INVALIDATE = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" invalidate />
    HTML;

    public const string PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
