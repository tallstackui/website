<x-demo-layout title="Dial Prevent Rotation">
    <div class="flex min-h-[300px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-dark-400">
        <p>The main button icon stays static instead of rotating when the dial opens.</p>
    </div>

    <x-dial icon="bars-3" prevent-rotate>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
