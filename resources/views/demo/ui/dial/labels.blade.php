<x-demo-layout title="Dial Labels">
    <div class="dark:text-dark-400 flex min-h-[420px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500">
        <p>Each action shows a tooltip-style label next to its icon.</p>
    </div>

    <x-dial>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
        <x-dial.items icon="document-duplicate" label="Copy" />
        <x-dial.items icon="trash" label="Delete" />
    </x-dial>
</x-demo-layout>
