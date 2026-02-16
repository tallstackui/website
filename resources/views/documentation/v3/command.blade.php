<x-layout :$content>
    <x-slot:title>
        Commands
    </x-slot:title>
    <x-slot:description>
        TallStackUI available commands.
    </x-slot:description>
    <x-section title="Introduction" disable-copy>
        TallStackUI provides some useful commands to help you during the development process
        of your projects that use TallStackUI. On this page, we will list all the commands
        and their references with details of the purpose of each command.
    </x-section>
    <x-section title="Find Component" description="Command used to find component usages in all Blade files." disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$find"/>
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
        </div>
    </x-section>
    <x-section title="Setup Prefix" description="Command used to set up component prefix." disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$prefix"/>
            <p>
                This command is used to set up the component prefix. <a href="{{ route('documentation', ['v3', 'component-prefix']) }}" class="underline">Read more about it by clicking here.</a>
            </p>
        </div>
    </x-section>
    <x-section title="Setup Colors" description="Command used to set up component colors." disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$colors"/>
            <p>
                This command is used to set up or manipulate component colors. <a href="{{ route('documentation', ['v3', 'customization', 'color']).'#create-or-manipulate-colors' }}" class="underline" wire:navigate>Read more about it by clicking here.</a>
            </p>
        </div>
    </x-section>
    <x-section title="IDE" description="Command used to generate ide.json file." disable-copy>
        <div class="space-y-4">
            <p>
                The version 2.0 of TallStackUI introduces the <x-block>ide</x-block> command:
            </p>
            <x-code language="shell" :contents="$ide"/>
            <p>
                This command will map all the components based on the TallStackUI configuration file to create an <x-block>ide.json</x-block> file - in the base path of the Laravel application,
                which will be used by the <a href="https://laravel-idea.com/" class="underline" target="_blank">Laravel Idea - PhpStorm plugin</a>, to scan the TallStackUI component class and
                provide autocomplete functionality for TallStackUI components. You need to restart your PhpStorm after running the command.
            </p>
        </div>
    </x-section>
</x-layout>
