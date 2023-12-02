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
                    <a href="{{ route('documentation.get-started') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.get-started')])>
                        Get Started
                    </a>
                </li>
                <li class="relative ml-4">
                    <a href="{{ route('documentation.installation') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.installation')])>
                        Installation
                    </a>
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
                            <a href="{{ route('documentation.form.input') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.input')])>
                                Input
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.password') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.password')])>
                                Password
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.textarea') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.textarea')])>
                                Textarea
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.number') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.number')])>
                                Number
                                <x-layout.menu-badge-new />
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.checkbox') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.checkbox')])>
                                Checkbox
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.radio') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.radio')])>
                                Radio
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.form.toggle') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.form.toggle')])>
                                Toggle
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">UI</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.alert') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.alert')])>
                                Alert
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.avatar') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.avatar')])>
                                Avatar
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.badge') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.badge')])>
                                Badge
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.banner') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.banner')])>
                                Banner
                            </a>
                            <x-layout.menu-badge-new />
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.button') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.button')])>
                                Button
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.card') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.card')])>
                                Card
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.dropdown') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.dropdown')])>
                                Dropdown
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.error') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.error')])>
                                Error
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.icon') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.icon')])>
                                Icon
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.modal') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.modal')])>
                                Modal
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.select') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.select')])>
                                Select
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.slide') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.slide')])>
                                Slide
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.tab') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.tab')])>
                                Tab
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.ui.tooltip') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.ui.tooltip')])>
                                Tooltip
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Interactions</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.interaction.dialog') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.interaction.dialog')])>
                                Dialog
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.interaction.toast') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.interaction.toast')])>
                                Toast
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Internals</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.internal.error') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.internal.error')])>
                                Error
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.internal.hint') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.internal.hint')])>
                                Hint
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.internal.label') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.internal.label')])>
                                Label
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.internal.wrapper') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.internal.wrapper')])>
                                Wrapper
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Diggin Deeper</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="relative ml-4">
                    <a href="{{ route('documentation.configuration') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.configuration')])>
                        Configurations
                    </a>
                </li>
                <li class="relative ml-4">
                    <a href="{{ route('documentation.translation') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.translation')])>
                        Translations
                    </a>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Personalization</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.personalization.concept') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.personalization.concept')])>
                                Concept
                            </a>
                        </li>
                    </ul>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.personalization.soft') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.personalization.soft')])>
                                Soft Personalization
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.personalization.deep') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.personalization.deep')])>
                                Deep Personalization
                            </a>
                        </li>
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.personalization.color') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.personalization.color')])>
                                Colors
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <h2 class="font-medium text-pink-900 font-display dark:text-pink-500">Helpers</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative ml-4">
                            <a href="{{ route('documentation.dark-theme') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.dark-theme')])>
                                Dark Theme
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative ml-4">
                    <a href="{{ route('documentation.contribution') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline dark:text-slate-400', 'underline' => request()->routeIs('documentation.contribution')])>
                        Contribution Guide
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
