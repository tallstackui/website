<x-demo-layout title="Banner Random Messages">
    <x-banner
        :text="[
            'Welcome to the TallStackUI!',
            'This is the TallStackUI',
            'Built for the TALL Stack',
            'Reload to roll a different message',
        ]"
    />

    <div
        class="dark:text-dark-300 mx-auto max-w-2xl px-6 py-20 text-sm text-slate-600"
    >
        <p>Reload this preview to see a different random message.</p>
    </div>
</x-demo-layout>
