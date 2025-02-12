<ul role="list" class="space-y-9">
    <li>
        <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Introduction</h2>
        <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'getting-started'])" text="Getting Started" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'installation'])" text="Installation" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'troubleshooting'])" text="Troubleshooting" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'updates'])" text="Updates" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'faq'])" text="F.A.Q" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'summer-release'])" text="Summer Release" />
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
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'checkbox'])" text="Checkbox" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'color'])" text="Color" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'date'])" text="Date" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'input'])" text="Input" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'number'])" text="Number" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'password'])" text="Password" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'pin'])" text="Pin" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'radio'])" text="Radio" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'range'])" text="Range" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'tag'])" text="Tag" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'time'])" text="Time" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'textarea'])" text="Textarea" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'toggle'])" text="Toggle" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'select'])" text="Select" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'form', 'upload'])" text="Upload" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">UI</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'alert'])" text="Alert" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'avatar'])" text="Avatar" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'badge'])" text="Badge" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'banner'])" text="Banner" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'boolean'])" text="Boolean" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'button'])" text="Button" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'card'])" text="Card" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'clipboard'])" text="Clipboard" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'dropdown'])" text="Dropdown" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'icon'])" text="Icon" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'modal'])" text="Modal" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'link'])" text="Link" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'loading'])" text="Loading" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'progress'])" text="Progress" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'reaction'])" text="Reaction" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'rating'])" text="Rating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'slide'])" text="Slide" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'stats'])" text="Stats" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'step'])" text="Step" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'tab'])" text="Tab" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'table'])" text="Table" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'theme-switch'])" text="Theme Switch" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'ui', 'tooltip'])" text="Tooltip" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Interactions</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'interactions', 'dialog'])" text="Dialog" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'interactions', 'toast'])" text="Toast" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Internals</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'internal', 'error'])" text="Error" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'internal', 'floating'])" text="Floating" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'internal', 'hint'])" text="Hint" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'internal', 'label'])" text="Label" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'internal', 'wrapper'])" text="Wrapper" />
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Digging Deeper</h2>
        <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'configuration'])" text="Configurations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'command'])" text="Commands" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'translation'])" text="Translations" />
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'without-livewire'])" text="Without Livewire" />
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Personalization</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'personalization', 'concept'])" text="Concept" />
                    </li>
                </ul>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'personalization', 'soft'])" text="Soft Personalization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'personalization', 'deep'])" text="Deep Personalization" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'personalization', 'color'])" text="Colors" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Helpers</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'helpers', 'dark-theme'])" text="Dark Theme" />
                    </li>
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'helpers', 'debug-mode'])" text="Debug Mode" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Integrations</h2>
                <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                    <li class="relative ml-4">
                        <x-layout.navigation.link :href="route('documentation', ['v1', 'integrations', 'alpine'])" text="AlpineJS" />
                    </li>
                </ul>
            </li>
            <li class="relative ml-4">
                <x-layout.navigation.link :href="route('documentation', ['v1', 'contribution'])" text="Contribution Guide" />
            </li>
        </ul>
    </li>
</ul>
