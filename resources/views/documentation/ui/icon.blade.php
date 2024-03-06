<x-layout>
    <x-slot:title>
        Icon
    </x-slot:title>
    <x-slot:description>
        Icon support for Heroicons, PhosphorIcons, and Google Material Design Icons.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            <u>Before version 1.20, TallStackUI only supported one icon library, Heroicons.</u> Heroicons
            is a beautiful library, but there is a problem: the low number of icons, there are
            only around 300 icons. Due to many requests, <u>starting from version 1.20, TallStackUI now supports three
            icon libraries,</u> offering more than 10K icons. A small change needs to be
            made so that you can use the new supported icon libraries, this change must be made in the
            <a href="{{ route('documentation.configuration') }}" class="underline">configuration file.</a>
        </p>
        <div class="mt-4">
            <p>This is the <b class="underline">old icon configuration</b> in the configuration file:</p>
            <x-code :contents="$oldConfiguration" disable-copy />
            <p>This is the <b class="underline">new icon configuration</b> for the configuration file:</p>
            <x-code :contents="$newConfiguration" />
            <x-warning class="mt-2">
                <b class="underline">If you have been using TallStackUI since before version 1.20</b>, you must update
                your configuration file to adapt it to the new icon configuration, otherwise,
                you will not be able to use the new icon libraries and also can get some exceptions.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Supported Icon Libraries" disable-copy>
        <p>
            This is the current list of supported icon libraries:
        </p>
        <ul class="mt-2 list-decimal list-inside ml-2">
            <li><a href="https://heroicons.com/" target="_blank">Heroicons</a></li>
            <li><a href="https://phosphoricons.com/" target="_blank">PhosphorIcons</a></li>
            <li><a href="https://fonts.google.com/icons" target="_blank">Google Material Design Icons</a></li>
        </ul>
    </x-section>
    <x-section title="Setup Icons" disable-copy>
        <p>
            If you want to change the icon library to one of the supported ones follow these steps.
            Let's assume you want to use the PhosphorIcons library in your project.
        </p>
        <div class="mt-4">
            <p>1) Edit the configuration file according you want:</p>
            <x-code :contents="$startSetupIconLibrary" disable-copy />
            <p class="mt-2">2) Save the file and run the following command in your terminal:</p>
            <x-code language="shell" :contents="$commandSetupIcon" />
            <p>
                This command is responsible for downloading and preparing the new icon library
                within your project. Due to the way the icons are downloaded and stored, when
                deploying your project to production you will have to run the same command in
                the production environment. To avoid this manual work, you can add this
                instruction to a Composer hook:
            </p>
            <x-code language="json" :contents="$composerHook" />
            <p>
                Using this approach, every time you run the <x-block>composer install</x-block>
                or <x-block>composer update</x-block> commands, the icon library will be downloaded
                and prepared automatically, avoiding need to run the command manually.
            </p>
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5"/>
                <x-icon name="clipboard" class="h-5 w-5"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Variations">
        <p>
            The variations will be available depending on the type of icon library. For example, for Heroicons
            you can use <x-block>outline</x-block>, as it is an available style, but this same style will not be applied to
            Phosphoricons. As for Google icons, the variations are linked to the icon name.
        </p>
        <x-code language="blade" :contents="$variations" disable-copy />
    </x-section>
    <x-section title="Left & Right Slots">
        <x-preview language="blade" :contents="$leftRight">
            <div class="inline-flex space-x-2">
                <x-icon name="users" class="h-5 w-5">
                    <x-slot:left>
                        Users
                    </x-slot:left>
                </x-icon>
                <x-icon name="cog" class="h-5 w-5">
                    <x-slot:right>
                        Settings
                    </x-slot:right>
                </x-icon>
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.error')" text="Error" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.modal')" text="Modal" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
