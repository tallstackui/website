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
        which supports more than 100K icons in total, divided between repositories. Additionally, starting from version 3.x you can also
        use any local icon based on an anonymous Blade component. Continue to read to understand how to use and configure the icons of your project.
    </x-section>
    <x-section title="Basic Usage" description="An option to allow you to use the default icons, Heroicons.">
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
                    <p>Continue to read to understand how to use local custom icons...</p>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Avoid Component Conflict" disable-copy>
        <div class="space-y-4">
            <p>
                By following the example above and installing the <x-block>owenvoke/blade-fontawesome</x-block> package, Composer will also install the base for any
                Blade UI Kit icons, which is the <x-block>blade-ui-kit/blade-icons</x-block> package. This package in turn brings with it two Blade components: <x-block>Icon</x-block> and <x-block>Svg</x-block>.
                This way, when using the icons through the <x-block>icon</x-block> component you will be using the icon via Blade UI Kit, instead of using it via TallStackUI.
                To resolve this small conflict you can adopt one of these alternatives:
            </p>
            <ul class="list-decimal list-inside">
                <li>
                    <a href="{{ route('documentation', ['v3', 'component-prefix']) }}" wire:navigate class="underline">Set a component prefix name for the TallStackUI components</a>.
                </li>
                <li>
                    Change the default Blade UI Kit icon component name, <a href="https://github.com/blade-ui-kit/blade-icons?tab=readme-ov-file#default-component" class="underline" target="_blank">click here.</a>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Custom Icon Name Pattern" disable-copy>
        <div class="space-y-4">
            <p>
                To use the custom icons offered through Blade UI Kit all you have to do is use the icon replacing from <x-block>-</x-block> to <x-block>.</x-block>
                in the icon name, because internally TallStackUI will do the reverse substitution, from <x-block>.</x-block> to <x-block>-</x-block> .
                This is way TallStackUI interprets what custom icons are:
            </p>
            <x-code language="blade" :contents="$symbol" disable-copy />
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
                icons through an icon guide in the <a href="{{ route('documentation', ['v3', 'configuration']) }}" class="underline" wire:navigate>TallStackUI configuration file.</a>
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
    <x-section title="Custom Local Icons" disable-copy>
        <div class="space-y-4">
            <p>
                Beyond the Blade UI Kit packages, you can use your own local SVG files as icons.
                Save them as anonymous Blade components and map them in the configuration file.
            </p>
            <ul class="list-decimal list-inside space-y-2">
                <li>
                    Set the <x-block>TALLSTACKUI_ICON_TYPE</x-block> environment variable to the path
                    (relative to <x-block>resources/views</x-block>) where your icon Blade files live:
                    <x-code :contents="$customEnv" />
                </li>
                <li>
                    Create the anonymous Blade component. The key requirement is including <x-block>&#123;&#123; $attributes &#125;&#125;</x-block>
                    on the SVG tag so TallStackUI can pass attributes through:
                    <x-code language="blade" :contents="$customBlade" />
                </li>
                <li>
                    Use the icon normally, or map the icon in the configuration file's <x-block>custom.guide</x-block> section. The key is the internal icon
                    name and the value is the filename of your Blade component:
                    <x-code :contents="$customConfig" />
                </li>
            </ul>
            <x-warning>
                The Blade component must include <x-block pink>&#123;&#123; $attributes &#125;&#125;</x-block> in the SVG tag,
                otherwise component attributes like classes will not be applied.
            </x-warning>
        </div>
    </x-section>
</x-layout>
