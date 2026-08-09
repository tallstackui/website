<x-demo-layout title="Layout Brand Collapsed">
    <x-tsui-layout>
        <x-slot:header>
            <x-tsui-layout.header />
        </x-slot>

        <x-slot:menu>
            <x-tsui-side-bar collapsible>
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
                    text="Settings"
                    icon="cog-6-tooth"
                    route="#"
                />
                <x-tsui-side-bar.item
                    text="Reports"
                    icon="chart-bar"
                    route="#"
                />
            </x-tsui-side-bar>
        </x-slot>

        <p class="dark:text-dark-400 text-sm text-slate-500">
            Click the toggle button on the header (top-left of the bar) to
            collapse the sidebar. The full
            <b>TallStackUI</b>
            brand swaps to the compact
            <b>T</b>
            mark.
        </p>
    </x-tsui-layout>
</x-demo-layout>
