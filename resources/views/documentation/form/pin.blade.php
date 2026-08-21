@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/pin">
    <x-slot:title>Form Pin</x-slot>
    <x-slot:description>Form pin component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Pin" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-pin length="5" />
        </x-preview>
        <x-warning class="mt-4">
            The length is mandatory in any use case.
        </x-warning>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-pin
                length="5"
                label="Insert the code"
                hint="We sent a 5-digit code to your email."
            />
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-pin
                    name="pin-readonly"
                    length="5"
                    label="Readonly"
                    value="12345"
                    readonly
                />
                <x-pin
                    name="pin-disabled"
                    length="5"
                    label="Disabled"
                    value="12345"
                    disabled
                />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Prefix"
        description="An option to prefix a character related to the desired short code format."
    >
        <x-preview language="blade" :contents="$prefix">
            <x-pin prefix="G-" length="5" />
        </x-preview>
    </x-section>
    <x-section title="Clear" description="An option to append a clear button.">
        <x-preview language="blade" :contents="$clear">
            <livewire:documentation.form.pin :mode="1" />
        </x-preview>
        <x-warning class="mt-4">
            The clear button will only be displayed when the input is not empty.
        </x-warning>
    </x-section>
    <x-section title="Masks" description="An option to limit the input types.">
        <x-preview language="blade" :contents="$masks">
            <div class="space-y-2">
                <x-pin length="5" label="Only Numbers" numbers />
                <x-pin length="5" label="Only Letters" letters />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Password"
        new
        description="An option to mask the typed characters."
    >
        <x-preview language="blade" :contents="$password">
            <x-pin length="6" numbers password />
        </x-preview>
    </x-section>
    <x-section
        title="Separator"
        new
        description="An option to draw a visual divider between the boxes. The divider never reaches the value."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$separator">
                <div class="space-y-2">
                    <x-pin length="6" numbers separator />
                    <x-pin length="6" numbers separator="/" split="2" />
                    <x-pin length="8" letters separator split="2,4,6" />
                </div>
            </x-preview>
            <p>
                A bare
                <x-block>separator</x-block>
                uses
                <x-block>-</x-block>
                and cuts the boxes in the middle. Pass a string of up to three
                characters to replace it, and
                <x-block>split</x-block>
                to choose the positions:
                <x-block>2</x-block>
                gives
                <x-block>12-3456</x-block>
                ,
                <x-block>2,4,6</x-block>
                or
                <x-block>[2, 4, 6]</x-block>
                gives
                <x-block>12-34-56-78</x-block>
                .
            </p>
            <x-warning class="mt-4">
                The
                <x-block>split</x-block>
                attribute requires
                <x-block>separator</x-block>
                . Positions must sit between
                <x-block>1</x-block>
                and
                <x-block>length - 1</x-block>
                .
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Group"
        new
        description="An option to join the boxes with shared borders."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$group">
                <div class="space-y-2">
                    <x-pin length="6" numbers group />
                    <x-pin length="6" numbers group separator />
                </div>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <div class="space-y-2">
                    <x-pin
                        length="5"
                        label="Filled Event"
                        x-on:filled="alert(`Filled: ${$event.detail.model}`)"
                    />
                    <x-pin
                        length="5"
                        label="Clear Event"
                        clear
                        x-on:clear="alert(`Cleared: ${$event.detail.model}`)"
                    />
                </div>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'filled', 'detail' => '{ model }', 'fired' => 'All boxes are filled'],
                    ['event' => 'clear', 'detail' => '{ model }', 'fired' => 'The pin is cleared'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
            <x-warning>
                The clear event needs the clear option to be enabled.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Smart"
        description="An option to automatically submit the form when all pin boxes are filled."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$smart">
                <livewire:documentation.form.pin :mode="2" />
            </x-preview>
            <x-warning>
                The form will only be submitted once. After submission, the user
                must clear and re-fill the pin to submit again.
            </x-warning>
        </div>
    </x-section>
</x-layout>
