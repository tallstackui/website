<x-demo-layout title="Dial Without Tooltip">
    <div class="flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-dark-400">
        <p>Labels are hidden across the whole dial.</p>
    </div>

    <x-dial without-tooltip>
        <x-dial.items icon="pencil" />
        <x-dial.items icon="share" />
        <x-dial.items icon="trash" />
    </x-dial>
</x-demo-layout>
