<x-layout>
    <x-slot:title>
        Commands
    </x-slot:title>
    <x-slot:description>
        TallStackUI available commands.
    </x-slot:description>
    <x-section title="Introduction" disable-copy>
        <p>
            TallStackUI provides some useful commands to help you during the development process
            of your projects that use TallStackUI. On this page, we will list all the commands
            and their references with details of the purpose of each command.
        </p>
    </x-section>
    <x-section title="Find Component" description="Command used to find component usages in all Blade files." disable-copy>
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
    <x-section title="Setup Prefix" description="Command used to set up component prefix." disable-copy>
        <x-code language="shell" :contents="$setupPrefix"/>
        <p>
            This command is used to set up the component prefix. <a href="{{ route('documentation.v2.component-prefix').'#command' }}" class="underline">You can read more about it by clicking here.</a>
        </p>
    </x-section>
    <x-section title="Setup Prefix" description="Command used to set up component prefix." disable-copy>
        <x-code language="shell" :contents="$setupColor"/>
        <p>
            This command is used to set up or manipulate component colors. <a href="{{ route('documentation.v2.personalization.color').'#create-or-manipulate-colors' }}" class="underline">You can read more about it by clicking here.</a>
        </p>
    </x-section>
</x-layout>
