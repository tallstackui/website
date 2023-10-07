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
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Input
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Password
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Textarea
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Checkbox
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Radio
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
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
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Avatar
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Badge
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Button
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.card') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Card
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Dropdown
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Errors
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Icons
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.modal') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Modal
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Select
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a href="{{ route('documentation.ui.tab') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                                Tabs
                            </a>
                            <x-icon icon="check-circle" class="w-4 h-4" color="green" />
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
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Dialog
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
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
                    <a href="{{ route('welcome') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Colors
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('welcome') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Translations
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('documentation.get-started') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Personalization
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
