@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="form/tag">
    <x-slot:title>
        Form Tag
    </x-slot:title>
    <x-slot:description>
        Form tag component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Tag" />
    </x-slot:customization>
    <x-warning class="mb-4">
        In desktop devices the tags can be inserted by pressing the <b>enter</b> or <b>comma</b> keys,
        and can be removed by pressing the <b>backspace</b> key. In mobile devices the tags can only be inserted
        using <b>enter</b> key.
    </x-warning>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tag />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-tag label="Frameworks"
                   hint="Select your preferred frameworks"
                   :value="['Laravel', 'Symfony', 'CodeIgniter']" />
        </x-preview>
    </x-section>
    <x-section title="Limit Options" description="An option to limit the number of tags that can be added.">
        <x-preview language="blade" :contents="$limit">
            <x-tag label="Frameworks"
                   hint="Select your preferred frameworks"
                   :limit="2"
                   :value="['Laravel']" />
        </x-preview>
    </x-section>
    <x-section title="Lazy" description="An option to silently reject tags whose typed content is shorter than the given minimum.">
        <x-preview language="blade" :contents="$lazy">
            <x-tag label="Frameworks"
                   hint="Tags with less than 3 characters will be silently rejected"
                   :lazy="3" />
        </x-preview>
    </x-section>
    <x-section title="Prefix" description="An option to set a single-character prefix.">
        <x-preview language="blade" :contents="$prefix">
            <x-tag prefix="#"
                   :value="['Laravel', 'Symfony', 'CodeIgniter']" />
        </x-preview>
        <x-warning class="mt-4">
            The prefix must be a single character.
        </x-warning>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-tag :value="['Laravel', 'Symfony', 'CodeIgniter']"
                   x-on:add="alert(`Introduced: ${$event.detail.tag}`)"
                   x-on:remove="alert(`Removed: ${$event.detail.tag}`)"
                   x-on:erase="alert(`Erased: ${$event.detail.tags}`)" />
        </x-preview>
    </x-section>
    <x-section title="Options" new description="Free typing still works; the list is an extra way in, for tags that get reused rather than invented each time. Options already added drop out of it.">
        <x-preview language="blade" :contents="$options">
            <x-tag :options="['laravel', 'livewire', 'alpine', 'tailwind']" />
        </x-preview>
        <x-warning class="mt-4">
            Arrow keys move through the list, Enter takes the highlighted option and Escape closes it. With nothing
            highlighted, Enter falls through to the typed value, so the two ways of adding never fight over the key. A
            <x-block>prefix</x-block> is ignored while matching, and reaching <x-block>limit</x-block> closes the list.
        </x-warning>
    </x-section>
    <x-section title="Slot After" new description="Rendered under the list and always reachable, including when nothing matches. The slot alone is enough to make the list open.">
        <x-preview language="blade" :contents="$afterSlot">
            <x-tag :options="['laravel', 'livewire', 'alpine', 'tailwind']">
                <x-slot:after>
                    <x-button sm x-on:click="alert('Opening the create tag modal')">New tag</x-button>
                </x-slot:after>
            </x-tag>
        </x-preview>
        <x-warning class="mt-4">
            On <x-block>x-select.styled</x-block> and <x-block>x-autocomplete</x-block> the slot of the same name
            <b>replaces</b> the empty message and appears only when nothing matches. Here it sits below the list at all
            times, because it exists to reach an action rather than to explain an empty result.
        </x-warning>
    </x-section>
</x-layout>
