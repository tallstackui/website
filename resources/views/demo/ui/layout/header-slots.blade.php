<x-demo-layout title="Layout Header Slots">
    <x-tsui-layout.header>
        <x-slot:left>
            <span
                class="dark:text-dark-200 text-sm font-semibold text-slate-700"
            >
                Left slot
            </span>
        </x-slot>
        <x-slot:middle>
            <span class="dark:text-dark-400 text-sm text-slate-500">
                Middle slot
            </span>
        </x-slot>
        <x-slot:right>
            <span
                class="text-sm font-semibold text-pink-600 dark:text-pink-400"
            >
                Right slot
            </span>
        </x-slot>
    </x-tsui-layout.header>

    <div class="dark:text-dark-400 px-6 py-8 text-sm text-slate-500">
        <p>
            The header above shows the three slot positions:
            <code class="font-mono">left</code>
            ,
            <code class="font-mono">middle</code>
            ,
            <code class="font-mono">right</code>
            .
        </p>
    </div>
</x-demo-layout>
