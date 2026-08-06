<x-demo-layout title="Dial Horizontal">
    <div class="flex min-h-[300px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-slate-400">
        <p>Items fan out horizontally instead of stacking vertically.</p>
    </div>

    <x-dial horizontal>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
</x-demo-layout>
