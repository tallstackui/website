<x-demo-layout title="Layout Sidebar Footer">
    <x-tsui-layout>
        <x-slot:header>
            <x-tsui-layout.header />
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

                <x-slot:footer>
                    <p class="text-sm text-gray-500 dark:text-gray-400">v3.0.0</p>
                </x-slot:footer>
            </x-tsui-side-bar>
        </x-slot:menu>

        <p class="text-sm text-slate-500 dark:text-dark-400">
            The version label is pinned at the bottom of the sidebar — that's the <code class="font-mono">footer</code> slot of <code class="font-mono">&lt;x-side-bar&gt;</code>.
        </p>
    </x-tsui-layout>
</x-demo-layout>
