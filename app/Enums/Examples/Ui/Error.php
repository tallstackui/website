<?php

namespace App\Enums\Examples\Ui;

class Error
{
    public const BASIC = <<<'HTML'
    <x-errors />
    HTML;

    public const SPECIFIC = <<<'HTML'
    <x-errors only="name" />

    <!-- use array for more than one -->

    <x-errors :only="['name', 'description']" />
    HTML;

    public const CUSTOMIZED = <<<'HTML'
    <x-errors title="Ops! There are :count validation errors:" />
    HTML;

    public const CLOSE = <<<'HTML'
    <x-errors close />
    HTML;

    public const SLOT = <<<'HTML'
    <x-errors footer="Footer Slot" />

    <!-- or -->

    <x-errors>
        <x-slot:footer>
            <div class="flex justify-end">
                <p class="text-sm text-red-500">
                    Footer Slot
                </p>
            </div>
        </x-slot:footer>
    </x-errors>
    HTML;

    public const COLORS = <<<'HTML'
    <!-- Default: red -->

    <x-errors />
    <x-errors color="primary" />
    <x-errors color="secondary" />
    <x-errors color="slate" />
    <x-errors color="gray" />
    <x-errors color="zinc" />
    <x-errors color="neutral" />
    <x-errors color="stone" />
    <x-errors color="orange" />
    <x-errors color="amber" />
    <x-errors color="yellow" />
    <x-errors color="lime" />
    <x-errors color="green" />
    <x-errors color="emerald" />
    <x-errors color="teal" />
    <x-errors color="cyan" />
    <x-errors color="sky" />
    <x-errors color="blue" />
    <x-errors color="indigo" />
    <x-errors color="violet" />
    <x-errors color="purple" />
    <x-errors color="fuchsia" />
    <x-errors color="pink" />
    <x-errors color="rose" />
    <x-errors color="black" />
    <x-errors color="white" />
    HTML;

    public const EVENTS = <<<'HTML'
    <x-errors close x-on:close="alert('Errors Closed')" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->dropdown('errors')
        ->block('block', 'classes');
    HTML;
}
