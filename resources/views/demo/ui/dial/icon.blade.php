<x-demo-layout title="Dial Icon">
    <div class="dark:text-dark-400 flex min-h-[300px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500">
        <p>The main button uses a custom icon instead of the default plus.</p>
    </div>

    <x-dial icon="bars-4">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
