<x-layout>
    <x-slot:title>
        Deep Personalization
    </x-slot:title>
    <x-slot:description>
        The deep personalization.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            The deep personalization is a way to personalize components more deeply by <u>overriding the component's original class.</u>
            This form of personalization requires more work and more technical knowledge. <u>We strongly suggest that you prefer
            soft personalization</u>, which does not require as much technical knowledge from you.
        </p>
    </x-section>
    <x-section title="Publishing Configuration File">
        <p class="text-justify">
            To start deep personalization you must publish the TallStackUi configuration file.
            <a class="underline" href="{{ route('documentation.configuration') }}">Click here to visit the documentation.</a>
        </p>
    </x-section>
    <x-section title="Overriding Component Class">
        <p class="text-justify">
            As deep personalization consists of having absolute control over the component, <u>the idea behind
            this form of personalization is to overwrite the original TallStackUi component</u>, which is why more
            technical knowledge is necessary. Let's look at an example:
        </p>
        <p class="mt-2">1. Create a Blade component:</p>
        <x-code language="shell" :contents="$command"/>
        <p>2. Edit the TallStackUi configuration file pointing the original component class to your component:</p>
        <x-code language="php" :contents="$override"/>
        <p>3. In your component, extends the original TallStackUi component:</p>
        <x-code language="php" :contents="$extends"/>
        <p>4. In your component, override the <x-block>personalization</x-block> method:</p>
        <x-code language="php" :contents="$customization"/>
        <p class="mt-2 text-justify">
            Every customizable component has a method called <x-block>personalization</x-block>, which is where the
            classes come from. <u>This method must return an array with the name of the customizable blocks and
            their respective values which must be the CSS classes to be applied.</u> To learn about customizable blocks,
            visit the documentation for the component you are customizing.
        </p>
    </x-section>
    <x-section title="Overriding Component Colors">
        <p class="text-justify">
            One of the great advantages of deep personalization is being able to touch the current color classes by
            replacing their content. This can be done in all components that have color definitions. Let's look at an example:
        </p>
        <p class="mt-2 text-justify">Assuming you want to change the button colors, then this will be the approach to take:</p>
        <x-code :contents="$overrideColors" :copy="false"/>
        <p class="text-justify mb-4">
            Note that in the example above the methods are defined with the term "Color" at the end. Also note that these
            methods must return an array containing an array of arrays, where the button type opens a new array containing
            the list of all possible class variations. This will cause TallStackUi to use these color classes instead of the
            default color classes. See below a list of components that have color personalizations and their method references
            and original content:
        </p>
        <x-table>
            <x-table.thead>
                <x-table.tr>
                    <x-table.th label="Component" />
                    <x-table.th label="Methods" />
                    <x-table.th label="Default Content" />
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Button\Button</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                        <x-badge color="pink" outline>iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/develop/src/View/Personalizations/Support/Colors/ButtonColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Button\Circle</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                        <x-badge color="pink" outline>iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/ButtonColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Alert</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                        <x-badge color="pink" outline>textColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/AlertColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Avatar</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/AvatarColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Badge</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                        <x-badge color="pink" outline>textColor</x-badge>
                        <x-badge color="pink" outline>iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/BadgeColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Errors</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                        <x-badge color="pink" outline>textColor</x-badge>
                        <x-badge color="pink" outline>borderColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/ErrorsColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Form\Radio</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/RadioColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Form\Checkbox</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/RadioColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Form\Toggle</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>backgroundColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/ToggleColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
                <x-table.tr>
                    <x-table.td>
                        <p class="font-mono">TallStackUi\View\Components\Tooltip</p>
                    </x-table.td>
                    <x-table.td>
                        <x-badge color="pink" outline>iconColor</x-badge>
                    </x-table.td>
                    <x-table.td>
                        <x-button.circle href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Personalizations/Support/Colors/TooltipColors.php"
                                         target="_blank"
                                         icon="arrow-up-right"
                                         color="pink"
                                         sm />
                    </x-table.td>
                </x-table.tr>
            </x-table.tbody>
        </x-table>
    </x-section>
    <x-section title="Publishing Blade Views">
        <p class="mb-4 text-justify">
            You can also edit the Blade files of the TallStackUi components. Use this command to publish the files:
        </p>
        <x-code language="shell" :contents="$views"/>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes">
        <p class="mb-4 text-justify">
            If you are personalizing your components using deep personalization, make sure you track your
            component classes so that TailwindCSS generates all the classes that come out of the files. Your
            <x-block>tailwindcss.config.js</x-block> needs to receive the following content:
        </p>
        <x-code language="js" :contents="$tailwindcss"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.personalization.soft') }}" text="Soft Personalization" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.personalization.color') }}" text="Colors" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
