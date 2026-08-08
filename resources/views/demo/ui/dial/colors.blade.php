<x-demo-layout title="Dial Colors">
    <div class="dark:text-dark-400 flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500">
        <p class="text-center"><b>red</b> (bottom-right) · <b>emerald</b> (bottom-left)</p>
    </div>

    <x-dial color="red" position="bottom-right">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>

    <x-dial color="emerald" position="bottom-left">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
