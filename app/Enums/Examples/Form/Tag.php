<?php

namespace App\Enums\Examples\Form;

class Tag
{
    public const string BASIC = <<<'HTML'
    <x-tag />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-tag label="Frameworks" hint="Select your preferred frameworks" />
    HTML;

    public const string LIMIT = <<<'HTML'
    <x-tag label="Frameworks" hint="Select your preferred frameworks" :limit="2" />
    HTML;

    public const string PREFIX = <<<'HTML'
    <x-tag prefix="#" />
    HTML;

    public const string LAZY = <<<'HTML'
    <!-- Reject tags shorter than the given minimum.   -->
    <!-- The prefix character does not count toward it. -->

    <x-tag :lazy="3" />

    <x-tag prefix="@" :lazy="3" />

    <x-tag :lazy="3" :limit="5" wire:model="tags" />
    HTML;

    public const string EVENTS = <<<'HTML'
    <!--
    For the erase event the correct index is
    $event.detail.tags instead of $event.detail.tag
    -->

    <x-tag x-on:add="alert(`Introduced: ${$event.detail.tag}`)"
           x-on:remove="alert(`Removed: ${$event.detail.tag}`)"
           x-on:erase="alert(`Erased: ${$event.detail.tags}`)" />
    HTML;

    public const string OPTIONS = <<<'HTML'
    <x-tag wire:model="tags" :options="Tag::pluck('name')" />
    HTML;

    public const string AFTER_SLOT = <<<'HTML'
    <x-tag wire:model="tags" :options="['laravel', 'livewire', 'alpine', 'tailwind']">
        <x-slot:after>
            <x-button sm x-on:click="$tsui.open.modal('create-tag')">New tag</x-button>
        </x-slot:after>
    </x-tag>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('tag')
        ->block('block', 'classes');
    HTML;
}
