<x-demo-layout title="Banner Animated">
    <x-banner
        text="Welcome to the TallStackUI!"
        animated
        :enter="1"
        :leave="6"
    />

    <div
        class="dark:text-dark-300 mx-auto max-w-2xl px-6 py-20 text-sm text-slate-600"
    >
        <p>
            Banner enters after 1s and leaves after 6s. Reload to replay the
            cycle.
        </p>
    </div>
</x-demo-layout>
