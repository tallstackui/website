<x-layout>
    <x-slot:title>
        Color Personalization
    </x-slot:title>
    <x-slot:description>
        The primary and secondary color personalization.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            All the TallStackUi components are based on two custom classes: primary and secondary.
            You can customize these colors to your liking following the TailwindCSS custom color concept.
            Let's take a look at an example:
        </p>
    </x-section>
    <x-section title="Personalizing Colors">
        <p>1. Open the TailwindCSS configuration file and enter the following content:</p>
        <x-code language="js" :contents="$file"/>
        <x-warning text="Replace the hexadecimal values with your desired colors." />
        <p class="mt-2">2. After that, rebuild your assets:</p>
        <x-code language="shell" :contents="$rebuild"/>
        <p>3. After that, do a general clean up of Laravel using the command:</p>
        <x-code language="shell" :contents="$cleanup"/>
    </x-section>
</x-layout>
