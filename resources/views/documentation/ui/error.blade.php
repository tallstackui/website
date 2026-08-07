@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="errors">
    <x-slot:title>
        Errors
    </x-slot:title>
    <x-slot:description>
        Errors component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Errors" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.errors/>
        </x-preview>
    </x-section>
    <x-section title="Filtering Properties" description="An option to show validation errors for specific properties.">
        <x-preview language="blade" :contents="$specific">
            <livewire:documentation.ui.errors :only="['name']"/>
        </x-preview>
    </x-section>
    <x-section title="Title Customization">
        <x-preview language="blade" :contents="$customized">
            <livewire:documentation.ui.errors title="Ops! There are :count validation errors:"/>
        </x-preview>
    </x-section>
    <x-section title="Without Title" description="Hides the title and the divider line between the title and the errors.">
        <x-preview language="blade" :contents="$withoutTitle">
            <livewire:documentation.ui.errors without-title/>
        </x-preview>
    </x-section>
    <x-section title="Numeric List" description="Displays the errors as a numbered list instead of bullet points.">
        <x-preview language="blade" :contents="$listNumeric">
            <livewire:documentation.ui.errors list-numeric/>
        </x-preview>
    </x-section>
    <x-section title="Close Option" description="An option to allow the user to hide the errors">
        <x-preview language="blade" :contents="$close">
            <livewire:documentation.ui.errors close/>
        </x-preview>
        <x-warning class="mt-4">
            If the user closes the error component and a new validation error subsequently occurs, the component will be displayed again with the new errors.
        </x-warning>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$slot">
            <livewire:documentation.ui.errors show-slot />
        </x-preview>
    </x-section>
    <x-section title="Footer Alignment" description="Use the end attribute on the footer slot to automatically align its content to the right.">
        <x-preview language="blade" :contents="$footerEnd">
            <livewire:documentation.ui.errors footer-end />
        </x-preview>
    </x-section>
    <x-section title="Paddingless" new description="Removes the horizontal padding of the wrapper so the divider between the header and the body runs edge to edge. The title, list and footer recover their own inset, so only the line touches the extremity.">
        <x-preview language="blade" :contents="$paddingless">
            <livewire:documentation.ui.errors paddingless />
        </x-preview>
    </x-section>
    <x-section title="Shadowless & Bordered" new description="shadowless drops the shadow. bordered draws a border following the component color, through the bordered palette of ErrorsColors, so published color classes can override it like any other palette.">
        <x-preview language="blade" :contents="$shadowlessAndBordered">
            <div class="space-y-2">
                <livewire:documentation.ui.errors shadowless />
                <livewire:documentation.ui.errors bordered />
                <livewire:documentation.ui.errors shadowless bordered />
                <livewire:documentation.ui.errors color="amber" shadowless bordered />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <livewire:documentation.ui.errors />
                <livewire:documentation.ui.errors color="primary" />
                <livewire:documentation.ui.errors color="secondary" />
                <livewire:documentation.ui.errors color="slate" />
                <livewire:documentation.ui.errors color="gray" />
                <livewire:documentation.ui.errors color="zinc" />
                <livewire:documentation.ui.errors color="neutral" />
                <livewire:documentation.ui.errors color="stone" />
                <livewire:documentation.ui.errors color="orange" />
                <livewire:documentation.ui.errors color="amber" />
                <livewire:documentation.ui.errors color="yellow" />
                <livewire:documentation.ui.errors color="lime" />
                <livewire:documentation.ui.errors color="green" />
                <livewire:documentation.ui.errors color="emerald" />
                <livewire:documentation.ui.errors color="teal" />
                <livewire:documentation.ui.errors color="cyan" />
                <livewire:documentation.ui.errors color="sky" />
                <livewire:documentation.ui.errors color="blue" />
                <livewire:documentation.ui.errors color="indigo" />
                <livewire:documentation.ui.errors color="violet" />
                <livewire:documentation.ui.errors color="purple" />
                <livewire:documentation.ui.errors color="fuchsia" />
                <livewire:documentation.ui.errors color="pink" />
                <livewire:documentation.ui.errors color="rose" />
                <livewire:documentation.ui.errors color="mauve" />
                <livewire:documentation.ui.errors color="olive" />
                <livewire:documentation.ui.errors color="mist" />
                <livewire:documentation.ui.errors color="taupe" />
                <livewire:documentation.ui.errors color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.ui.errors events />
        </x-preview>
    </x-section>
</x-layout>
