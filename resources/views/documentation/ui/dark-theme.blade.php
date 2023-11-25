<x-layout>
    <x-slot:title>
        Dark Theme Helper
    </x-slot:title>
    <x-slot:description>
        Helper to easy manage dark theme.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            TallStackUi provides a simple yet powerful helper to add dark theme support to your application. The main idea
            of this helper is to offer an easy way to control the dark theme by persisting a value in the browser's local storage.
            After applying the helper, an AlpineJS variable called <x-block>darkTheme</x-block> will be offered to control the dark theme
            persisting the changes in the local storage.
        </p>
        <p class="mt-4">1. Enable the dark theme support in your TailwindCSS configuration file:</p>
        <x-code language="js" :contents="$tailwindcss" :copy="false"/>
        <p class="mt-4">2. Add the helper on the <x-block>html</x-block> tag of your layout:</p>
        <x-code language="blade" :contents="$helper" :copy="false"/>
        <p>Alternatively, you can customize the name of the state stored in local storage of the browser, <b class="underline">default name is dark-theme</b></p>
        <x-code language="blade" :contents="$customized" :copy="false"/>
        <p>3. Create a button to control the dark theme:</p>
        <x-code language="blade" :contents="$button" />
        <x-warning text="This button must be covered by the layout that received the helper above." />
        <p class="mt-2">4. Rebuild your assets:</p>
        <x-code language="shell" :contents="$assets" />
        <p class="mt-2">5. Now all you need to do is adapt all your CSS classes to the dark theme variation:</p>
        <x-code language="blade" :contents="$example" :copy="false"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.personalization.color') }}" text="Colors" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.contribution') }}" text="Contribution Guide" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
