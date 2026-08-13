<x-demo-layout title="Layout Example">
    <x-tsui-layout>
        <x-slot:header>
            <x-tsui-layout.header without-mobile-button>
                <x-slot:left>
                    <span
                        class="dark:text-dark-200 text-sm font-semibold text-slate-700"
                    >
                        Dashboard
                    </span>
                </x-slot>
                <x-slot:middle>
                    <div class="hidden w-full max-w-sm md:block">
                        <x-input
                            icon="magnifying-glass"
                            placeholder="Search"
                            sm
                        />
                    </div>
                </x-slot>
                <x-slot:right>
                    <div class="flex items-center gap-3">
                        <x-dropdown text="Hello, AJ!">
                            <x-slot:header>
                                <x-theme-switch block />
                            </x-slot>
                            <x-dropdown.items text="Profile" />
                            <x-dropdown.items text="Logout" />
                        </x-dropdown>
                    </div>
                </x-slot>
            </x-tsui-layout.header>
        </x-slot>

        <x-slot:menu>
            <x-tsui-side-bar collapsible thin-scroll>
                <x-slot:brand>
                    <div class="flex justify-center py-4">
                        <img
                            src="{{ asset("assets/images/android-chrome-512x512.png") }}"
                            alt="Brand"
                            class="h-10 w-10"
                        />
                    </div>
                </x-slot>
                <x-slot:brand-collapsed>
                    <div class="flex justify-center py-4">
                        <img
                            src="{{ asset("assets/images/android-chrome-512x512.png") }}"
                            alt="Brand"
                            class="h-8 w-8"
                        />
                    </div>
                </x-slot>

                <x-tsui-side-bar.item
                    text="Home"
                    icon="home"
                    route="#"
                    current
                />
                <x-tsui-side-bar.item
                    text="Notifications"
                    icon="bell"
                    route="#"
                >
                    <x-slot:badge>5</x-slot>
                </x-tsui-side-bar.item>
                <x-tsui-side-bar.item
                    text="Messages"
                    icon="envelope"
                    badge-color="blue"
                    route="#"
                >
                    <x-slot:badge>3</x-slot>
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.separator text="Configurations" line />

                <x-tsui-side-bar.item text="Settings" icon="cog-6-tooth" opened>
                    <x-tsui-side-bar.item text="General" route="#" />
                    <x-tsui-side-bar.item text="Privacy" route="#" />
                </x-tsui-side-bar.item>
                <x-tsui-side-bar.item text="Account" icon="user">
                    <x-tsui-side-bar.item text="Profile" route="#" />
                    <x-tsui-side-bar.item text="API Keys" route="#" />
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.separator text="Resources" line-right />

                <x-tsui-side-bar.item
                    text="External Docs"
                    icon="book-open"
                    href="/"
                />

                <x-slot:footer>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        v4.0.0
                    </p>
                </x-slot>
            </x-tsui-side-bar>
        </x-slot>

        <h1
            class="font-display text-3xl font-bold tracking-tight text-slate-900 dark:text-white"
        >
            Welcome back, AJ!
        </h1>
        <p class="dark:text-dark-300 mt-3 text-base text-slate-600">
            A complete
            <x-block>&lt;x-layout&gt;</x-block>
            with header slots and a collapsible sidebar.
        </p>
    </x-tsui-layout>
</x-demo-layout>
