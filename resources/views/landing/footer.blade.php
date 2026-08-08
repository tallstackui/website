<footer class="landing-footer pt-10 pb-12">
    <div class="flex flex-col items-center justify-between gap-6 md:flex-row">
        <div class="flex items-center gap-3">
            <x-svg.banner class="h-6 w-8" />
            <p class="dark:text-dark-400 text-xs leading-5 text-gray-500">
                &copy; {{ now()->year }} TallStackUI. All rights reserved.
            </p>
        </div>

        <p class="dark:text-dark-400 max-w-md text-center text-xs leading-5 text-gray-500 md:text-right">
            Designed, built and maintained by
            <a
                href="https://linkedin.com/in/devajmeireles"
                class="font-medium text-pink-500 underline decoration-pink-500/40 underline-offset-2"
                target="_blank"
                rel="noopener"
            >AJ Meireles</a>
        </p>

        <div class="flex items-center gap-5">
            <a
                href="{{ $discord }}"
                target="_blank"
                rel="noopener"
                class="dark:text-dark-400 font-mono text-[0.7rem] tracking-[0.12em] text-gray-500 uppercase transition hover:text-pink-500"
            >Discord</a>
            <a
                href="https://github.com/sponsors/devajmeireles"
                target="_blank"
                rel="noopener"
                class="dark:text-dark-400 font-mono text-[0.7rem] tracking-[0.12em] text-gray-500 uppercase transition hover:text-pink-500"
            >Sponsor</a>
            <a
                href="/llms.txt"
                target="_blank"
                rel="noopener"
                class="dark:text-dark-400 font-mono text-[0.7rem] tracking-[0.12em] text-gray-500 uppercase transition hover:text-pink-500"
            >/llms.txt</a>
            <x-github />
        </div>
    </div>
</footer>
