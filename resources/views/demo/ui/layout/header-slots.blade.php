<x-demo-layout title="Layout Header Slots">
    <x-tsui-layout.header>
        <x-slot:left>
            <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Left slot</span>
        </x-slot:left>
        <x-slot:middle>
            <span class="text-sm text-slate-500 dark:text-slate-400">Middle slot</span>
        </x-slot:middle>
        <x-slot:right>
            <span class="text-sm font-semibold text-pink-600 dark:text-pink-400">Right slot</span>
        </x-slot:right>
    </x-tsui-layout.header>

    <div class="px-6 py-8 text-sm text-slate-500 dark:text-slate-400">
        <p>The header above shows the three slot positions: <code class="font-mono">left</code>, <code class="font-mono">middle</code>, <code class="font-mono">right</code>.</p>
    </div>
</x-demo-layout>
