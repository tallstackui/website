<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Accordion
{
    public const string BASIC = <<<'HTML'
    <x-accordion>
        <x-accordion.items title="What is TallStackUI?" id="faq-1">
            A suite of Blade components for the TALL stack.
        </x-accordion.items>
        <x-accordion.items title="Which Laravel versions are supported?" id="faq-2">
            Laravel 10, 11, 12, and 13.
        </x-accordion.items>
        <x-accordion.items title="Is it free?" id="faq-3">
            Yes, TallStackUI is free and open source.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string MULTIPLE = <<<'HTML'
    <x-accordion multiple> {{-- [tl! highlight] --}}
        <x-accordion.items title="Feature A" id="multi-a">
            Stays open independently.
        </x-accordion.items>
        <x-accordion.items title="Feature B" id="multi-b">
            Stays open independently.
        </x-accordion.items>
        <x-accordion.items title="Feature C" id="multi-c">
            Stays open independently.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string FLAT = <<<'HTML'
    <x-accordion flat> {{-- [tl! highlight] --}}
        <x-accordion.items title="First" id="flat-1">
            Without the outer border, rounding, and shadow.
        </x-accordion.items>
        <x-accordion.items title="Second" id="flat-2">
            Only the inter-item separator remains.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string CHEVRON = <<<'HTML'
    <!-- Default: chevron on the right -->
    <x-accordion>
        <x-accordion.items title="Right chevron (default)" id="chev-right">
            The chevron sits at the end of the trigger.
        </x-accordion.items>
    </x-accordion>

    <!-- Chevron on the left -->
    <x-accordion chevron="left"> {{-- [tl! highlight] --}}
        <x-accordion.items title="Left chevron" id="chev-left">
            The chevron sits before the title.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string DEFAULT_OPEN = <<<'HTML'
    <x-accordion>
        <x-accordion.items title="Closed by default" id="default-closed">
            Content
        </x-accordion.items>
        <x-accordion.items title="Open by default" id="default-opened" open> {{-- [tl! highlight] --}}
            Ships expanded on page load.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string CUSTOM_ICON = <<<'HTML'
    <x-accordion>
        <x-accordion.items title="Using plus-circle"
                           id="icon-plus"
                           icon="plus-circle"> {{-- [tl! highlight] --}}
            The icon still rotates 180° when the item opens.
        </x-accordion.items>
        <x-accordion.items title="Using bell"
                           id="icon-bell"
                           icon="bell">
            Any Heroicon name is accepted.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string ICON_SLOT = <<<'HTML'
    <x-accordion>
        <x-accordion.items title="Custom indicator" id="icon-slot-1">
            <x-slot:icon> {{-- [tl! highlight:3] --}}
                <span class="rounded-full bg-primary-100 px-2 py-0.5 text-xs font-semibold text-primary-700">
                    new
                </span>
            </x-slot:icon>
            The slot HTML is emitted as-is. Rotation is not applied automatically.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string TRIGGER_SLOT = <<<'HTML'
    <x-accordion>
        <x-accordion.items id="user-1">
            <x-slot:trigger> {{-- [tl! highlight:10] --}}
                <div class="flex items-center gap-3">
                    <x-avatar sm color="primary" text="JD" />
                    <div class="flex flex-col text-start">
                        <span class="text-sm font-semibold">John Doe</span>
                        <span class="text-xs text-gray-500">Product Manager</span>
                    </div>
                    <x-badge color="green" sm text="active" class="ms-auto" />
                </div>
            </x-slot:trigger>
            Profile details, contact info, recent activity.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-accordion x-on:open="alert(`Opened: ${$event.detail.id}`)" x-on:close="alert(`Closed: ${$event.detail.id}`)">
        <x-accordion.items title="Watch me" id="evt-1">
            Trigger this item to see the events firing.
        </x-accordion.items>
        <x-accordion.items title="Or watch me" id="evt-2">
            Each open / close dispatches a CustomEvent with detail.id.
        </x-accordion.items>
    </x-accordion>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->accordion()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->accordion('items')
        ->block('block', 'classes');
    HTML;
}
