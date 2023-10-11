<?php

namespace App\Enums\Examples\Form;

class Textarea
{
    public const BASIC = <<<'HTML'
    <x-textarea />
    HTML;

    public const RESIZE = <<<'HTML'
    <x-textarea resize />
    HTML;

    public const AUTO_RESIZE = <<<'HTML'
    <x-textarea auto-resize />
    HTML;

    public const ROWS = <<<'HTML'
    <x-textarea :rows="3" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-textarea label="Name" hint="Insert your name" />
    HTML;

    public const EFFECTS = <<<'HTML'
    <x-textarea label="Name" disabled>TallStackUi</x-textarea>
    <x-textarea label="Name" value="TallStackUi" readonly>TallStackUi</x-textarea>
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-textarea label="Description"
                hint="Insert the post description"
                wire:model="description" />
    HTML;
}
