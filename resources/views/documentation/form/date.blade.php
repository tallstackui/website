@php
    $now = now();
    $current = $now->format('Y-m-d');
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Date
        <x-slot:version>
            v1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form date component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="date" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-date />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-date label="Date" hint="Select your DoB" />
        </x-preview>
    </x-section>
    <x-section title="Available Formats" description="Support for all Day.js formats">
        <x-preview language="blade" :contents="$formats">
            <div class="space-y-2">
                <x-date format="YYYY-MM-DD" :value="$current" />
                <x-date format="YYYY, MMMM, DD" :value="$current" />
                <x-date format="MMMM, DD, YYYY" :value="$current" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            <ul class="ml-2 list-inside list-decimal text-sm">
                <li>You can use <a href="https://day.js.org/docs/en/display/format" target="_blank" class="underline">all Day.js formats.</a></li>
                <li><b>The formats are applicable only visually.</b> The default backend format will always be <b>YYYY-MM-DD</b></li>
                <li>The default date format sent to the component should be <b>YYYY-MM-DD</b></li>
            </ul>
        </x-warning>
        <p class="mt-2">
            Regardless of the format of the date, to send the date to the component you
            must follow the pattern <x-block>YYYY-MM-DD</x-block>. If the date are using a format different
            than <x-block>YYYY-MM-DD</x-block>, the correct thing to do is to use Carbon's <x-block>createFromFormat</x-block>.
            Let's take a look at an example considering the Brazilian date format:
        </p>
        <x-code :contents="$createFromFormat" />
        <p>
            If you are using the component inside Livewire components, you
            can use the <x-block>mount</x-block> method to convert the date.
            If you are using the component out of Livewire, you can to the
            same logic in the controller methods before send the variable
            to the Blade file.
        </p>
    </x-section>
    <x-section title="Helpers">
        <x-preview language="blade" :contents="$helpers">
            <x-date helpers />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Dates">
        <x-preview language="blade" :contents="$minMaxDates">
            <x-date :min-date="now()->subWeek()"
                    :max-date="now()->addWeek()" />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Years">
        <x-preview language="blade" :contents="$minMaxYears">
            <x-date :min-year="now()->subYear()->year" :max-year="now()->year" />
        </x-preview>
    </x-section>
    <x-section title="Disable Dates">
        <x-preview language="blade" :contents="$disabled">
            <x-date :value="$current" :disable="collect([now()->subDay()->format('Y-m-d'), now()->addDay()->format('Y-m-d')])" />
        </x-preview>
    </x-section>
    <x-section title="Range Mode">
        <x-preview language="blade" :contents="$range">
            <x-date range :value="[now()->addDays(2)->format('Y-m-d'), now()->addWeek()->format('Y-m-d')]" />
        </x-preview>
        <x-warning class="mt-4">
            Range mode allow the user to select only the start date. In this case the end date will be null.
        </x-warning>
    </x-section>
    <x-section title="Multiple Mode">
        <x-preview language="blade" :contents="$multiple">
            <x-date multiple :value="[
                $now->format('Y-m-d'),
                $now->addDays(1)->format('Y-m-d'),
                $now->addDays(2)->format('Y-m-d'),
                $now->addDays(3)->format('Y-m-d'),
                $now->addDays(4)->format('Y-m-d'),
                $now->addDays(5)->format('Y-m-d'),
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-date x-on:select="alert(`Selected Date: ${$event.detail.date}`)" x-on:clear="alert(`Cleaned!`)" />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-date invalidate />
        </x-preview>
    </x-section>
</x-layout>
