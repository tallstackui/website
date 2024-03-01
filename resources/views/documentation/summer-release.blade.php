<x-layout torchlight>
    <x-slot:title>
        Summer Release
    </x-slot:title>
    <div class="flex justify-center">
        <h1 class="text-4xl font-bold text-pink-500 dark:text-dark-300">The Summer Release 🏖️</h1>
    </div>
    <p class="mt-4 text-gray-600 dark:text-dark-400">
        After more than 30 days of work, <b>we present the Summer Release!</b>
        <u>The Summer Release is nothing more than a special release, containing many
        new features, released in the summer of 2023.</u> We dedicated ourselves to the
        maximum to introduce new features, improve various current components, and
        also fix many small issues. On this page, you will have a complete summary
        of the news, but also remember to navigate individually on the documentation pages.
    </p>
    <x-section title="Support for New Icon Libraries" class="mt-4" disable-copy>
        <ul class="mt-2 ml-2 list-inside list-decimal">
            <li>Heroicons (about 300 icons)</li>
            <li>Phosphoricons (about 7K icons)</li>
            <li>Google (about 10K icons)</li>
        </ul>
    </x-section>
    <x-section title="New Component: Date" class="mt-4">
        <x-preview language="blade" :contents="$date">
            <div class="space-y-2">
                <x-date label="Date" hint="Single selection" name="date" :value="now()->format('Y-m-d')" helpers format="DD MMMM YYYY" />
                <x-date label="Date" hint="Range selection" range :value="[now()->format('Y-m-d'), now()->addWeeks(2)->format('Y-m-d')]" format="DD MMMM YYYY" />
                <x-date label="Date" hint="Multiple selection" multiple :value="[now()->format('Y-m-d'), now()->addDay()->format('Y-m-d')]" format="DD MMMM YYYY" />
            </div>
        </x-preview>
        <p class="mt-2">
            <x-link sm color="pink" href="#" icon="arrow-up-right" position="right">
                Review the component documentation
            </x-link>
        </p>
    </x-section>
    <x-section title="New Component: Time" class="mt-4">
        <x-preview language="blade" :contents="$time">
            <div class="space-y-2">
                <x-time label="Time" hint="Format 12 hours" name="time" value="09:22 AM" />
                <x-time label="Time" hint="Format 24 hours" helper name="time" value="21:36" format="24" />
            </div>
        </x-preview>
        <p class="mt-2">
            <x-link sm color="pink" href="#" icon="arrow-up-right" position="right">
                Review the component documentation
            </x-link>
        </p>
    </x-section>
    <x-section title="New Component: Form Step" class="mt-4">
        <x-preview language="blade" :contents="$step">
            <x-step selected="1" helpers panels>
                <x-step.items step="1"
                              title="Starting"
                              description="Tall">
                    You are seeing...
                </x-step.items>
                <x-step.items step="2"
                              title="Advancing"
                              description="Stack">
                    the best...
                </x-step.items>
                <x-step.items step="3"
                              title="Finishing"
                              description="UI 🚀"
                              completed>
                    TALL Stack component library!
                </x-step.items>
            </x-step>
        </x-preview>
        <p class="mt-2">
            <x-link sm color="pink" href="#" icon="arrow-up-right" position="right">
                Review the component documentation
            </x-link>
        </p>
    </x-section>
    <x-section title="New Component: Stats" class="mt-4">
        <x-preview language="blade" :contents="$stats" :background="false">
            <div class="grid grid-cols-3 gap-2">
                <div class="col-span-full sm:col-span-1">
                    <x-stats number="50"
                             title="Components"
                             footer="Our goal..."
                             icon="wrench-screwdriver"
                             outline
                             animated
                             increase />
                </div>
                <div class="col-span-full sm:col-span-1">
                    <x-stats number="0"
                             title="Weeks W/O Updates"
                             footer="With frequent updates..."
                             icon="arrow-path"
                             outline
                             animated
                             decrease />
                </div>
                <div class="col-span-full sm:col-span-1">
                    <x-stats number="100000"
                             title="Downloads"
                             footer="... And growing fast!"
                             icon="arrow-down-on-square"
                             outline
                             animated
                             increase />
                </div>
            </div>
        </x-preview>
        <p class="mt-2">
            <x-link sm color="pink" href="#" icon="arrow-up-right" position="right">
                Review the component documentation
            </x-link>
        </p>
    </x-section>
    <x-section title="New Component: Theme Switch" class="mt-4">
        <x-preview language="blade" :contents="$themeSwitch">
            <x-theme-switch xl />
        </x-preview>
        <p class="mt-2">
            <x-link sm color="pink" href="#" icon="arrow-up-right" position="right">
                Review the component documentation
            </x-link>
        </p>
    </x-section>
</x-layout>
