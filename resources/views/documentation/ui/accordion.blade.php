@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout
    :$content
    :ai="['Accordion' => 'accordion/main', 'Accordion Items' => 'accordion/items']"
>
    <x-slot:title>Accordion</x-slot>
    <x-slot:description>Accordion component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Accordion\Main"
            title="Accordion"
        />
        <livewire:customization
            :customization="$customizationItems"
            component="Accordion\Items"
            title="Accordion Items"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" :background="false">
            <x-accordion>
                <x-accordion.items title="What is TallStackUI?" id="faq-1">
                    A suite of Blade components for the TALL stack.
                </x-accordion.items>
                <x-accordion.items
                    title="Which Laravel versions are supported?"
                    id="faq-2"
                >
                    Laravel 10, 11, 12, and 13.
                </x-accordion.items>
                <x-accordion.items title="Is it free?" id="faq-3">
                    Yes, TallStackUI is free and open source.
                </x-accordion.items>
            </x-accordion>
        </x-preview>
    </x-section>
    <x-section title="Multiple Open">
        <x-preview language="blade" :contents="$multiple" :background="false">
            <x-accordion multiple>
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
        </x-preview>
    </x-section>
    <x-section title="Variations">
        <x-preview language="blade" :contents="$variations">
            <div class="space-y-4">
                <x-accordion shadowless>
                    <x-accordion.items title="First" id="flat-1">
                        Without the shadow, 1
                    </x-accordion.items>
                    <x-accordion.items title="Second" id="flat-2">
                        Without the shadow, 2
                    </x-accordion.items>
                </x-accordion>
                <x-accordion bordered>
                    <x-accordion.items title="First" id="flat-1">
                        With border, 1
                    </x-accordion.items>
                    <x-accordion.items title="Second" id="flat-2">
                        With border, 2
                    </x-accordion.items>
                </x-accordion>
                <x-accordion shadowless bordered>
                    <x-accordion.items title="First" id="flat-1">
                        Without shadow and with border, 1
                    </x-accordion.items>
                    <x-accordion.items title="Second" id="flat-2">
                        Without shadow and with border, 2
                    </x-accordion.items>
                </x-accordion>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Chevron Position">
        <x-preview language="blade" :contents="$chevron" :background="false">
            <div class="space-y-4">
                <x-accordion>
                    <x-accordion.items
                        title="Right chevron (default)"
                        id="chev-right"
                    >
                        The chevron sits at the end of the trigger.
                    </x-accordion.items>
                </x-accordion>
                <x-accordion chevron="left">
                    <x-accordion.items title="Left chevron" id="chev-left">
                        The chevron sits before the title.
                    </x-accordion.items>
                </x-accordion>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Default Open">
        <x-preview
            language="blade"
            :contents="$defaultOpen"
            :background="false"
        >
            <x-accordion>
                <x-accordion.items
                    title="Closed by default"
                    id="default-closed"
                >
                    Content
                </x-accordion.items>
                <x-accordion.items
                    title="Open by default"
                    id="default-opened"
                    open
                >
                    Ships expanded on page load.
                </x-accordion.items>
            </x-accordion>
        </x-preview>
    </x-section>
    <x-section title="Custom Icon">
        <x-preview
            language="blade"
            :contents="$customIcon"
            :background="false"
        >
            <x-accordion>
                <x-accordion.items
                    title="Using plus-circle"
                    id="icon-plus"
                    icon="plus-circle"
                >
                    The icon still rotates 180° when the item opens.
                </x-accordion.items>
                <x-accordion.items
                    title="Using bell"
                    id="icon-bell"
                    icon="bell"
                >
                    Any Heroicon name is accepted.
                </x-accordion.items>
            </x-accordion>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$iconSlot" :background="false">
            <x-accordion>
                <x-accordion.items title="Custom indicator" id="icon-slot-1">
                    <x-slot:icon>HTML</x-slot>
                    The slot HTML is emitted as-is. Rotation is not applied
                    automatically.
                </x-accordion.items>
            </x-accordion>
        </x-preview>
    </x-section>
    <x-section
        title="Trigger Slot"
        description="A slot to replace the trigger label entirely with rich content like avatars, badges, or multi-line headings."
    >
        <x-preview
            language="blade"
            :contents="$triggerSlot"
            :background="false"
        >
            <x-accordion>
                <x-accordion.items id="user-1">
                    <x-slot:trigger>
                        <div class="flex items-center gap-3">
                            <x-avatar sm color="primary" text="JD" />
                            <div class="flex flex-col text-start">
                                <span class="text-sm font-semibold">
                                    John Doe
                                </span>
                                <span class="text-xs text-gray-500">
                                    Product Manager
                                </span>
                            </div>
                            <x-badge
                                color="green"
                                sm
                                text="active"
                                class="ms-auto"
                            />
                        </div>
                    </x-slot>
                    Profile details, contact info, recent activity.
                </x-accordion.items>
            </x-accordion>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview
                language="blade"
                :contents="$events"
                :background="false"
            >
                <x-accordion
                    x-on:open="alert(`Opened: ${$event.detail.id}`)"
                    x-on:close="alert(`Closed: ${$event.detail.id}`)"
                >
                    <x-accordion.items title="Watch me" id="evt-1">
                        Trigger this item to see the events firing.
                    </x-accordion.items>
                    <x-accordion.items title="Or watch me" id="evt-2">
                        Each open / close dispatches a CustomEvent with
                        detail.id.
                    </x-accordion.items>
                </x-accordion>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'open', 'detail' => '{ id }', 'fired' => 'An item opens'],
                    ['event' => 'close', 'detail' => '{ id }', 'fired' => 'An item closes'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
</x-layout>
