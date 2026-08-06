<x-demo-layout title="Dial Hover Mode">
    <div class="flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-dark-400">
        <p>Hover the floating button to reveal the actions.</p>
    </div>

    <x-dial hover>
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
