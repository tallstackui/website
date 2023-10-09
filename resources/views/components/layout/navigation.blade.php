<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <ul role="list" class="space-y-9">
        <li>
            <h2 class="font-medium text-slate-900 font-display dark:text-white">Introduction</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <a href="{{ route('welcome') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Welcome
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.get-started') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Get Started
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-slate-900 font-display dark:text-white">Components</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">Form</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.input') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Input
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.password') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Password
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.textarea') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Textarea
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.checkbox') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Checkbox
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.radio') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Radio
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.form.toggle') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Toggle
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">UI</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.alert') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Alert
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.avatar') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Avatar
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.badge') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Badge
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.button') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Button
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.card') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Card
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.dropdown') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Dropdown
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.error') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Error
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.icon') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Icon
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.modal') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Modal
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.select') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Select
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.tab') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Tab
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.tooltip') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Tooltip
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">Interactions</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.dialog') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Dialog
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.toast') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Toast
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-slate-900 font-display dark:text-white">Diggin Deeper</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.configuration') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Configurations
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.translation') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Translations
                    </a>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">Personalization</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.dark-theme') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Concept
                            </a>
                        </li>
                    </ul>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.dark-theme') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Soft Personalization
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.dark-theme') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Deep Personalization
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">Helpers</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.dark-theme') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Dark Theme
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>
