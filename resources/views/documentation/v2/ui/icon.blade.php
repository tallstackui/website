@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Icon
    </x-slot:title>
    <x-section title="Concept" disable-copy>
        In the beginning, TallStackUI only supported Heroicons. Although they are good icons, they have one main problem: there are few, less than 350.
        As a result, TallStackUI was adopted - still in version 1.x, to support other libraries, and it worked. However, this created a problem:
        maintaining more repositories and updating the icons periodically. <b>From version 2.x onwards we dropped support for
        custom icons maintained by TallStackUI in favor of using custom icons through the community repositories of the <a href="https://blade-ui-kit.com/" class="underline" target="_blank">Blade UI Kit project</a></b>,
        which supports more than 100K icons in total, divided between repositories.
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5"/>
                <x-icon name="clipboard" class="h-5 w-5"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Left & Right Slots">
        <x-preview language="blade" :contents="$leftRight">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5">
                    <x-slot:left>
                        Users
                    </x-slot:left>
                </x-icon>
                <x-icon name="cog" class="h-5 w-5">
                    <x-slot:right>
                        Settings
                    </x-slot:right>
                </x-icon>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Custom Icons" disable-copy>
        <div class="space-y-4">
            <p>
                By default, TallStackUI natively supports <x-block>heroicons</x-block>. This way, you can use any heroicons without having to
                install any dependencies. However, if you want to use a different icon kit - through the Blade UI Kit, you can follow these steps:
            </p>
            <ul class="list-decimal list-inside">
                <li>
                    Install the icon package you want to use, for example:
                    <x-code language="shell" :contents="$installation" />
                </li>
                <li>
                    Set the icon library in the environment variable:
                    <x-code :contents="$env" />
                </li>
                <li>
                    Perform a general cleanup in Laravel:
                    <x-code language="shell" :contents="$clean" />
                </li>
            </ul>
            <p>
                After that, you can use any icon from the chosen pack:
            </p>
            <x-code language="blade" :contents="$owenvoke" />
        </div>
    </x-section>
    <x-section title="Variations" disable-copy>
        <div class="space-y-4">
            <p>
                Icon variations are applied depending on the format you use the icons in. For example,
                for <x-block>heroicons</x-block> the only variation available is outline, while for FontAwesome
                - via the <x-block>owenvoke/blade-fontawesome</x-block> package there will be other variations:
            </p>
            <x-code language="blade" :contents="$variations" disable-copy />
        </div>
    </x-section>
    <x-section title="Internal Icon Guide" disable-copy>
        <div class="space-y-4">
            <p>
                Since internally several icons are used in many components, you are free to customize these internal
                icons through an icon guide in the <a href="{{ route('documentation', ['v2', 'configuration']) }}" class="underline">TallStackUI configuration file.</a>
                All you have to do is define the name of the icons to be used. This way, the custom icon will be used instead of the Heroicon.
            </p>
            <p>
                Inside the icons configuration - in the <x-block>config/tallstackui.php</x-block> file, you
                will find the <x-block>icons</x-block> key and inside it the <x-block>custom</x-block> key.
                All you have to do is define the name of the icon to be used, to replace the internal icon.
                You can refer to the list of <a href="https://heroicons.com/" class="underline" target="_blank">available icons from Heroicons</a> for visual reference.
            </p>
            <x-code :contents="$guide" disable-copy />
        </div>
    </x-section>
</x-layout>
