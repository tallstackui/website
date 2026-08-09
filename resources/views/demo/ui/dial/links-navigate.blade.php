<x-demo-layout title="Dial Links (Navigate)">
    <div
        class="dark:text-dark-400 flex min-h-75 flex-col items-center justify-center px-6 py-10 text-sm text-slate-500"
    >
        <p>
            Same as Links, but using
            <code class="font-mono">navigate</code>
            /
            <code class="font-mono">navigate-hover</code>
            for Livewire SPA transitions.
        </p>
    </div>

    <x-dial>
        <x-dial.items icon="pencil" label="Edit" href="#" navigate />
        <x-dial.items icon="eye" label="View" href="#" navigate-hover />
    </x-dial>
</x-demo-layout>
