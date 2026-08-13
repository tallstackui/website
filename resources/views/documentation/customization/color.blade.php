@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Colors</x-slot>
    <x-slot:description>The colors customization.</x-slot>
    <x-section title="Concept" disable-copy>
        <p>
            All TallStackUI components are based on three custom colors:
            primary, secondary, and dark. Speaking mainly of the primary color,
            it is the color that defines and guides the color style of your
            application. Apart from that, all other colors are the original
            <a
                class="underline"
                href="https://tailwindcss.com/docs/customizing-colors"
                target="_blank"
            >
                TailwindCSS colors.
            </a>
            You can customize the primary, secondary, and dark colors as per
            your preference following the TailwindCSS custom color concept.
        </p>
    </x-section>
    <x-section title="The 4.x Palette" new disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>secondary</x-block>
                used to be three things at once: the light-mode neutral scale
                the components' own chrome was built on, the palette behind
                <x-block>color="secondary"</x-block>
                , and the color pitched to applications as the second brand
                color. Overriding it therefore repainted text, borders and
                dividers across the library. Two changes untangle it.
            </p>
            <ul class="list-inside list-disc space-y-2">
                <li>
                    <x-block>--color-secondary-*</x-block>
                    is now Tailwind
                    <b>Violet</b>
                    , a real accent sitting next to the Indigo primary.
                    <x-block>color="secondary"</x-block>
                    renders violet exactly the way
                    <x-block>color="red"</x-block>
                    renders red.
                </li>
                <li>
                    Component chrome no longer references
                    <x-block>secondary-*</x-block>
                    at all. The ~30 base usages moved to the equivalent
                    <x-block>gray-*</x-block>
                    shade, so light mode now has a single neutral system,
                    mirroring
                    <x-block>dark-*</x-block>
                    in dark mode.
                </li>
            </ul>
            <p>
                <x-block>--color-dark-*</x-block>
                was an exact copy of Slate, blue tint included, so every dark
                surface leaned cold. The scale is now pure neutral, declared in
                <x-block>oklch()</x-block>
                and anchored near black:
            </p>
            <x-code language="css" :contents="$darkPalette" />
            <x-warning warning title="What this means for an upgrade">
                Applications that override these variables in their own
                <x-block>@@theme</x-block>
                keep winning and see no difference. On the stock palette,
                <x-block>color="secondary"</x-block>
                renders violet instead of slate-gray &mdash; switch those calls
                to
                <x-block>color="slate"</x-block>
                or
                <x-block>color="gray"</x-block>
                , which are unchanged. A page background chosen to match the old
                Slate look now sits better as
                <x-block>dark:bg-dark-900</x-block>
                .
            </x-warning>
        </div>
    </x-section>
    <x-section title="Change Colors Definitions" disable-copy>
        <div class="space-y-4">
            <p>
                If you want to customize custom colors like primary, secondary
                and dark, just follow the normal TailwindCSS color customization
                concept:
            </p>
            <x-code language="css" :contents="$tailwindcssFile" disable-copy />
            <p>
                Remember to rebuild your assets after making any adjustments to
                TailwindCSS colors:
            </p>
            <x-code language="shell" :contents="$build" />
        </div>
    </x-section>
    <x-section title="Create or Manipulate Colors" disable-copy>
        <div class="space-y-4">
            <p>
                Although the components use the standard TailwindCSS colors, if
                you wonder if it is possible to manipulate the colors or even
                create completely custom colors, in addition to those offered by
                default and mentioned above: primary, secondary and dark, the
                answer is yes. The process of manipulating colors is extremely
                easy through the definition of object classes used to map the
                color manipulation of TallStackUI components.
            </p>
            <p>
                To create or manipulate the colors, you need to execute the
                following command to select the component:
            </p>
            <x-code language="shell" :contents="$command" />
            <p>
                After selecting the component from the list of available
                options, a PHP object class will be created in the
                <x-block>App\View\Components\TallStackUi\Colors</x-block>
                namespace. At first, don't worry about this namespace, you are
                free to change this namespace to any other namespace you want.
            </p>
            <p>
                Let's assume that you have selected the
                <x-block>Alert</x-block>
                component, then the object class will be like this:
            </p>
            <x-code :contents="$colorClass" disable-copy />
            <p>Here is some important caveats:</p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    There is two methods inside the class used in this example,
                    <x-block>backgroundColors</x-block>
                    and
                    <x-block>textColors</x-block>
                    , which means that these methods are responsible for
                    defining the background and text colors of the component,
                    respectively. Each component has its own color methods, so
                    you can manipulate the colors of each component
                    individually.
                </li>
                <li>
                    You may have noticed that there is a
                    <x-block>\Illuminate\View\Component $component</x-block>
                    property added as a parameter to each method. This property
                    is actually the component instance so you can interact with
                    it if you need to.
                </li>
                <li>
                    Notice that all colors have their values as
                    <x-block>null</x-block>
                    , which means that the default value - internal, will be
                    applied when the value is null, blank or the color index
                    does not exist in the array. So only if the color index
                    exists and has a valid value will it be applied.
                </li>
                <li>
                    It's important to mention that if one of the methods is
                    removed, the internal definitions will be applied, the same
                    happens if you change - accidentally or not, the visibility
                    of the method, if it exists, it will be used, regardless of
                    whether it is public, private or protected.
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Change the Default Namespace" disable-copy>
        <p>
            <x-refer doc="configuration">
                When you publish the configuration file
            </x-refer>
            , you can change the default namespace for the color classes. If you
            prefer, you can control this through an environment variable:
        </p>
        <x-code :contents="$namespaceEnvVariable" />
    </x-section>
    <x-section title="Create Custom Color" disable-copy>
        <div class="space-y-4">
            <p>
                Given all the above explanations, creating a new and totally
                personal color is extremely easy:
            </p>
            <x-code :contents="$createCustomColor" disable-copy />
            <p>
                Now all you need to do is use the new color in the component
                class:
            </p>
            <x-code
                language="blade"
                :contents="$useCustomColor"
                disable-copy
            />
            <p>
                Although this example used
                <x-block>red</x-block>
                , you can use completely custom colors as you build in
                TailwindCSS:
            </p>
            <x-code language="css" :contents="$newCustomColor" disable-copy />
            <p>
                After that, just apply the new color name,
                <x-block>malibu</x-block>
                in this example, instead of
                <x-block>red</x-block>
                :
            </p>
            <x-code
                :contents="$createCustomColorUsingNewTailwindColor"
                disable-copy
            />
            <p>
                And then use the new
                <x-block>malibu</x-block>
                color in the component usage:
            </p>
            <x-code
                language="blade"
                :contents="$useNewCustomColor"
                disable-copy
            />
            <x-warning>
                Remember to rebuild your assets after making any adjustments to
                TailwindCSS colors.
            </x-warning>
        </div>
    </x-section>
</x-layout>
