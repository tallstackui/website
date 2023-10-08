<x-layout>
    <x-slot:title>
        Dark Theme
    </x-slot:title>
    <x-slot:description>
        Dark Theme helper.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            TallStackUi provides a simple yet powerful helper to add dark theme support to your application. The main idea
            of this helper is to offer an easy way to control the dark theme by persisting a value in the browser's local storage.
            After applying the helper, <b class="underline">an AlpineJS variable called darkTheme will be offered to control the dark theme</b>
            persisting the changes in the local storage.
        </p>
        <p class="mt-4">1. Add the helper on the html tag of your layout:</p>
        <x-code language="blade" :contents="$helper"/>
        <p>Alternatively, you can customize the name of the state stored in local storage of the browser, <b class="underline">default is dark-theme</b></p>
        <x-code language="blade" :contents="$customized"/>
        <p>2. Create a button to control the dark theme:</p>
        <x-code language="blade" :contents="$button"/>
        <p>3. After that, all you need to do is adapt all your CSS classes:</p>
        <x-code language="blade" :contents="$example"/>
        <x-alert color="yellow" icon="exclamation-circle" text="Remember to configure the TailwindCSS to accept the dark theme based on class." translucent />
    </x-section>
</x-layout>
