<x-demo-layout title="Layout Sidebar Footer">
    <x-tsui-layout>
        <x-slot:header>
            <x-tsui-layout.header without-mobile-button />
        </x-slot>

        <x-slot:menu>
            <x-tsui-side-bar>
                <x-slot:brand>
                    <div class="flex justify-center py-4">
                        <img
                            src="{{ asset("assets/images/android-chrome-512x512.png") }}"
                            alt="Brand"
                            class="h-10 w-10"
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
                    text="Settings"
                    icon="cog-6-tooth"
                    route="#"
                />

                <x-slot:footer>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        v4.0.0
                    </p>
                </x-slot>
            </x-tsui-side-bar>
        </x-slot>

        <p class="dark:text-dark-400 text-sm text-slate-500">
            The version label sits at the bottom of the sidebar. That is the
            <x-block>footer</x-block>
            slot of
            <x-block>&lt;x-side-bar&gt;</x-block>
            .
        </p>
    </x-tsui-layout>
</x-demo-layout>
