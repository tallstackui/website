<x-demo-layout title="Dial Square">
    <div class="flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-slate-400">
        <p>Square corners on both the main button and items.</p>
    </div>

    <x-dial square>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
</x-demo-layout>
