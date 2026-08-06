<x-demo-layout title="Dial Links">
    <div class="flex min-h-[300px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-dark-400">
        <p>Each action renders as an anchor when given an <code class="font-mono">href</code>.</p>
    </div>

    <x-dial>
        <x-dial.items icon="pencil" label="Edit" href="#" />
        <x-dial.items icon="eye" label="View" href="#" />
    </x-dial>
</x-demo-layout>
