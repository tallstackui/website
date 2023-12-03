<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <div class="mb-4 pr-4 sm:flex-1 sm:pr-0">
        <div class="bg-white dark:bg-slate-900 relative">
            <button type="button"
                    x-on:click="document.querySelector('#docsearch').firstChild.click()"
                    class="hidden w-full lg:flex items-center text-sm leading-6 text-slate-400 rounded-md ring-1 ring-slate-300 hover:bg-slate-100 dark:ring-slate-800 shadow-sm py-1.5 pl-2 pr-3 dark:bg-slate-800 dark:highlight-white/5 dark:hover:bg-slate-700">
                <x-icon name="magnifying-glass" class="w-5 h-5 mr-4" />Quick search...
                <div x-data="{ isWindows: /win/i.test(navigator.userAgent), isMac: /mac/i.test(navigator.userAgent) }" class="ml-auto pl-3 text-xs font-semibold">
                    <div x-show="isWindows">Ctrl K</div>
                    <div x-show="isMac" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-command" viewBox="0 0 16 16">
                            <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"/>
                            <span class="ml-2">K</span>
                        </svg>
                    </div>
                </div>
            </button>
        </div>
    </div>
    <ul role="list" class="space-y-9">
        <li>
            <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Introduction</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="relative ml-4">
                    <x-layout.navigation.link :href="route('documentation.get-started')" text="Get Started" />
                </li>
                <li class="relative ml-4">
                    <x-layout.navigation.link :href="route('documentation.installation')" text="Installation" />
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
                            <x-layout.navigation.link :href="route('documentation.form.input')" text="Input" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.password')" text="Password" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.textarea')" text="Textarea" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.number')" text="Number" new />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.checkbox')" text="Checkbox" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.radio')" text="Radio" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.form.toggle')" text="Toggle" />
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">UI</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.alert')" text="Alert" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.avatar')" text="Alert" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.badge')" text="Badge" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.banner')" text="Banner" new />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.button')" text="Button" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.card')" text="Card" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.dropdown')" text="Dropdown" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.error')" text="Error" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.icon')" text="Icon" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.modal')" text="Modal" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.loading')" text="Loading" new />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.select')" text="Select" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.slide')" text="Slide" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.tab')" text="Tab" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.ui.tooltip')" text="Tooltip" />
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Interactions</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.interaction.dialog')" text="Dialog" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.interaction.toast')" text="Toast" />
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Internals</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.internal.error')" text="Error" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.internal.hint')" text="Hint" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.internal.label')" text="Label" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.internal.wrapper')" text="Wrapper" />
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Diggin Deeper</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="relative ml-4">
                    <x-layout.navigation.link :href="route('documentation.configuration')" text="Configurations" />
                </li>
                <li class="relative ml-4">
                    <x-layout.navigation.link :href="route('documentation.translation')" text="Translations" />
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Personalization</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.personalization.concept')" text="Concept" />
                        </li>
                    </ul>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.personalization.soft')" text="Soft Personalization" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.personalization.deep')" text="Deep Personalization" />
                        </li>
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.personalization.color')" text="Colors" />
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Helpers</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <x-layout.navigation.link :href="route('documentation.dark-theme')" text="Colors" />
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <x-layout.navigation.link :href="route('documentation.contribution')" text="Colors" />
                </li>
            </ul>
        </li>
    </ul>
</nav>
