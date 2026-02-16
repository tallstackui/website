<?php

namespace App\Enums\Examples\V3\Form;

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
    <div class="space-y-8">
        <x-textarea maxlength="10" count />

        <!-- Only character quantity -->
        <x-textarea count />
    </div>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
