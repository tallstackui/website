<?php

namespace App\Enums\Examples\V3\Form;

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
    <div class="space-y-8">
        <x-textarea maxlength="10" count />

        <!-- Only character quantity -->
        <x-textarea count />
    </div>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
