<x-demo-layout title="Banner Left Slot">
    <x-banner text="Welcome to the TallStackUI!">
        <x-slot:left>
            <x-icon name="check" />
        </x-slot:left>
    </x-banner>

    <div class="mx-auto max-w-2xl px-6 py-20 text-sm text-slate-600 dark:text-slate-300">
        <p>Use the <code class="font-mono">left</code> slot to inject an icon (or anything else) before the message.</p>
    </div>
</x-demo-layout>
