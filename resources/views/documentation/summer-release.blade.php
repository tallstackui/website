<x-layout torchlight>
    <x-slot:title>
        The Summer Release 🏖
    </x-slot:title>
    <p class="mt-4 text-gray-600 dark:text-dark-400">
        After more than 30 days of work, <b>we present the Summer Release!</b>
        <u>The Summer Release is nothing more than a special release, containing many
        new features, released in March 2024.</u> We dedicated ourselves to the
        maximum to introduce new features, improve various current components, and
        also fix many small issues. On this page, you will have a complete summary
        of the news, but also remember to navigate individually on the documentation pages
        that contains the "new" bagde to know more about new components.
    </p>
    <x-section title="Breaking Changes 😫" class="mt-4" disable-copy>
        <p>
            In this release we made several changes in favor of improvements linked
            to several components. If you notice any exceptions due to this, read
            the component documentation to understand the changes in personalize block names.
        </p>
        <p class="mt-2 text-lg font-bold">Some important information:</p>
        <ul class="mt-2 ml-4 list-inside list-decimal space-y-2">
            <li class="marker:font-bold">
                Several components started to use the input, instead of defining HTML
                input individually, some examples of this were the Color and Password
                components. All functionality is expected to be intact.
            </li>
            <li class="marker:font-bold">
                The "floating box" that is displayed in components such as Select Styled and Form
                Upload is now a single object shared between several components, so if
                you need to personalize this box, be sure to check the
                <a href="{{ route('documentation.internal.floating') }}" class="underline">Internal Components > Floating.</a>
            </li>
            <li class="marker:font-bold">
                Tab component items have lost their individual personalization in exchange
                for the personalization now being centralized in the tab component, the parent component.
            </li>
            <li class="marker:font-bold">
                The icon configuration received a new structure in the TallStackUI
                configuration file to support the new icon libraries.
            </li>
        </ul>
        <x-warning class="mt-4">
            If you notice any strange behavior or issues after the update,
            <a href="{{ $issues }}" class="underline">please open an issue on our GitHub repository.</a>
        </x-warning>
    </x-section>
    <x-separator text="NEWS" />
    <x-section title="Resume" disable-copy>
        <ul class="mt-2 ml-4 list-inside list-decimal">
            <li class="marker:font-bold">
                Uncountable improvements in the components 🔍
            </li>
            <li class="marker:font-bold">
                Uncountable quantities of bug fixes 🛠️
            </li>
            <li class="marker:font-bold">
                Five new components 💫
            </li>
            <li class="marker:font-bold">
                Support for three icon libraries 🎨
            </li>
            <li class="marker:font-bold">
                Artisan command to set up component prefixes ⌨️
            </li>
        </ul>
    </x-section>
    <x-section title="Setup Prefix Command" class="mt-4" disable-copy>
        <x-preview language="blade">
            <p class="mb-4"><u>Starting from version 1.20,</u> TallStackUI introduce a command to easily setup <a href="{{ route('documentation.installation').'#component-prefix' }}" class="underline">prefix for the components:</a></p>
            <x-code language="shell" :contents="$setupPrefix" />
        </x-preview>
    </x-section>
    <x-section title="Icons Library" class="mt-4" disable-copy>
        <x-preview language="blade">
            <p><u>Starting from version 1.20,</u> TallStackUI supports three icon libraries:</p>
            <div class="space-y-2">
                <ul class="mt-2 ml-2 list-inside list-decimal">
                    <li><a href="https://heroicons.com/" target="_blank">Heroicons</a></li>
                    <li><a href="https://phosphoricons.com/" target="_blank">PhosphorIcons</a></li>
                    <li><a href="https://fonts.google.com/icons" target="_blank">Google Material Design Icons</a></li>
                </ul>
            </div>
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.ui.icon')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
    <x-section title="New Date Component" class="mt-4" disable-copy>
        <x-preview language="blade">
            <div class="space-y-2">
                <x-date label="Date" hint="Single selection" name="date" :value="now()->format('Y-m-d')" helpers format="DD MMMM YYYY" />
                <x-date label="Date" hint="Range selection" range :value="[now()->format('Y-m-d'), now()->addWeeks(2)->format('Y-m-d')]" format="DD MMMM YYYY" />
                <x-date label="Date" hint="Multiple selection" multiple :value="[now()->format('Y-m-d'), now()->addDay()->format('Y-m-d')]" format="DD MMMM YYYY" />
            </div>
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.form.date')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
    <x-section title="New Time Component" class="mt-4" disable-copy>
        <x-preview language="blade">
            <div class="space-y-2">
                <x-time label="Time" hint="Format 12 hours" name="time" value="09:22 AM" />
                <x-time label="Time" hint="Format 24 hours" helper name="time" value="21:36" format="24" />
            </div>
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.form.time')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
    <x-section title="New Form Step Component" class="mt-4" disable-copy>
        <x-preview language="blade">
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
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.ui.step')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
    <x-section title="New Stats Component" class="mt-4" disable-copy>
        <x-preview language="blade" :background="false">
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
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.ui.stats')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
    <x-section title="New Theme Switch Component" class="mt-4" disable-copy>
        <x-preview language="blade">
            <x-theme-switch xl />
            <p class="mt-2">
                <x-link sm color="pink" :href="route('documentation.ui.theme-switch')" icon="arrow-up-right" position="right">
                    Review the component documentation
                </x-link>
            </p>
        </x-preview>
    </x-section>
</x-layout>
