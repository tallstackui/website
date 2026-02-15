<?php

namespace App\Enums\Examples\V1\Ui;

class Boolean
{
    public const BASIC = <<<'HTML'
    <x-boolean :boolean="true" />
    <x-boolean :boolean="false" />

    <!-- The component can also resolve closures -->
    <x-boolean :boolean="function () { return true; }" />
    <x-boolean :boolean="fn () => false" />
    HTML;

    public const ICONS = <<<'HTML'
    <x-boolean :boolean="$trueOrFalse" icon-when-true="hand-thumb-up" icon-when-false="hand-thumb-down" />
    HTML;

    public const COLORS = <<<'HTML'
    <!-- When true -->
    <x-boolean :boolean="true" color-when-true="primary" />
    <x-boolean :boolean="true" color-when-true="secondary" />
    <x-boolean :boolean="true" color-when-true="slate" />
    <x-boolean :boolean="true" color-when-true="gray" />
    <x-boolean :boolean="true" color-when-true="zinc" />
    <x-boolean :boolean="true" color-when-true="neutral" />
    <x-boolean :boolean="true" color-when-true="stone" />
    <x-boolean :boolean="true" color-when-true="red" />
    <x-boolean :boolean="true" color-when-true="orange" />
    <x-boolean :boolean="true" color-when-true="amber" />
    <x-boolean :boolean="true" color-when-true="yellow" />
    <x-boolean :boolean="true" color-when-true="lime" />
    <x-boolean :boolean="true" color-when-true="green" />
    <x-boolean :boolean="true" color-when-true="emerald" />
    <x-boolean :boolean="true" color-when-true="teal" />
    <x-boolean :boolean="true" color-when-true="cyan" />
    <x-boolean :boolean="true" color-when-true="sky" />
    <x-boolean :boolean="true" color-when-true="blue" />
    <x-boolean :boolean="true" color-when-true="indigo" />
    <x-boolean :boolean="true" color-when-true="violet" />
    <x-boolean :boolean="true" color-when-true="purple" />
    <x-boolean :boolean="true" color-when-true="fuchsia" />
    <x-boolean :boolean="true" color-when-true="pink" />
    <x-boolean :boolean="true" color-when-true="rose" />
    <x-boolean :boolean="true" color-when-true="white" />
    <x-boolean :boolean="true" color-when-true="black" />

    <!-- When false -->
    <x-boolean :boolean="true" color-when-false="primary" />
    <x-boolean :boolean="true" color-when-false="secondary" />
    <x-boolean :boolean="true" color-when-false="slate" />
    <x-boolean :boolean="true" color-when-false="gray" />
    <x-boolean :boolean="true" color-when-false="zinc" />
    <x-boolean :boolean="true" color-when-false="neutral" />
    <x-boolean :boolean="true" color-when-false="stone" />
    <x-boolean :boolean="true" color-when-false="red" />
    <x-boolean :boolean="true" color-when-false="orange" />
    <x-boolean :boolean="true" color-when-false="amber" />
    <x-boolean :boolean="true" color-when-false="yellow" />
    <x-boolean :boolean="true" color-when-false="lime" />
    <x-boolean :boolean="true" color-when-false="green" />
    <x-boolean :boolean="true" color-when-false="emerald" />
    <x-boolean :boolean="true" color-when-false="teal" />
    <x-boolean :boolean="true" color-when-false="cyan" />
    <x-boolean :boolean="true" color-when-false="sky" />
    <x-boolean :boolean="true" color-when-false="blue" />
    <x-boolean :boolean="true" color-when-false="indigo" />
    <x-boolean :boolean="true" color-when-false="violet" />
    <x-boolean :boolean="true" color-when-false="purple" />
    <x-boolean :boolean="true" color-when-false="fuchsia" />
    <x-boolean :boolean="true" color-when-false="pink" />
    <x-boolean :boolean="true" color-when-false="rose" />
    <x-boolean :boolean="true" color-when-false="white" />
    <x-boolean :boolean="true" color-when-false="black" />
    HTML;

    public const CLICK = <<<'HTML'
    <x-boolean :boolean="true" wire:click="save" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->boolean()
        ->block('block', 'classes');
    HTML;
}
