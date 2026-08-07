<?php

namespace App\Enums\Examples\Form;

class Radio
{
    public const string BASIC = <<<'HTML'
    <x-radio />
    HTML;

    public const string LABEL = <<<'HTML'
    <x-radio label="Receive Alert" />
    <x-radio label="Receive Alert" position="left" />
    HTML;

    public const string HTML = <<<'HTML'
    <x-radio>
        <x-slot:label>
            I agree to the <a href="#">terms and conditions</a>
        </x-slot:label>
    </x-radio>
    HTML;

    public const string ALIGNMENT = <<<'HTML'
    <x-radio>
        <x-slot:label>
            Align on Middle
        </x-slot:label>
    </x-radio>

    <x-radio>
        <x-slot:label start>
            Align on Start
        </x-slot:label>
    </x-radio>
    HTML;

    public const string SIZES = <<<'HTML'
    <x-radio xs />
    <x-radio sm />
    <x-radio md />
    <x-radio lg />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-radio label="Primary" />
    <x-radio color="secondary" label="Secondary" />
    <x-radio color="slate" label="Slate" />
    <x-radio color="gray" label="Gray" />
    <x-radio color="zinc" label="Zinc" />
    <x-radio color="neutral" label="Neutral" />
    <x-radio color="stone" label="Stone" />
    <x-radio color="red" label="Red" />
    <x-radio color="orange" label="Orange" />
    <x-radio color="amber" label="Amber" />
    <x-radio color="yellow" label="Yellow" />
    <x-radio color="lime" label="Lime" />
    <x-radio color="green" label="Green" />
    <x-radio color="emerald" label="Emerald" />
    <x-radio color="teal" label="Teal" />
    <x-radio color="cyan" label="Cyan" />
    <x-radio color="sky" label="Sky" />
    <x-radio color="blue" label="Blue" />
    <x-radio color="indigo" label="Indigo" />
    <x-radio color="violet" label="Violet" />
    <x-radio color="purple" label="Purple" />
    <x-radio color="fuchsia" label="Fuchsia" />
    <x-radio color="pink" label="Pink" />
    <x-radio color="rose" label="Rose" />
    <x-radio color="mauve" label="Mauve" />
    <x-radio color="olive" label="Olive" />
    <x-radio color="mist" label="Mist" />
    <x-radio color="taupe" label="Taupe" />
    <x-radio color="black" label="Black" />
    HTML;

    public const string LABEL_LEFT = <<<'HTML'
    <x-radio>
        <x-slot:label left>
            I agree to the <a href="#">terms and conditions</a>
        </x-slot:label>
    </x-radio>
    HTML;

    public const string GROUP_BASIC = <<<'HTML'
    <x-radio.group wire:model="plan" label="Plan" :options="[
        ['label' => 'Startup', 'value' => 'startup', 'description' => 'Up to 5 job postings', 'aside' => '$29 / mo'],
        ['label' => 'Business', 'value' => 'business', 'description' => 'Up to 25 job postings', 'aside' => '$99 / mo'],
        ['label' => 'Enterprise', 'value' => 'enterprise', 'description' => 'Unlimited', 'aside' => '$249 / mo'],
    ]" />
    HTML;

    public const string GROUP_VARIATIONS = <<<'HTML'
    <x-radio.group wire:model="plan" list :options="$plans" />
    <x-radio.group wire:model="plan" card :options="$plans" />
    <x-radio.group wire:model="plan" panel :options="$plans" />
    <x-radio.group wire:model="period" inline :options="$periods" />
    HTML;

    public const string GROUP_COLUMNS = <<<'HTML'
    <x-radio.group wire:model="plan" card :columns="2" :options="$plans" />
    HTML;

    public const string GROUP_POSITION = <<<'HTML'
    <x-radio.group wire:model="plan" position="right" :options="$plans" />
    HTML;

    public const string GROUP_SIZES = <<<'HTML'
    <x-radio.group wire:model="plan" xs :options="$plans" />
    <x-radio.group wire:model="plan" sm :options="$plans" />
    <x-radio.group wire:model="plan" md :options="$plans" />
    <x-radio.group wire:model="plan" lg :options="$plans" />
    HTML;

    public const string GROUP_COLORS = <<<'HTML'
    <x-radio.group wire:model="plan" color="green" :options="$plans" />
    HTML;

    public const string GROUP_SELECT = <<<'HTML'
    <x-radio.group wire:model="plan" select="label:name|value:id|description:note" :options="$plans" />
    HTML;

    public const string GROUP_INTERACT = <<<'HTML'
    <x-radio.group wire:model="plan" card :options="$plans">
        @interact('option', $option)
            <div class="flex items-center justify-between">
                <span class="font-medium">{{ $option['label'] }}</span>
                <x-badge :text="$option['tag']" color="green" sm />
            </div>
        @endinteract
    </x-radio.group>
    HTML;

    public const string GROUP_NATIVE = <<<'HTML'
    <x-radio.group name="plan" value="business" :options="$plans" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('radio')
        ->block('block', 'classes');
    HTML;

    public const string GROUP_CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('radio.group')
        ->block('block', 'classes');
    HTML;
}
