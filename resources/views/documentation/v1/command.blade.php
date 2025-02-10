<x-layout :$content>
    <x-slot:title>
        Commands
    </x-slot:title>
    <x-slot:description>
        TallStackUI available commands.
    </x-slot:description>
    <x-section title="Introduction" disable-copy>
        <p>
            TallStackUI offers several useful commands to help during the development
            process of your projects that use TallStackUI. On this page we will list
            all the commands and their references for explanations or details.
        </p>
    </x-section>
    <x-section title="Setup Icons" disable-copy>
        <p>
            Command to setup icons. <a class="underline" href="{{ route('documentation', ['v1', 'ui', 'icon']) }}" wire:navigate>
                See the details of the command and how to use it by clicking here.
            </a>
        </p>
    </x-section>
    <x-section title="Setup Prefix" disable-copy>
        <p>
            Command to setup prefix. <a class="underline" href="{{ route('documentation', ['v1', 'installation']).'#component-prefix' }}" wire:navigate>
                See the details of the command and how to use it by clicking here.
            </a>
        </p>
    </x-section>
    <x-section title="Find Component" disable-copy>
        <p>
            Command used to find component usages in all Blade files.
        </p>
        <x-code language="shell" :contents="$findComponent"/>
        <p>
            After running the command, you will need to select the component
            you want to find usages for, and then the command will list all
            the files that use the selected component, and also the line number
            where the component is used. When any occurrence is found, the output
            will be similar to the following:
        </p>
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/images/find-component-output.png') }}"
                 alt="Find Component Command Output">
        </div>
    </x-section>
</x-layout>
