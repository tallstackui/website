@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Updates
    </x-slot:title>
    <x-slot:description>
        The TallStackUI update guide.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            As TallStackUI is an actively developed and supported library, it is expected that there will
            be many updates. On this page you will find some information about how to update TallStackUI
            and also the list of releases, with markings for possible breaking changes that require your attention.
        </p>
    </x-section>
    <x-section title="Updating" disable-copy>
        <p>
            Updates are delivered daily, in favor of identifying and correcting problems,
            or weekly, regarding new content. The main suggestion is to update TallStackUI
            periodically. If after an update you notice that something is wrong, check
            the version you are on about the release list to identify if there were any
            breaking changes.
        </p>
        <p class="mt-4">Updating all dependencies including TallStackUI:</p>
        <x-code language="shell" :contents="$updating" />
        <p class="mt-4">Updating only TallStackUI:</p>
        <x-code language="shell" :contents="$updatingTallstackui" />
    </x-section>
    <x-section title="Releases" disable-copy>
        <livewire:documentation.releases />
    </x-section>
</x-layout>
