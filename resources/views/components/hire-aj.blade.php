<x-modal id="aj" center blur>
    <div class="relative -mt-2 px-1 py-2 sm:px-2">
        <div
            aria-hidden="true"
            class="pointer-events-none absolute -top-12 left-1/2 h-40 w-72 -translate-x-1/2 bg-linear-to-tr from-pink-400/40 via-fuchsia-400/30 to-violet-400/40 blur-3xl dark:opacity-50"
        ></div>

        <div class="relative flex flex-col items-center text-center">
            <div class="relative">
                <div
                    aria-hidden="true"
                    class="absolute -inset-2.5 animate-pulse rounded-full bg-linear-to-tr from-pink-500 via-fuchsia-500 to-violet-500 opacity-60 blur-lg"
                ></div>
                <img
                    src="https://unavatar.io/github/devajmeireles"
                    alt="AJ Meireles"
                    loading="lazy"
                    class="dark:ring-dark-900/50 relative h-24 w-24 rounded-full object-cover ring-4 ring-white/90"
                />
            </div>

            <h2 class="font-display dark:text-dark-100 mt-5 text-2xl font-semibold tracking-tight text-slate-900">
                AJ Meireles
            </h2>
            <p class="mt-1 text-xs font-semibold tracking-[0.18em] text-pink-600 uppercase dark:text-pink-400">
                Creator of TallStackUI
            </p>

            <p class="dark:text-dark-300 mt-4 max-w-lg text-sm leading-relaxed text-slate-600">
                AJ is a full-stack developer with more than 10 years of experience and deep expertise in PHP, the
                Laravel ecosystem overall, and the TALL Stack.
            </p>

            <div class="mt-3 flex flex-wrap items-center justify-center gap-1.5">
                <x-badge color="pink" xs round light>Laravel</x-badge>
                <x-badge color="violet" xs round light>Livewire</x-badge>
                <x-badge color="sky" xs round light>Alpine.js</x-badge>
                <x-badge color="emerald" xs round light>TailwindCSS</x-badge>
            </div>
        </div>

        <div class="relative mt-6 space-y-2">
            <a
                href="mailto:alvinhooxd@gmail.com"
                class="group relative inline-flex w-full items-center justify-center gap-2 overflow-hidden rounded-full bg-linear-to-r from-pink-500 via-fuchsia-500 to-violet-500 bg-[length:200%_auto] px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-pink-500/30 transition-all duration-500 ease-out hover:bg-[position:right_center] hover:shadow-xl hover:shadow-fuchsia-500/40"
            >
                <x-icon name="envelope" solid class="h-4 w-4 transition group-hover:-translate-y-0.5" />
                Email
            </a>
            <div class="grid gap-2 sm:grid-cols-2">
                <a
                    href="https://www.linkedin.com/in/devajmeireles/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group dark:border-dark-700 dark:bg-dark-900/60 dark:text-dark-200 inline-flex items-center justify-center gap-2 rounded-full border border-slate-200 bg-white/80 px-4 py-2 text-xs font-semibold text-slate-700 transition hover:-translate-y-0.5 hover:border-sky-400 hover:bg-sky-50 hover:text-sky-700 hover:shadow-md hover:shadow-sky-500/15 dark:hover:border-sky-500/50 dark:hover:bg-sky-950/40 dark:hover:text-sky-300"
                >
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                    Connect on LinkedIn
                </a>
                <a
                    href="https://aj.dev.br/cv"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group dark:border-dark-700 dark:bg-dark-900/60 dark:text-dark-200 inline-flex items-center justify-center gap-2 rounded-full border border-slate-200 bg-white/80 px-4 py-2 text-xs font-semibold text-slate-700 transition hover:-translate-y-0.5 hover:border-violet-400 hover:bg-violet-50 hover:text-violet-700 hover:shadow-md hover:shadow-violet-500/15 dark:hover:border-violet-500/50 dark:hover:bg-violet-950/40 dark:hover:text-violet-300"
                >
                    <x-icon name="document-text" solid class="h-4 w-4 transition group-hover:rotate-3" />
                    AJ's CV
                </a>
            </div>
        </div>
    </div>
</x-modal>
