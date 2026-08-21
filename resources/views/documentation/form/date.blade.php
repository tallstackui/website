@php
    $now = now();
    $current = $now->format("Y-m-d");

    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/date">
    <x-slot:title>Form Date</x-slot>
    <x-slot:description>Form date component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Date" />
    </x-slot>
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
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-date label="Readonly" value="2026-08-13" readonly />
                <x-date label="Disabled" value="2026-08-13" disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Available Formats"
        description="The tokens the visible input understands"
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$formats">
                <div class="space-y-2">
                    <x-date format="YYYY-MM-DD" :value="$current" />
                    <x-date format="YYYY, MMMM, DD" :value="$current" />
                    <x-date
                        format="DD [of] MMMM [of] YYYY"
                        :value="$current"
                    />
                </div>
            </x-preview>
            <p>
                The table below lists every token, with what each one produces
                for
                <x-block>2026-08-07</x-block>
                , a Friday:
            </p>
            <x-table
                :headers="[
                    ['index' => 'token', 'label' => 'Token'],
                    ['index' => 'output', 'label' => 'Output'],
                ]"
                :rows="[
                    ['token' => 'YY', 'output' => '26'],
                    ['token' => 'YYYY', 'output' => '2026'],
                    ['token' => 'M', 'output' => '8'],
                    ['token' => 'MM', 'output' => '08'],
                    ['token' => 'MMM', 'output' => 'Aug'],
                    ['token' => 'MMMM', 'output' => 'August'],
                    ['token' => 'D', 'output' => '7'],
                    ['token' => 'DD', 'output' => '07'],
                    ['token' => 'd', 'output' => '5'],
                    ['token' => 'dd', 'output' => 'Fr'],
                    ['token' => 'ddd', 'output' => 'Fri'],
                    ['token' => 'dddd', 'output' => 'Friday'],
                    ['token' => '[text]', 'output' => 'text, escaped from parsing'],
                ]"
            >
                @interact("column_token", $row)
                    <x-block>{{ $row["token"] }}</x-block>
                @endinteract
            </x-table>
            <x-warning class="mt-4">
                <ul class="ml-2 list-inside list-decimal space-y-2 text-sm">
                    <li>
                        <b>The formats are applicable only visually.</b>
                        The default backend format will always be
                        <b>YYYY-MM-DD</b>
                    </li>
                    <li>
                        The default date format sent to the component should be
                        <b>YYYY-MM-DD</b>
                    </li>
                    <li>
                        Month and weekday names follow the application locale,
                        so
                        <x-block>MMMM</x-block>
                        and
                        <x-block>dddd</x-block>
                        are translated along with the rest of the calendar.
                    </li>
                    <li>
                        The time tokens
                        <x-block>H HH h hh m mm s ss SSS a A Z ZZ</x-block>
                        are accepted, but a date picker holds no time, so they
                        always render zeros.
                    </li>
                </ul>
            </x-warning>
            <p class="mt-2">
                Regardless of the format of the date, to send the date to the
                component you must follow the pattern
                <x-block>YYYY-MM-DD</x-block>
                . If the date are using a format different than
                <x-block>YYYY-MM-DD</x-block>
                , the correct thing to do is to use Carbon's
                <x-block>createFromFormat</x-block>
                . Let's take a look at an example considering the Brazilian date
                format:
            </p>
            <x-code :contents="$createFromFormat" />
            <p>
                If you are using the component inside Livewire components, you
                can use the
                <x-block>mount</x-block>
                method to convert the date. If you are using the component out
                of Livewire, you can to the same logic in the controller methods
                before send the variable to the Blade file.
            </p>
        </div>
    </x-section>
    <x-section title="Helpers">
        <x-preview language="blade" :contents="$helpers">
            <x-date helpers />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Dates">
        <x-preview language="blade" :contents="$minMaxDates">
            <x-date
                :min-date="now()->subWeek()"
                :max-date="now()->addWeek()"
            />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Years">
        <x-preview language="blade" :contents="$minMaxYears">
            <x-date
                :min-year="now()->subYear()->year"
                :max-year="now()->year"
            />
        </x-preview>
    </x-section>
    <x-section title="Disable Dates">
        <x-preview language="blade" :contents="$disabled">
            <x-date
                :value="$current"
                :disable="collect([now()->subDay()->format('Y-m-d'), now()->addDay()->format('Y-m-d')])"
            />
        </x-preview>
    </x-section>
    <x-section title="Disable Specific Days">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$disableSpecificDays">
                <div class="space-y-2">
                    <x-date
                        label="Only Wednesday"
                        hint="Disable all days other than Wednesday"
                        only="3"
                    />
                    <x-date
                        label="Only Weekdays"
                        hint="Disable Weekends"
                        weekdays
                    />
                    <x-date
                        label="Only Weekends"
                        hint="Disable Weekdays"
                        weekends
                    />
                </div>
            </x-preview>
            <x-warning>
                This feature does not validate the date you pass to the
                component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Range Mode">
        <x-preview language="blade" :contents="$range">
            <x-date
                range
                :value="[now()->addDays(2)->format('Y-m-d'), now()->addWeek()->format('Y-m-d')]"
            />
        </x-preview>
        <x-warning class="mt-4">
            Range mode allow the user to select only the start date. In this
            case the end date will be null.
        </x-warning>
    </x-section>
    <x-section title="Multiple Mode">
        <x-preview language="blade" :contents="$multiple">
            <x-date
                multiple
                :value="[
                    $now->format('Y-m-d'),
                    $now->addDays(1)->format('Y-m-d'),
                    $now->addDays(2)->format('Y-m-d'),
                    $now->addDays(3)->format('Y-m-d'),
                    $now->addDays(4)->format('Y-m-d'),
                    $now->addDays(5)->format('Y-m-d'),
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Start Day"
        description="An option to set the first day of week."
    >
        <x-preview language="blade" :contents="$start">
            <x-date start="1" />
        </x-preview>
        <x-warning info class="mt-4">
            You can set the first day of the week for every date picker in the
            <x-refer doc="configuration">configuration file.</x-refer>
            The inline attribute always wins, so
            <x-block>start="0"</x-block>
            keeps Sunday on a single picker. Values outside
            <x-block>0</x-block>
            to
            <x-block>6</x-block>
            throw, including negatives.
        </x-warning>
    </x-section>
    <x-section
        title="Month Year Only"
        description="An option to select only month and year."
    >
        <x-preview language="blade" :contents="$monthYearOnly">
            <x-date month-year-only />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-date
                    x-on:select="alert(`Selected Date: ${$event.detail.date}`)"
                    x-on:clear="alert(`Cleaned!`)"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'select', 'detail' => '{ type, date }', 'fired' => 'A date is picked'],
                    ['event' => 'clear', 'detail' => '{ type, date }', 'fired' => 'The value is cleared'],
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
