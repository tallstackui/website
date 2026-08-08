<?php

namespace App\Enums\Examples\Form;

class Checkbox
{
    public const string BASIC = <<<'HTML'
    <x-checkbox />
    HTML;

    public const string LABEL = <<<'HTML'
    <x-checkbox label="Receive Alert" />

    <x-checkbox label="Receive Alert" position="left" />
    HTML;

    public const string HTML = <<<'HTML'
    <x-checkbox>
        <x-slot:label>
            I agree to the <a href="#">terms and conditions</a>
        </x-slot:label>
    </x-checkbox>
    HTML;

    public const string ALIGNMENT = <<<'HTML'
    <x-checkbox>
        <x-slot:label>
            Align on Middle
        </x-slot:label>
    </x-checkbox>

    <x-checkbox>
        <x-slot:label start>
            Align on Start
        </x-slot:label>
    </x-checkbox>
    HTML;

    public const string SIZES = <<<'HTML'
    <x-checkbox xs />
    <x-checkbox sm />
    <x-checkbox md />
    <x-checkbox lg />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-checkbox label="Primary" />
    <x-checkbox color="secondary" label="Secondary" />
    <x-checkbox color="slate" label="Slate" />
    <x-checkbox color="gray" label="Gray" />
    <x-checkbox color="zinc" label="Zinc" />
    <x-checkbox color="neutral" label="Neutral" />
    <x-checkbox color="stone" label="Stone" />
    <x-checkbox color="red" label="Red" />
    <x-checkbox color="orange" label="Orange" />
    <x-checkbox color="amber" label="Amber" />
    <x-checkbox color="yellow" label="Yellow" />
    <x-checkbox color="lime" label="Lime" />
    <x-checkbox color="green" label="Green" />
    <x-checkbox color="emerald" label="Emerald" />
    <x-checkbox color="teal" label="Teal" />
    <x-checkbox color="cyan" label="Cyan" />
    <x-checkbox color="sky" label="Sky" />
    <x-checkbox color="blue" label="Blue" />
    <x-checkbox color="indigo" label="Indigo" />
    <x-checkbox color="violet" label="Violet" />
    <x-checkbox color="purple" label="Purple" />
    <x-checkbox color="fuchsia" label="Fuchsia" />
    <x-checkbox color="pink" label="Pink" />
    <x-checkbox color="rose" label="Rose" />
    <x-checkbox color="mauve" label="Mauve" />
    <x-checkbox color="olive" label="Olive" />
    <x-checkbox color="mist" label="Mist" />
    <x-checkbox color="taupe" label="Taupe" />
    <x-checkbox color="black" label="Black" />
    HTML;

    public const string LABEL_LEFT = <<<'HTML'
    <x-checkbox>
        <x-slot:label left>
            I agree to the <a href="#">terms and conditions</a>
        </x-slot:label>
    </x-checkbox>
    HTML;

    public const string GROUP_BASIC = <<<'HTML'
    <x-checkbox.group wire:model="features" label="Features" :options="[
        ['label' => 'Newsletter', 'value' => 'newsletter', 'description' => 'Weekly digest'],
        ['label' => 'Alerts', 'value' => 'alerts', 'description' => 'Real time notifications'],
        ['label' => 'Reports', 'value' => 'reports', 'description' => 'Monthly summary'],
    ]" />
    HTML;

    public const string GROUP_PROPERTY = <<<'PHP'
    public array $features = [];
    PHP;

    public const string GROUP_VARIATIONS = <<<'HTML'
    <x-checkbox.group list :options="$features" />
    <x-checkbox.group card :options="$features" />
    <x-checkbox.group panel :options="$features" />
    <x-checkbox.group inline :options="$features" />
    HTML;

    public const string GROUP_COLUMNS = <<<'HTML'
    <x-checkbox.group card :columns="3" :options="$features" />
    HTML;

    public const string GROUP_POSITION = <<<'HTML'
    <x-checkbox.group position="right" :options="$features" />
    HTML;

    public const string GROUP_SIZES = <<<'HTML'
    <x-checkbox.group xs :options="$features" />
    <x-checkbox.group sm :options="$features" />
    <x-checkbox.group md :options="$features" />
    <x-checkbox.group lg :options="$features" />
    HTML;

    public const string GROUP_COLORS = <<<'HTML'
    <x-checkbox.group color="green" :options="$features" />
    HTML;

    public const string GROUP_SELECT = <<<'HTML'
    <x-checkbox.group select="label:name|value:id|description:note" :options="$features" />
    HTML;

    public const string GROUP_INTERACT = <<<'HTML'
    <x-checkbox.group card :options="$addons">
        @interact('option', $option)
            <span class="font-semibold">{{ $option['name'] }}</span>
            <span class="font-mono">${{ $option['price'] }}</span>
        @endinteract
    </x-checkbox.group>
    HTML;

    public const string GROUP_CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('checkbox.group')
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('checkbox')
        ->block('block', 'classes');
    HTML;
}
