<x-demo-layout title="Back to Top">
    <div class="mx-auto max-w-2xl px-6 py-10 space-y-3 text-sm text-slate-600 dark:text-slate-300 sm:px-0">
        <p class="text-base font-medium text-slate-700 dark:text-slate-200">
            Scroll down — the Back to Top button appears once you pass the threshold.
        </p>
        @for ($i = 1; $i <= 30; $i++)
            <p>Filler line #{{ $i }} — keep scrolling to trigger the button.</p>
        @endfor
    </div>

    <x-back-to-top />
</x-demo-layout>
