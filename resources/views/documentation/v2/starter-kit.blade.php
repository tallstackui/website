<x-layout :$content>
    <x-slot:title>
        Starter Kit
    </x-slot:title>
    <x-section class="mt-4" title="About Starter Kit" disable-copy>
        The release of Laravel 12 brought the long-awaited support for community starter kits through the <a href="https://laravel.com/docs/12.x#creating-a-laravel-project" target="_blank" class="underline">Laravel installer.</a>
        The idea behind starter kits is to offer a ready-to-use base project containing customizations specific to each use case.
        The TallStackUI starter kit offers a simple project, yet fully prepared for real use. <b>The biggest benefit of
        using the TallStackUI starter kit is saving time on basic setup of new Laravel projects.</b>
    </x-section>
    <x-section class="mt-4" title="Ready to Use" disable-copy>
        <div class="space-y-4">
            <p>Here is the list of everything the TallStackUI starter kit delivers <i>out of the box:</i></p>
            <ul class="ml-4 list-decimal list-inside">
                <li>Laravel 12</li>
                <li>Livewire 3</li>
                <li>TallStackUI 2</li>
                <li>TailwindCSS v4</li>
            </ul>
            <x-warning>
                <b>TallStackUI support both TailwindCSS versions, v3 and v4</b>, but we have no plans to create a TallStackUI starter kit based on TailwindCSS v3 since the main version of TailwindCSS is now v4.
            </x-warning>
            <p class="font-semibold text-pink-600">Features:</p>
            <ul class="ml-4 list-decimal list-inside">
                <li>Basic <x-block>sqlite</x-block> database connection</li>
                <li>Basic login and registration</li>
                <li>Basic profile update page</li>
                <li>Dark theme switcher</li>
                <li>Users <x-block>C.R.U.D.</x-block> example</li>
                <li>Full test covered</li>
            </ul>
            <p class="font-semibold text-pink-600">Tools:</p>
            <ul class="ml-4 list-decimal list-inside">
                <li>Pest - <x-block>composer test</x-block> command</li>
                <li>PhpStan - <x-block>composer analyse</x-block> command</li>
                <li>Pint - <x-block>composer format</x-block> command</li>
            </ul>
        </div>
    </x-section>
    <x-section class="mt-4" title="How to Use" disable-copy>
        <div class="space-y-4">
            <p>
                As mentioned above, the TallStackUI starter kit requires the use of the <a href="https://laravel.com/docs/12.x#creating-a-laravel-project" target="_blank" class="underline">Laravel installer.</a>.
            </p>
            <ul class="list-decimal list-inside">
                <li>
                    Start a new Laravel project using this command:
                    <x-code language="shell" :contents="$command" />
                </li>
                <li>After executing the above mentioned command, you can follow the normal Laravel installation process. <b>You may be asked several questions, just pay attention and answer correctly</b></li>
            </ul>
        </div>
    </x-section>
    <x-section class="mt-4" title="First Usage" disable-copy>
        <div class="space-y-4">
            <p>
                On first use you will notice that the <x-block>welcome</x-block> page is actually the default Laravel page.
                <u>However, at the top of the page there will be buttons for login and registration.</u> You can create a new account
                or use the default account, which has the following credentials:
            </p>
            <ul class="list-inside">
                <li>
                    Email:
                    <x-code language="txt" :contents="$email" />
                </li>
                <li>
                    Password:
                    <x-code language="txt" :contents="$password" />
                </li>
            </ul>
        </div>
    </x-section>
    <x-section class="mt-4" title="Basic CRUD" disable-copy>
        <div class="space-y-4">
            <p>
                The TallStackUI starter kit includes a basic user <x-block>C.R.U.D.</x-block> that you can view by navigating to the <x-block>/users</x-block> page.
                The idea of this <x-block>C.R.U.D.</x-block> is just to provide a preview of a table structure for <i>listing, creating, updating</i>, and <i>destroying</i> users.
                <b>Keep in mind that the authenticated user is not displayed in the user list.</b>
            </p>
            <p>
                Internally, the <x-block>C.R.U.D.</x-block> uses the <x-block>App\Livewire\Users</x-block>
                namespace structure dividing each <x-block>C.R.U.D.</x-block> action in a specific Livewire component for a better organization:
            </p>
            <ul class="list-decimal list-inside">
                <li><x-block>Users\Index</x-block> - Used to only list the users and also display other components</li>
                <li><x-block>Users\Create</x-block> - Used to create new users, called inside <x-block>Index</x-block></li>
                <li><x-block>Users\Update</x-block> - Used to update users, called inside <x-block>Index</x-block></li>
                <li><x-block>Users\Delete</x-block> - Used to delete users, called inside <x-block>Index</x-block></li>
            </ul>
            <p>
                The <x-block>Users\Update</x-block> and <x-block>Users\Delete</x-block> are called inside the loop of the table.
            </p>
        </div>
    </x-section>
    <x-section class="mt-4" title="Caveats" disable-copy>
        <div class="space-y-4">
            <ul class="list-decimal list-inside space-y-2">
                <li>
                    The starter kit uses a <x-block>primary</x-block> color based on the TallStackUI documentation color.
                </li>
                <li>
                    The starter kit is built on top of Laravel Breeze. Keep in mind that all other aspects are modeled after the way Laravel Breeze works.
                </li>
                <li>
                    Due to the way Laravel starter kit mechanism works, <b>any updates we make to the TallStackUI starter kit will not be reflected in your project, but rather in new installations</b>, because installation using starter kits is not based on tags, but on the base branch of the repository.
                </li>
                <li>
                    If you want to improve the starter kit in any way, <a href="https://github.com/tallstackui/starter-kit" target="_blank" class="underline">please send us a pull request.</a>
                </li>
            </ul>
        </div>
    </x-section>
</x-layout>
