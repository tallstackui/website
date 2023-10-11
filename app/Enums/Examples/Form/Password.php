<?php

namespace App\Enums\Examples\Form;

class Password
{
    public const BASIC = <<<'HTML'
    <x-password value="TallStackUi" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
    HTML;

    public const EFFECTS = <<<'HTML'
    <x-password label="Password"
                hint="Insert your best password"
                value="TallStackUi"
                disabled />

    <x-password label="Password"
                hint="Insert your best password"
                value="TallStackUi" readonly />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-password label="Password"
                hint="Insert your best password"
                wire:model="password"
    />
    HTML;
}
