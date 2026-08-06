<footer class="border-t border-gray-200 pb-12 pt-10 dark:border-dark-700/60">
    <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
        <div class="flex items-center gap-3">
            <x-svg.banner class="h-6 w-8" />
            <p class="text-xs leading-5 text-gray-500 dark:text-dark-400">
                &copy; {{ now()->year }} TallStackUI. All rights reserved.
            </p>
        </div>

        <p class="max-w-md text-center text-xs leading-5 text-gray-500 md:text-right dark:text-dark-400">
            Designed, built and maintained by
            <a href="https://linkedin.com/in/devajmeireles" class="font-medium text-pink-500 underline decoration-pink-500/40 underline-offset-2" target="_blank" rel="noopener">AJ Meireles</a>
        </p>

        <div class="flex items-center gap-5">
            <a href="{{ $discord }}" target="_blank" rel="noopener" class="font-mono text-[0.7rem] uppercase tracking-[0.12em] text-gray-500 transition hover:text-pink-500 dark:text-dark-400">Discord</a>
            <a href="https://github.com/sponsors/devajmeireles" target="_blank" rel="noopener" class="font-mono text-[0.7rem] uppercase tracking-[0.12em] text-gray-500 transition hover:text-pink-500 dark:text-dark-400">Sponsor</a>
            <x-github />
        </div>
    </div>
</footer>
