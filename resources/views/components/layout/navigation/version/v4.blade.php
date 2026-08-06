<ul role="list" class="space-y-9">
    <li>
        <h2 class="font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Getting Started</h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'installation'])" text="Installation" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'starter-kit'])" text="Starter Kit" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'documentation'])" text="Documentation" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'component-prefix'])" text="Component Prefix" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'alpine'])" text="AlpineJS Requirement" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'upgrade-guide'])" text="Upgrade Guide" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'ai'])" text="AI" />
            </li>
        </ul>
    </li>
    <li>
        <h2 class="font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Components</h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Form</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'autocomplete'])" text="AutoComplete" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'checkbox'])" text="Checkbox" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'color'])" text="Color" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'currency'])" text="Currency" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'date'])" text="Date" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'input'])" text="Input" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'input-select'])" text="Input Select" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'number'])" text="Number" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'password'])" text="Password" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'pin'])" text="Pin" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'radio'])" text="Radio" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'range'])" text="Range" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'tag'])" text="Tag" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'time'])" text="Time" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'textarea'])" text="Textarea" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'toggle'])" text="Toggle" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'select'])" text="Select" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'form', 'upload'])" text="Upload" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">UI</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'accordion'])" text="Accordion" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'alert'])" text="Alert" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'avatar'])" text="Avatar" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'back-to-top'])" text="Back to Top" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'badge'])" text="Badge" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'banner'])" text="Banner" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'boolean'])" text="Boolean" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'breadcrumbs'])" text="Breadcrumb" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'button'])" text="Button" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'calendar'])" text="Calendar" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'card'])" text="Card" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'carousel'])" text="Carousel" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'clipboard'])" text="Clipboard" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'command-palette'])" text="Command Palette" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'dial'])" text="Dial" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'dropdown'])" text="Dropdown" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'environment'])" text="Environment" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'icon'])" text="Icon" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'modal'])" text="Modal" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'layout'])" text="Layout" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'link'])" text="Link" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'list'])" text="List" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'loading'])" text="Loading" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'kbd'])" text="Kbd" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'key-value'])" text="KeyValue" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'progress'])" text="Progress" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'reaction'])" text="Reaction" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'rating'])" text="Rating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'signature'])" text="Signature" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'slide'])" text="Slide" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'stats'])" text="Stats" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'step'])" text="Step" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'tab'])" text="Tab" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'table'])" text="Table" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'theme-switch'])" text="Theme Switch" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'timeline'])" text="Timeline" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'ui', 'tooltip'])" text="Tooltip" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Interactions</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'interactions', 'dialog'])" text="Dialog" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'interactions', 'toast'])" text="Toast" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Internals</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'internal', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'internal', 'floating'])" text="Floating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'internal', 'hint'])" text="Hint" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'internal', 'label'])" text="Label" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'internal', 'wrapper'])" text="Wrapper" />
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Digging Deeper</h2>
        <ul role="list" class="mt-3 space-y-1">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'configuration'])" text="Configurations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'command'])" text="Commands" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'translation'])" text="Translations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'without-livewire'])" text="Without Livewire" />
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Customization</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'customization', 'concept'])" text="Concept" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'customization', 'soft'])" text="Soft Customization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'customization', 'deep'])" text="Deep Customization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'customization', 'color'])" text="Colors" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'customization', 'globals'])" text="Globals" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Helpers</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'helpers', 'env-bar'])" text="EnvBar" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'helpers', 'dark-theme'])" text="Dark Theme" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'helpers', 'debug-mode'])" text="Debug Mode" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="mt-6 font-mono text-[0.65rem] font-semibold uppercase tracking-[0.16em] text-gray-400 dark:text-dark-500">Integrations</h2>
                <ul role="list" class="mt-3 space-y-1">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v4', 'integrations', 'alpine'])" text="AlpineJS" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4 mt-5">
                <x-layout.navigation.link :href="route('documentation', ['v4', 'contribution'])" text="Contribution Guide" />
            </li>
        </ul>
    </li>
</ul>
