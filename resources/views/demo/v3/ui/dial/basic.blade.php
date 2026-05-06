<x-demo-layout title="Dial Basic">
    <div class="flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-slate-400">
        <p>Click the floating button at the bottom-right to expand the actions.</p>
    </div>

    <x-dial>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
</x-demo-layout>
