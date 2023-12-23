<x-layout>
    <x-slot:title>
        Deep Personalization
    </x-slot:title>
    <x-slot:description>
        The deep personalization.
    </x-slot:description>
    <x-section title="Concept" :copy="false">
        <p>
            The deep personalization is a way to personalize components more deeply by <u>overriding the component's original class.</u>
            This form of personalization requires more work and more technical knowledge. <u>We strongly suggest that you prefer
                soft personalization</u>, which does not require as much technical knowledge from you.
        </p>
    </x-section>
    <x-section title="Publishing Configuration File" :copy="false">
        <p>
            <a class="underline" href="{{ route('documentation.configuration') }}">To start deep personalization you must publish the TallStackUI configuration file.</a>
        </p>
    </x-section>
    <x-section title="Override Component Class" :copy="false">
        <p>
            As deep personalization consists of having absolute control over the component, <u>the idea behind
            this form of personalization is to overwrite the original TallStackUI component</u>, which is why more
            technical knowledge is necessary. Let's take look at an example:
        </p>
        <p class="mt-2">1. Create a Blade component:</p>
        <x-code language="shell" :contents="$command"/>
        <p>2. Edit the TallStackUI configuration file pointing the original component class to your component:</p>
        <x-code language="php" :contents="$override" :copy="false"/>
        <p>3. In your component, extends the original TallStackUI component:</p>
        <x-code language="php" :contents="$extends" :copy="false"/>
        <p>4. In your component, override the <x-block>personalization</x-block> method:</p>
        <x-code language="php" :contents="$customization" :copy="false"/>
        <p class="my-2">
            Every customizable component has a method called <x-block>personalization</x-block>, which is where the
            classes come from. <u>This method must return an array with the name of the personalizable blocks and
            their respective values which must be the CSS classes to be applied.</u> To learn about customizable blocks,
            visit the documentation for the component you are personalizing.
        </p>
        <x-warning>
            Even if you prefer to use deep personalization,
            <a href="{{ route('documentation.personalization.soft') }}" class="underline">soft personalization</a> can still be applied to components.
        </x-warning>
    </x-section>
    <x-section title="Override Component Colors" :copy="false">
        <p>
            One of the great advantages of deep personalization is being able to touch the current color classes by
            replacing their content. This can be done in all components that have color definitions. Let's take look at an example:
        </p>
        <p class="mt-2">Assuming you want to change the button colors, then this will be the approach to take:</p>
        <x-code :contents="$colors" :copy="false"/>
        <p class="my-4">
            Note that in the example above the methods are defined with the term <x-block>Color</x-block> at the end.
            Also note that these methods must return an array containing an array of arrays, where the button type opens a
            new array containing the list of the colors you want to personalize. This will cause TallStackUI to use these
            color classes instead of the default color classes. See below a list of components that have color personalization
            and their respective information:
        </p>
        <x-table>
            <x-table.thead>
                <x-table.tr>
                    <x-table.th label="Component" />
                    <x-table.th label="Methods" />
                    <x-table.th label="Styles" />
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Alert</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">textColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">solid</x-badge>
                        <x-badge color="pink">outline</x-badge>
                        <x-badge color="pink">light</x-badge>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Avatar</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Badge</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">textColor</x-badge>
                        <x-badge color="pink">iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">solid</x-badge>
                        <x-badge color="pink">outline</x-badge>
                        <x-badge color="pink">light</x-badge>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Banner</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">textColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">solid</x-badge>
                        <x-badge color="pink">light</x-badge>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Button\Button</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">solid</x-badge>
                        <x-badge color="pink">outline</x-badge>
                        <x-badge color="pink">light</x-badge>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Button\Circle</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">solid</x-badge>
                        <x-badge color="pink">outline</x-badge>
                        <x-badge color="pink">light</x-badge>
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Dialog</p>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">
                            cancelColor
                        </x-badge>
                        <x-tooltip text="cancelColor: should returns a color as string (primary, red, blue, yellow, etc.)"
                                   color="pink"
                                   outline />
                        <x-badge color="pink">
                            confirmColor
                        </x-badge>
                        <x-tooltip text="confirmColor: returns an array where key is the types: success, error, info, warning, and question. The value of each key is the TailwindCSS classes."
                                   color="pink"
                                   outline />
                        <x-badge color="pink">
                            iconColor
                        </x-badge>
                        <x-tooltip text="iconColor: returns an array with two keys: background e icon, and inside of each key an array with the types: success, error, info, warning, and question. The value of each key is the TailwindCSS classes."
                                   color="pink"
                                   outline />
                    </x-table.td>
                    <x-table.td>
                        N/A
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Errors</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                        <x-badge color="pink">textColor</x-badge>
                        <x-badge color="pink">borderColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Form\Radio</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Form\Checkbox</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Form\Toggle</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Form\Range</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">thumbColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Link</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">textColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Toast</p>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">
                            iconColor
                        </x-badge>
                        <x-tooltip text="iconColor: returns an array where key is the types: success, error, info, warning, and question. The value of each key is the TailwindCSS classes."
                                   color="pink"
                                   outline />
                    </x-table.td>
                    <x-table.td>
                        N/A
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">Tooltip</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink">backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td class="flex items-center gap-x-1">
                        <x-badge color="pink">No styles.</x-badge>
                        <x-tooltip text="You should return only an array with the color name as the key, and the classes as the value."
                                   color="pink"
                                   outline />
                    </x-table.td>
                </x-table.tr>
            </x-table.tbody>
        </x-table>
        <p class="my-4">
            <u>You could define only what you want to personalize.</u> For example:
        </p>
        <x-code :contents="$colorsPersonalizationExample" :copy="false"/>
        <p class="my-4">
            In this case the personalization will only be applied for buttons <x-block>solid</x-block> with the color <x-block>primary</x-block>.
        </p>
    </x-section>
    <x-section title="Create Custom Colors" :copy="false">
        <p>
            Since the name of colors used is not validated in favor of controlling
            which colors you can use in TallStackUI, you can easily create custom
            colors using deep personalization. Here is a complete example of how to do this:
        </p>
        <p class="mt-2">1. Create the color in the TailwindCSS configuration file:</p>
        <x-code language="js" :contents="$prepareTailwindForCustomColor"/>
        <p>2. Create new indexes of your custom color name:</p>
        <x-code language="php" :contents="$applyingCustomColorsUsingDeepPersonalization" :copy="false"/>
        <p>3. Use the component with the name of your custom color:</p>
        <x-code language="blade" :contents="$usingComponentWithCustomColors" :copy="false"/>
        <x-warning class="mt-4">
            Make sure to build your assets to see your new custom color.
        </x-warning>
    </x-section>
    <x-section title="Publish Blade Files" :copy="false">
        <p class="mb-4">
            You can edit the Blade files of the TallStackUI components. Use this command to publish the files:
        </p>
        <x-code language="shell" :contents="$views"/>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" :copy="false">
        <p class="mb-4">
            If you are personalizing your components using deep personalization, make sure you track your
            component classes so that TailwindCSS generates all the classes that come out of the files. Your
            <x-block>tailwind.config.js</x-block> needs to receive the following content:
        </p>
        <x-code language="js" :contents="$tailwindcss" :copy="false"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.personalization.soft')" text="Soft Personalization" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.personalization.color')" text="Colors" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
