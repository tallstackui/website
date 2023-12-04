<x-layout>
    <x-slot:title>
        Colors
    </x-slot:title>
    <x-slot:description>
        The colors personalization.
    </x-slot:description>
    <x-section :copy="false">
        <p>
            All TallStackUI components are based on three custom colors: primary, secondary and dark. Additionally,
            all other <a class="underline" href="https://tailwindcss.com/docs/customizing-colors" target="_blank">colors are the original TailwindCSS colors.</a> You can customize the primary and secondary
            colors to your liking by following the TailwindCSS custom color concept.
        </p>
    </x-section>
    <x-section title="Personalizing Colors" :copy="false">
        <p class="mb-4">1. Open the TailwindCSS configuration file and enter the following content:</p>
        <x-code language="js" :contents="$content" :copy="false"/>
        <x-warning text="Replace the hexadecimal values above with your desired colors." />
        <p class="mt-2">2. Rebuild your assets:</p>
        <x-code language="shell" :contents="$build"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.personalization.deep') }}" text="Deep Personalization" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.dark-theme') }}" text="Dark Theme" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
