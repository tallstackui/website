<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Swap
{
    public const string BASIC = <<<'HTML'
    <!-- Flat array -->
    <x-swap :options="['Apple', 'Banana', 'Cherry']" />

    <!-- Collection -->
    <x-swap :options="collect(['Apple', 'Banana', 'Cherry'])" />

    <!-- Dimensional array, default keys -->
    <x-swap :options="[
        ['label' => 'Small', 'value' => 1],
        ['label' => 'Medium', 'value' => 2],
        ['label' => 'Large', 'value' => 3],
    ]" />
    HTML;

    public const string LABEL_AND_HINT = <<<'HTML'
    <x-swap label="Size"
            hint="Drag the value or use the arrows"
            :options="['Small', 'Medium', 'Large']" />
    HTML;

    public const string SELECT = <<<'HTML'
    <x-swap :options="[
        ['name' => 'Small', 'id' => 1],
        ['name' => 'Medium', 'id' => 2],
        ['name' => 'Large', 'id' => 3],
    ]" select="label:name|value:id" />
    HTML;

    public const string PREVIEW = <<<'HTML'
    <x-swap preview :options="['January', 'February', 'March', 'April', 'May']" />
    HTML;

    public const string VERTICAL = <<<'HTML'
    <x-swap vertical :options="['Monday', 'Tuesday', 'Wednesday', 'Thursday']" />
    HTML;

    public const string BLOCK = <<<'HTML'
    <x-swap block :options="['Daily', 'Weekly', 'Monthly', 'Yearly']" />
    HTML;

    public const string LOOP = <<<'HTML'
    <!-- Loops infinitely, the default -->
    <x-swap :options="['One', 'Two', 'Three']" />

    <!-- Stops at both ends: the matching button disables and the drag resists -->
    <x-swap :loop="false" :options="['One', 'Two', 'Three']" />
    HTML;

    public const string READONLY_AND_DISABLED = <<<'HTML'
    <x-swap readonly :options="['Apple', 'Banana', 'Cherry']" />
    <x-swap disabled :options="['Apple', 'Banana', 'Cherry']" />
    HTML;

    public const string TOOLTIP = <<<'HTML'
    <x-swap tooltip="Pick the plan billing cycle"
            :options="['Monthly', 'Quarterly', 'Yearly']" />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-swap :options="['Apple', 'Banana', 'Cherry']"
            x-on:swap="console.log($event.detail)" />
    HTML;

    public const string ALPINE = <<<'HTML'
    <div x-data="{ cycle: 'Monthly' }">
        <x-swap x-model="cycle" :options="['Monthly', 'Quarterly', 'Yearly']" />

        <span x-text="cycle"></span>
    </div>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->swap()
        ->block('block', 'classes');
    HTML;
}
