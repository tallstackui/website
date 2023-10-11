<x-layout>
    <x-slot:title>
        Icon
    </x-slot:title>
    <x-slot:description>
        Native support to all <a href="https://heroicons.com" class="underline" target="_blank">Heroicons.</a>
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5"/>
                <x-icon name="cog" class="h-5 w-5"/>
                <x-icon name="arrow-left" class="h-5 w-5"/>
                <x-icon name="arrow-right" class="h-5 w-5"/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outline">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5"/>
                <x-icon name="users" class="h-5 w-5" outline/>
                <x-icon name="clipboard" class="h-5 w-5"/>
                <x-icon name="clipboard" class="h-5 w-5" outline/>
            </div>
        </x-preview>
    </x-section>
</x-layout>
