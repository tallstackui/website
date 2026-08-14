@php
    $current = now()->format("h:i A");

    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/time">
    <x-slot:title>Form Time</x-slot>
    <x-slot:description>Form time component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Time" />
    </x-slot>
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
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-time label="Readonly" value="10:00 AM" readonly />
                <x-time label="Disabled" value="10:00 AM" disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Scroll & Drag"
        new
        description="An option to change the time using the mouse scroll or drag."
    >
        <x-preview language="blade" :contents="$gestures">
            <x-time
                step-minute="5"
                hint="Click in the input field and use the mouse wheel or drag (under the numbers) up and down to change the time"
            />
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
        <div class="space-y-4">
            <x-preview language="blade" :contents="$minMax">
                <div class="space-y-2">
                    <x-time
                        label="Min Hour: 5, Max Hour: 10"
                        :min-hour="5"
                        :max-hour="10"
                    />
                    <x-time
                        label="Min Minute: 30, Max Minute: 45"
                        :min-minute="30"
                        :max-minute="45"
                    />
                </div>
            </x-preview>
            <x-warning info>
                Starting from v4, the
                <x-block>min/max</x-block>
                hour and minute will control how long the range are.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Required"
        description="An option to adjust the time to the current one without the possibility of clearing the input."
    >
        <x-preview language="blade" :contents="$required">
            <x-time format="24" required />
        </x-preview>
    </x-section>
    <x-section
        title="Helper"
        description="An option to easily select the current time."
    >
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
                <x-slot:footer>Footer Slot</x-slot>
            </x-time>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-time
                    x-on:hour="alert(`Hour Selected: ${$event.detail.hour}`)"
                    x-on:minute="alert(`Minute Selected: ${$event.detail.minute}`)"
                    x-on:interval="alert(`Interval Changed: ${$event.detail.interval}`)"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'hour', 'detail' => '{ hour }', 'fired' => 'An hour is selected'],
                    ['event' => 'minute', 'detail' => '{ minute }', 'fired' => 'A minute is selected'],
                    ['event' => 'interval', 'detail' => '{ interval }', 'fired' => 'AM/PM is changed'],
                    ['event' => 'current', 'detail' => '{ time: { hour, minute, interval } }', 'fired' => 'The current time is applied'],
                    ['event' => 'clear', 'detail' => '{ time }', 'fired' => 'The value is cleared'],
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
