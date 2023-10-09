<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <ul role="list" class="space-y-9">
        <li>
            <h2 class="font-medium text-pink-900 font-display">Introduction</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <a href="{{ route('welcome') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('welcome')])>
                        Welcome
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.get-started') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.get-started')])>
                        Get Started
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-pink-900 font-display">Components</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">Form</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.input') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.input')])>
                                Input
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.password') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.password')])>
                                Password
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.textarea') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.textarea')])>
                                Textarea
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.checkbox') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.checkbox')])>
                                Checkbox
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.radio') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.radio')])>
                                Radio
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.toggle') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.form.toggle')])>
                                Toggle
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">UI</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.alert') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.alert')])>
                                Alert
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.avatar') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.avatar')])>
                                Avatar
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.badge') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.badge')])>
                                Badge
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.button') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.button')])>
                                Button
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.card') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.card')])>
                                Card
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.error') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.error')])>
                                Error
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.icon') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.icon')])>
                                Icon
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.modal') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.modal')])>
                                Modal
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.select') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.select')])>
                                Select
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.tab') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.tab')])>
                                Tab
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.tooltip') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.tooltip')])>
                                Tooltip
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">Interactions</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.dialog') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.dialog')])>
                                Dialog
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.toast') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.ui.toast')])>
                                Toast
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">Internal Only</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.internal.error') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.internal.error')])>
                                Error
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.internal.hint') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.internal.hint')])>
                                Hint
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.internal.label') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.internal.label')])>
                                Label
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.internal.wrapper') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.internal.wrapper')])>
                                Wrapper
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-pink-900 font-display">Diggin Deeper</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.configuration') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.configuration')])>
                        Configurations
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.translation') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.translation')])>
                        Translations
                    </a>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">Personalization</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.personalization.concept') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.personalization.concept')])>
                                Concept
                            </a>
                        </li>
                    </ul>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.personalization.soft') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.personalization.soft')])>
                                Soft Personalization
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.personalization.deep') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.personalization.deep')])>
                                Deep Personalization
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.personalization.color') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.personalization.color')])>
                                Colors
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-pink-900 font-display">Helpers</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.dark-theme') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.dark-theme')])>
                                Dark Theme
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.contribution') }}" @class(['text-gray-500 transition hover:text-gray-800 hover:underline', 'underline' => request()->routeIs('documentation.contribution')])>
                        Contribution Guide
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
