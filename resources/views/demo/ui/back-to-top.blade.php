<x-demo-layout title="Back to Top">
    <div
        class="dark:text-dark-300 mx-auto max-w-2xl space-y-3 px-6 py-10 text-sm text-slate-600 sm:px-0"
    >
        <p class="dark:text-dark-200 text-base font-medium text-slate-700">
            Scroll down. The Back to Top button appears once you pass the
            threshold.
        </p>
        @for ($i = 1; $i <= 30; $i++)
            <p>Filler line #{{ $i }}. Keep scrolling to trigger the button.</p>
        @endfor
    </div>

    <x-back-to-top />
</x-demo-layout>
