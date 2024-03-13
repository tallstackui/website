@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Toast
    </x-slot:title>
    <x-slot:description>
        Toast component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="toast" />
    </x-slot:personalization>
    <x-section title="Configuration" disable-copy>
        1. Insert the Toast component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Toast from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.toast.examples/>
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <x-preview :contents="$confirmation">
            <livewire:documentation.interactions.toast.confirmation/>
        </x-preview>
        <div class="mt-4 space-y-4">
            <p>
                <u>As of version 1.10.0</u>, the Toast has been improved to allow more flexibility in the format of use:
            </p>
            <x-code :contents="$confirmationExplanation" disable-copy />
        </div>
    </x-section>
    <x-section title="Time Control" description="Increase the time to show the toast.">
        <x-preview :contents="$time">
            <livewire:documentation.interactions.toast.timeout/>
        </x-preview>
        <p class="mt-2">
            <u>Starting from version 1.14.2</u>, you can set a default timeout through <a href="{{ route('documentation.configuration') }}" class="underline">configuration file:</a>
        </p>
        <x-code :contents="$defaultTime" disable-copy />
    </x-section>
    <x-section title="Expandable" description="An option to show minimized description texts.">
        <x-preview :contents="$expandable">
            <livewire:documentation.interactions.toast.expandable/>
        </x-preview>
        <p class="mt-2">
            You can configure Toast to be extensible by default in <a href="{{ route('documentation.configuration') }}" class="underline">the configuration file.</a> When you
            do that, you can optionally ignore the expandable for specific Toast:
        </p>
        <x-code :contents="$ignoringExpandable" disable-copy />
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.interactions.toast.events/>
        </x-preview>
        <x-warning class="mt-4">
            We recommend that you use listeners in one place, whether in the base layout or once per component.
        </x-warning>
    </x-section>
    <x-section title="JavaScript API" description="JavaScript API to interact with Toast.">
        <x-code language="blade" :contents="$javascript" disable-copy />
    </x-section>
    <x-section title="Color Personalization">
        <p>
            <x-link :href="route('documentation.personalization.deep')"
                    fragment="override-component-colors"
                    :color="null"
                    underline>
                Starting from version 1.5.3 you can customize Toast colors through deep personalization.
            </x-link>
        </p>
    </x-section>
    <x-available-configuration />
</x-layout>
