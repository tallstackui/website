<x-layout :$content>
    <x-slot:title>AlpineJS</x-slot>
    <x-section class="space-y-4" disable-copy>
        <div class="space-y-4">
            <p>
                All JavaScript in TallStackUI is actually code blocks based on
                AlpineJS, a lightweight framework created by the same creator of
                Livewire. For this reason,
                <b>
                    it is extremely important that AlpineJS is loaded on every
                    page - for example, loaded by the layout of your
                    application.
                </b>
                If you do not load it, several TallStackUI components will not
                work, because they depend on AlpineJS-based code.
            </p>
            <p>
                At this point you might be thinking:
                <i>
                    "Livewire 4 delivers AlpineJS automatically! Why should I
                    care about that?".
                </i>
                Well, some inattentive people don't realize that
                <b>
                    Livewire 4 only delivers AlpineJS automatically when there
                    are Livewire components on the page.
                </b>
                In other words: imagine that you have a dropdown in your layout
                - offered by TallStackUI, but there are no Livewire components
                on the page. What will happen? The dropdown will not work!
                That's why we recommend "forced" loading of Livewire with the
                method below!
            </p>
            <x-code language="blade" :contents="$installation" disable-copy />
        </div>
    </x-section>
</x-layout>
