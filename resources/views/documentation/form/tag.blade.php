@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/tag">
    <x-slot:title>Form Tag</x-slot>
    <x-slot:description>Form tag component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Tag" />
    </x-slot>
    <x-warning class="mb-4">
        In desktop devices the tags can be inserted by pressing the
        <b>enter</b>
        or
        <b>comma</b>
        keys, and can be removed by pressing the
        <b>backspace</b>
        key. In mobile devices the tags can only be inserted using
        <b>enter</b>
        key.
    </x-warning>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tag />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-tag
                label="Frameworks"
                hint="Select your preferred frameworks"
                :value="['Laravel', 'Symfony', 'CodeIgniter']"
            />
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-tag
                    label="Readonly"
                    :value="['Laravel', 'Livewire']"
                    readonly
                />
                <x-tag
                    label="Disabled"
                    :value="['Laravel', 'Livewire']"
                    disabled
                />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Limit Options"
        description="An option to limit the number of tags that can be added."
    >
        <x-preview language="blade" :contents="$limit">
            <x-tag
                label="Frameworks"
                hint="Select your preferred frameworks"
                :limit="2"
                :value="['Laravel']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Lazy"
        description="An option to silently reject tags whose typed content is shorter than the given minimum."
    >
        <x-preview language="blade" :contents="$lazy">
            <x-tag
                label="Frameworks"
                hint="Tags with less than 3 characters will be silently rejected"
                :lazy="3"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Prefix"
        description="An option to set a single-character prefix."
    >
        <x-preview language="blade" :contents="$prefix">
            <x-tag prefix="#" :value="['Laravel', 'Symfony', 'CodeIgniter']" />
        </x-preview>
        <x-warning class="mt-4">
            The prefix must be a single character.
        </x-warning>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-tag
                    :value="['Laravel', 'Symfony', 'CodeIgniter']"
                    x-on:add="alert(`Introduced: ${$event.detail.tag}`)"
                    x-on:remove="alert(`Removed: ${$event.detail.tag}`)"
                    x-on:erase="alert(`Erased: ${$event.detail.tags}`)"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'add', 'detail' => '{ tag }', 'fired' => 'A tag is introduced'],
                    ['event' => 'remove', 'detail' => '{ tag }', 'fired' => 'A tag is removed'],
                    ['event' => 'erase', 'detail' => '{ tags }', 'fired' => 'All tags are erased'],
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
    <x-section
        title="Options"
        description="An option to display a pre-existing list of tags"
    >
        <x-preview language="blade" :contents="$options">
            <x-tag :options="['laravel', 'livewire', 'alpine', 'tailwind']" />
        </x-preview>
        <p class="mt-4">
            Matching is case-insensitive, and a typed value that matches an
            option is stored with the option's casing. Typing
            <x-block>Alpine</x-block>
            and confirming adds
            <x-block>alpine</x-block>
            when that is the option. A
            <x-block>prefix</x-block>
            is ignored while comparing, so
            <x-block>LARAVEL</x-block>
            still finds
            <x-block>#laravel</x-block>
            . A match that is already picked is skipped as a duplicate. Typing a
            tag that matches no option is stored as typed.
        </p>
    </x-section>
    <x-section
        title="Slot After"
        description="An option to display content when dealing with a search that returns no results."
    >
        <x-preview language="blade" :contents="$afterSlot">
            <x-tag :options="['laravel', 'livewire', 'alpine', 'tailwind']">
                <x-slot:after>
                    <p class="p-4 font-medium text-red-500">
                        After slot goes here
                    </p>
                </x-slot>
            </x-tag>
        </x-preview>
        <x-warning info class="mt-4">
            On
            <x-block>select.styled</x-block>
            and
            <x-block>autocomplete</x-block>
            the slot of the same name
            <b>replaces</b>
            the empty message and appears only when nothing matches. Here it
            sits below the list at all times, because it exists to reach an
            action rather than to explain an empty result.
        </x-warning>
    </x-section>
</x-layout>
