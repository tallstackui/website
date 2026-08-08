<nav class="relative z-30 flex items-center justify-between py-6" aria-label="Global">
    <div class="flex items-center gap-3">
        <a href="/" aria-label="TallStackUI">
            <x-svg.banner class="h-8 w-10" />
        </a>
    </div>

    <div class="dark:text-dark-400 hidden items-center gap-7 font-mono text-[0.72rem] tracking-[0.1em] text-gray-500 uppercase lg:flex">
        <a href="#new" class="transition hover:text-pink-500">New in 4.0</a>
        <a href="#theme" class="transition hover:text-pink-500">Theme</a>
        <a href="#customize" class="transition hover:text-pink-500">Customize</a>
        <a href="#ai" class="transition hover:text-pink-500">AI</a>
        <a href="{{ route('documentation', ['installation']) }}" wire:navigate class="transition hover:text-pink-500"
            >Docs</a>
    </div>

    <div class="flex items-center gap-4">
        <x-theme-switch simple only-icons />
        <x-github repository />
    </div>
</nav>
