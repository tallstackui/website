<?php

namespace App\Enums\Examples\Form;

class Number
{
    public const BASIC = <<<'HTML'
    <x-number wire:model.live="quantity" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-number label="Quantity"
              hint="Select the quantity of items"
              wire:model.live="quantity" />
    HTML;

    public const MIN_MAX = <<<'HTML'
    <x-number min="2" max="5" wire:model.live="quantity" />
    HTML;

    public const DELAY = <<<'HTML'
    <x-number delay="1" min="1" max="10" wire:model.live="quantity" />
    HTML;

    public const ICON = <<<'HTML'
    <x-number wire:model.live="quantity" chevron />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('number')
        ->block('block', 'classes');
    HTML;
}
