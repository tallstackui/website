@php
    $now = now();
    $current = $now->format("Y-m-d");

    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="calendar">
    <x-slot:title>Calendar</x-slot>
    <x-slot:description>
        Calendar component (inline date picker).
    </x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Calendar"
            title="Calendar"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <p>
                Calendar is an
                <b>inline</b>
                date picker, the same grid-based UX you get from
                <x-block>&lt;x-date&gt;</x-block>
                , but rendered directly in the page with no input field and no
                floating wrapper. Useful for dashboards, filter panels,
                scheduling screens, and inline reports.
            </p>
            <x-preview
                language="blade"
                :contents="$basic"
                :background="false"
            >
                <x-calendar />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview
            language="blade"
            :contents="$labelHint"
            :background="false"
        >
            <x-calendar label="Pick a date" hint="Format: YYYY-MM-DD" />
        </x-preview>
    </x-section>
    <x-section title="Range Mode">
        <x-preview language="blade" :contents="$range" :background="false">
            <x-calendar
                range
                :value="[now()->addDays(2)->format('Y-m-d'), now()->addWeek()->format('Y-m-d')]"
            />
        </x-preview>
        <x-warning class="mt-4">
            Range mode allows the user to select only the start date initially.
            In that case the end date will be null.
        </x-warning>
    </x-section>
    <x-section
        title="Double Mode"
        description="An option to render two months side-by-side. Useful for selecting ranges that span multiple months."
    >
        <x-preview language="blade" :contents="$double" :background="false">
            <x-calendar
                range
                double
                :value="[now()->format('Y-m-d'), now()->addDays(20)->format('Y-m-d')]"
            />
        </x-preview>
        <x-warning class="mt-4">
            <ul class="ml-2 list-inside list-decimal text-sm">
                <li>The double mode is only valid alongside range.</li>
                <li>
                    Both calendars share the same month/year state, navigating
                    with the primary's arrows advances both.
                </li>
                <li>
                    Below the sm breakpoint, the secondary calendar goes to the
                    bottom of the first calendar.
                </li>
            </ul>
        </x-warning>
    </x-section>
    <x-section title="Multiple Mode" :background="false">
        <x-preview language="blade" :contents="$multiple">
            <x-calendar
                multiple
                :value="[
                    $now->format('Y-m-d'),
                    $now->addDays(1)->format('Y-m-d'),
                    $now->addDays(3)->format('Y-m-d'),
                    $now->addDays(5)->format('Y-m-d'),
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Lock Month Year"
        description="An option to disable the month/year header buttons. Day selection and prev/next month navigation continue to work."
    >
        <x-preview
            language="blade"
            :contents="$lockMonthYear"
            :background="false"
        >
            <x-calendar lock-month-year />
        </x-preview>
        <x-warning class="mt-4">
            lock-month-year and month-year-only cannot be used together,
            month-year-only would freeze the component because the picker is the
            only interaction surface.
        </x-warning>
    </x-section>
    <x-section title="Flat Look">
        <x-preview language="blade" :contents="$flat">
            <div class="space-y-4">
                <x-calendar shadowless />
                <x-calendar bordered />
                <x-calendar shadowless bordered />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Other Options" disable-copy>
        <p>
            All other methods available in the
            <x-refer :doc="['form', 'date']">date</x-refer>
            component are also available in the Calendar component.
        </p>
    </x-section>
</x-layout>
