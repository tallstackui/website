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
        <x-preview language="blade" :contents="$labelHint">
            <x-time label="Time" hint="Select the hour" />
        </x-preview>
    </x-section>
    <x-section title="Available Formats">
        <x-preview language="blade" :contents="$formats">
            <div class="space-y-2">
                <x-time :value="$current" />
                <x-time :value="$current" format="24" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Min & Max Hours and Minutes">
        <x-preview language="blade" :contents="$minMax">
            <div class="space-y-2">
                <x-time label="Min Hour: 5, Max Hour: 10" :min-hour="5" :max-hour="10" />
                <x-time label="Min Minute: 30, Max Minute: 45" :min-minute="30" :max-minute="45" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Helper" description="An option to easily select the current time.">
        <x-preview language="blade" :contents="$helper">
            <x-time format="24" helper />
        </x-preview>
    </x-section>
    <x-section title="Step Hour & Minute">
        <x-preview language="blade" :contents="$step">
            <x-time step-hour="3" step-minute="15" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footerSlot">
            <x-time>
                <x-slot:footer>
                    Footer Slot
                </x-slot:footer>
            </x-time>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-time x-on:hour="alert(`Hour Selected: ${$event.detail.hour}`)"
                    x-on:minute="alert(`Minute Selected: ${$event.detail.minute}`)"
                    x-on:interval="alert(`Interval Changed: ${$event.detail.interval}`)"/>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-time invalidate />
        </x-preview>
    </x-section>
</x-layout>
