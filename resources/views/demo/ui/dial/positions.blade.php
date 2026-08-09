<x-demo-layout title="Dial Positions">
    <div
        class="dark:text-dark-400 flex min-h-[340px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500"
    >
        <p>
            The dial is anchored to the
            <b>top-left</b>
            corner of this preview.
        </p>
    </div>

    <x-dial position="top-left">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
