@php($current = now()->format('h:i A'))

<x-layout>
    <x-slot:title>
        Form Time
        <x-slot:version>
            v1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form time component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="time" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-time />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$basic">
            <x-time label="Time" hint="Select the hour" />
        </x-preview>
    </x-section>
    <x-section title="Available Formats">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-time :value="$current" />
                <x-time :value="$current" format="24" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Helper">
        <x-preview language="blade" :contents="$basic">
            <x-time format="24" helper />
        </x-preview>
    </x-section>
    <x-section title="Step Hour & Minute">
        <x-preview language="blade" :contents="$basic">
            <x-time step-hour="3" step-minute="15" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$basic">
            <x-time>
                <x-slot:footer>
                    Footer Slot
                </x-slot:footer>
            </x-time>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$basic">
            <x-time x-on:hour="alert(`Hour Selected: ${$event.detail.hour}`)"
                    x-on:minute="alert(`Minute Selected: ${$event.detail.minute}`)"/>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$basic">
            <x-time invalidate />
        </x-preview>
    </x-section>
</x-layout>
