<x-demo-layout title="Layout Sidebar Item">
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

                <x-tsui-side-bar.item text="Dashboard" icon="home" :route="'/'" current />

                <x-tsui-side-bar.item text="Notifications" icon="bell" :route="'/'">
                    <x-slot:badge>5</x-slot:badge>
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.item text="Messages" icon="envelope" badge-color="blue" :route="'/'">
                    <x-slot:badge>3</x-slot:badge>
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.separator text="Configurations" line />

                <x-tsui-side-bar.item text="Settings" icon="cog-6-tooth" opened>
                    <x-tsui-side-bar.item text="General" :route="'/'" />
                    <x-tsui-side-bar.item text="Privacy" :route="'/'" />
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.item text="Account" icon="user">
                    <x-tsui-side-bar.item text="Profile" :route="'/'" />
                    <x-tsui-side-bar.item text="API Keys" :route="'/'" />
                </x-tsui-side-bar.item>

                <x-tsui-side-bar.separator text="Resources" line-right />

                <x-tsui-side-bar.item text="External Docs" icon="book-open" href="/" />
            </x-tsui-side-bar>
        </x-slot:menu>

        <p class="text-sm text-slate-500 dark:text-slate-400">
            The sidebar showcases item types in one go: a <b>current</b> item, items with <b>badges</b> (counts) using two badge colors, two <b>separator</b> styles (<code class="font-mono">line</code> and <code class="font-mono">line-right</code>), grouped items (<i>Settings</i> opened, <i>Account</i> closed), and an item using a raw <code class="font-mono">href</code>.
        </p>
    </x-tsui-layout>
</x-demo-layout>
