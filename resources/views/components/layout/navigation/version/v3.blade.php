<ul role="list" class="space-y-9">
    <li>
        <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Getting Started</h2>
        <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'installation'])" text="Installation" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'starter-kit'])" text="Starter Kit" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'documentation'])" text="Documentation" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'component-prefix'])" text="Component Prefix" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'alpine'])" text="AlpineJS Requirement" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'upgrade-guide'])" text="Upgrade Guide" />
            </li>
        </ul>
    </li>
    <li>
        <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Components</h2>
        <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Form</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'checkbox'])" text="Checkbox" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'color'])" text="Color" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'currency'])" text="Currency" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'date'])" text="Date" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'input'])" text="Input" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'number'])" text="Number" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'password'])" text="Password" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'pin'])" text="Pin" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'radio'])" text="Radio" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'range'])" text="Range" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'tag'])" text="Tag" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'time'])" text="Time" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'textarea'])" text="Textarea" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'toggle'])" text="Toggle" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'select'])" text="Select" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'form', 'upload'])" text="Upload" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">UI</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'alert'])" text="Alert" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'avatar'])" text="Avatar" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'badge'])" text="Badge" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'banner'])" text="Banner" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'boolean'])" text="Boolean" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'breadcrumbs'])" text="Breadcrumb" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'button'])" text="Button" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'card'])" text="Card" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'carousel'])" text="Carousel" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'clipboard'])" text="Clipboard" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'dropdown'])" text="Dropdown" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'environment'])" text="Environment" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'icon'])" text="Icon" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'modal'])" text="Modal" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'layout'])" text="Layout" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'link'])" text="Link" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'loading'])" text="Loading" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'kbd'])" text="Kbd" new />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'key-value'])" text="KeyValue" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'progress'])" text="Progress" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'reaction'])" text="Reaction" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'rating'])" text="Rating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'signature'])" text="Signature" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'slide'])" text="Slide" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'stats'])" text="Stats" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'step'])" text="Step" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'tab'])" text="Tab" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'table'])" text="Table" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'theme-switch'])" text="Theme Switch" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'ui', 'tooltip'])" text="Tooltip" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Interactions</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'interactions', 'dialog'])" text="Dialog" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'interactions', 'toast'])" text="Toast" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Internals</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'internal', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'internal', 'floating'])" text="Floating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'internal', 'hint'])" text="Hint" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'internal', 'label'])" text="Label" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'internal', 'wrapper'])" text="Wrapper" />
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Digging Deeper</h2>
        <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'configuration'])" text="Configurations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'command'])" text="Commands" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'translation'])" text="Translations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'without-livewire'])" text="Without Livewire" />
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Customization</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'customization', 'concept'])" text="Concept" />
                    </li>
                </ul>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'customization', 'soft'])" text="Soft Customization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'customization', 'deep'])" text="Deep Customization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'customization', 'color'])" text="Colors" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Helpers</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'helpers', 'env-bar'])" text="EnvBar" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'helpers', 'dark-theme'])" text="Dark Theme" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'helpers', 'debug-mode'])" text="Debug Mode" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Integrations</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v3', 'integrations', 'alpine'])" text="AlpineJS" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v3', 'contribution'])" text="Contribution Guide" />
            </li>
        </ul>
    </li>
</ul>
