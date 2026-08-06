<x-demo-layout title="Layout Example">
    <x-tsui-layout>
        <x-slot:header>
            <x-tsui-layout.header>
                <x-slot:right>
                    <x-dropdown text="Hello, AJ!">
                        <x-dropdown.items text="Profile" />
                        <x-dropdown.items text="Logout" />
                    </x-dropdown>
                </x-slot:right>
            </x-tsui-layout.header>
        </x-slot:header>

        <x-slot:menu>
            <x-tsui-side-bar>
                <x-slot:brand>
                    <div class="flex justify-center py-4">
                        <img src="{{ asset('assets/images/android-chrome-512x512.png') }}" alt="Brand" class="h-10 w-10" />
                    </div>
                </x-slot:brand>

                <x-tsui-side-bar.item text="Home" icon="home" route="#" current />
                <x-tsui-side-bar.item text="Settings" icon="cog-6-tooth" route="#" />
                <x-tsui-side-bar.item text="Reports" icon="chart-bar" route="#" />
            </x-tsui-side-bar>
        </x-slot:menu>

        <h1 class="font-display text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Welcome back, AJ</h1>
        <p class="mt-3 text-base text-slate-600 dark:text-slate-300">
            This is a real <code class="font-mono">&lt;x-layout&gt;</code> rendered inside the iframe — sidebar, header, and main content all wired together.
        </p>
    </x-tsui-layout>
</x-demo-layout>
