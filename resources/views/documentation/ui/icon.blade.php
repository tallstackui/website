@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="icon">
    <x-slot:title>Icon</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Icon" />
    </x-slot>
    <x-section
        title="Basic Usage"
        description="An option to allow you to use the default icons, Heroicons."
    >
        <x-preview language="blade" :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5" />
                <x-icon name="clipboard" class="h-5 w-5" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Size Shorthands"
        new
        description="An option to use predefined sizes."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$sizes">
                <div class="inline-flex items-end space-x-3">
                    <x-icon name="users" xs />
                    <x-icon name="users" sm />
                    <x-icon name="users" md />
                    <x-icon name="users" lg />
                    <x-icon name="users" xl />
                    <x-icon name="users" 2xl />
                    <x-icon name="users" 3xl />
                    <x-icon name="users" 4xl />
                </div>
            </x-preview>
            <x-table
                class="mt-4"
                :headers="[
                    ['index' => 'shorthand', 'label' => 'Shorthand'],
                    ['index' => 'classes', 'label' => 'Classes'],
                    ['index' => 'size', 'label' => 'Size'],
                ]"
                :rows="[
                    ['shorthand' => 'xs', 'classes' => 'h-3 w-3', 'size' => '12px'],
                    ['shorthand' => 'sm', 'classes' => 'h-4 w-4', 'size' => '16px'],
                    ['shorthand' => 'md', 'classes' => 'h-5 w-5', 'size' => '20px'],
                    ['shorthand' => 'lg', 'classes' => 'h-6 w-6', 'size' => '24px'],
                    ['shorthand' => 'xl', 'classes' => 'h-7 w-7', 'size' => '28px'],
                    ['shorthand' => '2xl', 'classes' => 'h-8 w-8', 'size' => '32px'],
                    ['shorthand' => '3xl', 'classes' => 'h-10 w-10', 'size' => '40px'],
                    ['shorthand' => '4xl', 'classes' => 'h-12 w-12', 'size' => '48px'],
                    ['shorthand' => '5xl', 'classes' => 'h-14 w-14', 'size' => '56px'],
                    ['shorthand' => '6xl', 'classes' => 'h-16 w-16', 'size' => '64px'],
                    ['shorthand' => '7xl', 'classes' => 'h-20 w-20', 'size' => '80px'],
                ]"
            />
            <x-warning>
                The predefined sizes only work while you
                <b>does not</b>
                set
                <x-block>class</x-block>
                attribute to the icon.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Color Shorthands"
        new
        description="An option to use predefined colors."
    >
        <x-preview language="blade" :contents="$shorthandColors">
            <div class="inline-flex space-x-3">
                <x-icon name="users" 2xl red />
                <x-icon name="users" 2xl emerald />
                <x-icon name="users" 2xl blue />
                <x-icon name="users" 2xl secondary />
                <x-icon name="exclamation-circle" 2xl error blue />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Left & Right Slots">
        <x-preview language="blade" :contents="$leftRight">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5">
                    <x-slot:left>Users</x-slot>
                </x-icon>
                <x-icon name="cog" class="h-5 w-5">
                    <x-slot:right>Settings</x-slot>
                </x-icon>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Custom Icons" disable-copy>
        <div class="space-y-4">
            <p>
                By default, TallStackUI natively supports
                <x-block>heroicons</x-block>
                . This way, you can use any heroicons without having to install
                any dependencies. However, if you want to use a different icon
                kit - through the Blade UI Kit, you can follow these steps:
            </p>
            <ul class="list-inside list-decimal space-y-2">
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
                    <p>
                        Continue to read to understand how to use local custom
                        icons...
                    </p>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Avoid Component Conflict" disable-copy>
        <div class="space-y-4">
            <p>
                By following the example above and installing the
                <x-block>owenvoke/blade-fontawesome</x-block>
                package, Composer will also install the base for any Blade UI
                Kit icons, which is the
                <x-block>blade-ui-kit/blade-icons</x-block>
                package. This package in turn brings with it two Blade
                components:
                <x-block>Icon</x-block>
                and
                <x-block>Svg</x-block>
                . This way, when using the icons through the
                <x-block>icon</x-block>
                component you will be using the icon via Blade UI Kit, instead
                of using it via TallStackUI. To resolve this small conflict you
                can adopt one of these alternatives:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    <x-refer doc="component-prefix">
                        Set a component prefix name for the TallStackUI
                        components
                    </x-refer>
                    .
                </li>
                <li>
                    Change the default Blade UI Kit icon component name,
                    <a
                        href="https://github.com/blade-ui-kit/blade-icons?tab=readme-ov-file#default-component"
                        class="underline"
                        target="_blank"
                    >
                        click here.
                    </a>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Custom Icon Name Pattern" disable-copy>
        <div class="space-y-4">
            <p>
                To use the custom icons offered through Blade UI Kit all you
                have to do is use the icon replacing from
                <x-block>-</x-block>
                to
                <x-block>.</x-block>
                in the icon name, because internally TallStackUI will do the
                reverse substitution, from
                <x-block>.</x-block>
                to
                <x-block>-</x-block>
                . This is way TallStackUI interprets what custom icons are:
            </p>
            <x-code language="blade" :contents="$symbol" disable-copy />
        </div>
    </x-section>
    <x-section title="Variations" disable-copy>
        <div class="space-y-4">
            <p>
                Icon variations are applied depending on the format you use the
                icons in. For example, for
                <x-block>heroicons</x-block>
                the only variation available is outline, while for FontAwesome -
                via the
                <x-block>owenvoke/blade-fontawesome</x-block>
                package there will be other variations:
            </p>
            <x-code language="blade" :contents="$variations" disable-copy />
        </div>
    </x-section>
    <x-section title="Internal Icon Guide" disable-copy>
        <div class="space-y-4">
            <p>
                Since internally several icons are used in many components, you
                are free to customize these internal icons through an icon guide
                in the
                <x-refer doc="configuration">
                    TallStackUI configuration file.
                </x-refer>
                All you have to do is define the name of the icons to be used.
                This way, the custom icon will be used instead of the Heroicon.
            </p>
            <p>
                Inside the icons configuration - in the
                <x-block>config/tallstackui.php</x-block>
                file, you will find the
                <x-block>icons</x-block>
                key and inside it the
                <x-block>custom</x-block>
                key. All you have to do is define the name of the icon to be
                used, to replace the internal icon. You can refer to the list of
                <a
                    href="https://heroicons.com/"
                    class="underline"
                    target="_blank"
                >
                    available icons from Heroicons
                </a>
                for visual reference.
            </p>
            <x-code :contents="$guide" disable-copy />
        </div>
    </x-section>
    <x-section title="Custom Local Icons" disable-copy>
        <div class="space-y-4">
            <p>
                Beyond the Blade UI Kit packages, you can use your own local SVG
                files as icons. Save them as anonymous Blade components and map
                them in the configuration file.
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Set the
                    <x-block>TALLSTACKUI_ICON_TYPE</x-block>
                    environment variable to the path (relative to
                    <x-block>resources/views</x-block>
                    ) where your icon Blade files live:
                    <x-code :contents="$customEnv" />
                </li>
                <li>
                    Create the anonymous Blade component. The key requirement is
                    including
                    <x-block>&#123;&#123; $attributes &#125;&#125;</x-block>
                    on the SVG tag so TallStackUI can pass attributes through:
                    <x-code language="blade" :contents="$customBlade" />
                </li>
                <li>
                    Use the icon normally, or map the icon in the configuration
                    file's
                    <x-block>custom.guide</x-block>
                    section. The key is the internal icon name and the value is
                    the filename of your Blade component:
                    <x-code :contents="$customConfig" />
                </li>
            </ul>
            <x-warning>
                The Blade component must include &#123;&#123; $attributes
                &#125;&#125; in the SVG tag.
            </x-warning>
        </div>
    </x-section>
</x-layout>
