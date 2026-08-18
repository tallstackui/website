<x-layout :$content>
    <x-slot:title>Starter Kit</x-slot>
    <x-section title="About Starter Kit" disable-copy>
        The Starter Kit is a quick and easy way to begin a new Laravel project,
        containing everything essential for a basic Laravel project and
        including TallStackUI v4. Read the entire page to understand how to use
        the TallStackUI Starter Kit.
    </x-section>
    <x-section title="Ready to Use" disable-copy>
        <div class="space-y-4">
            <p>
                Here is the list of everything the TallStackUI starter kit
                delivers
                <i>out of the box:</i>
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>Laravel v13</li>
                <li>Livewire v4</li>
                <li>TallStackUI v4</li>
                <li>TailwindCSS v4</li>
            </ul>
            <p class="font-semibold text-pink-600">Features:</p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Basic
                    <x-block>sqlite</x-block>
                    database connection
                </li>
                <li>
                    Login, registration, password reset, profile update, 2FA.
                </li>
                <li>
                    Users
                    <x-block>C.R.U.D.</x-block>
                    example
                </li>
                <li>Dark theme switcher</li>
                <li>Full test covered</li>
                <li>All unnecessary comments removed</li>
            </ul>
            <x-warning info>
                The new version of the Starter Kit now uses the Laravel Fortify
                instead of Laravel Breeze.
            </x-warning>
            <p class="font-semibold text-pink-600">Tools and commands:</p>
            <ul class="list-inside space-y-2">
                <li>
                    Pest:
                    <x-code language="shell" :contents="$pest" />
                </li>
                <li>
                    PhpStan:
                    <x-code language="shell" :contents="$phpstan" />
                </li>
                <li>
                    Pint:
                    <x-code language="shell" :contents="$pint" />
                </li>
            </ul>
            <p>All in one:</p>
            <x-code language="shell" :contents="$ci" />
        </div>
    </x-section>
    <x-section title="How to Use" disable-copy>
        <div class="space-y-4">
            <p>
                As mentioned above, the TallStackUI starter kit requires the use
                of the
                <a
                    href="https://laravel.com/docs/12.x#creating-a-laravel-project"
                    target="_blank"
                    class="underline"
                >
                    Laravel installer.
                </a>
                <b>
                    If you want to use the TallStackUI starter kit without the
                    Laravel installer
                </b>
                you can
                <a
                    href="https://github.com/tallstackui/starter-kit"
                    target="_blank"
                    class="underline"
                >
                    clone the repository
                </a>
                , and then delete the
                <x-block>.git</x-block>
                folder to do not track changes of the starter kit. In this way,
                you will need to install the starter kit manually, which may
                require more knowledge and time.
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Start a new Laravel project using this command:
                    <x-code language="shell" :contents="$command" />
                </li>
                <li>
                    After executing the above mentioned command, you can follow
                    the normal Laravel installation process.
                    <b>
                        You may be asked several questions, just pay attention
                        and answer correctly
                    </b>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="First Usage" disable-copy>
        <div class="space-y-4">
            <p>
                On first use you will notice that the
                <x-block>welcome</x-block>
                page is actually the default Laravel page.
                <u>
                    However, at the top of the page there will be buttons for
                    login and registration.
                </u>
                You can create a new account or use the default account, which
                has the following credentials:
            </p>
            <ul class="list-inside space-y-2">
                <li>
                    Email:
                    <x-code language="txt" :contents="$email" />
                </li>
                <li>
                    Password:
                    <x-code language="txt" :contents="$password" />
                    <span class="text-xs">
                        <span class="text-red-500">*</span>
                        This password is intended to be used only locally.
                    </span>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Basic CRUD" disable-copy>
        <div class="space-y-4">
            <p>
                The TallStackUI starter kit includes a basic user
                <x-block>C.R.U.D.</x-block>
                that you can view by navigating to the
                <x-block>/users</x-block>
                page. The idea of this
                <x-block>C.R.U.D.</x-block>
                is just to provide a preview of a table structure for
                <i>listing, creating, updating</i>
                , and
                <i>destroying</i>
                users.
                <b>
                    Keep in mind that the authenticated user is not displayed in
                    the user list.
                </b>
            </p>
            <p>
                Internally, the
                <x-block>C.R.U.D.</x-block>
                uses the
                <x-block>App\Livewire\Users</x-block>
                namespace structure dividing each
                <x-block>C.R.U.D.</x-block>
                action in a specific Livewire component for a better
                organization:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    <x-block>Users\Index</x-block>
                    - Used to only list the users and also display other
                    components
                </li>
                <li>
                    <x-block>Users\Create</x-block>
                    - Used to create new users, called inside
                    <x-block>Index</x-block>
                </li>
                <li>
                    <x-block>Users\Update</x-block>
                    - Used to update users, called inside
                    <x-block>Index</x-block>
                </li>
                <li>
                    <x-block>Users\Delete</x-block>
                    - Used to delete users, called inside
                    <x-block>Index</x-block>
                </li>
            </ul>
            <p>
                The
                <x-block>Create</x-block>
                ,
                <x-block>Update</x-block>
                , and
                <x-block>Delete</x-block>
                are children of
                <x-block>Index</x-block>
                .
            </p>
        </div>
    </x-section>
    <x-section title="Caveats" disable-copy>
        <div class="space-y-4">
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    The starter kit uses a
                    <x-block>primary</x-block>
                    color based on the TallStackUI documentation color.
                </li>
                <li>
                    The starter kit is built on top of Laravel Fortify. Keep in
                    mind that all other aspects are modeled after the way
                    Laravel Fortify works.
                </li>
                <li>
                    Due to the way Laravel starter kit mechanism works,
                    <b>
                        any updates we make to the TallStackUI starter kit will
                        not be reflected in your project, but rather in new
                        installations
                    </b>
                    , because installation using starter kits is not based on
                    tags, but on the base branch of the repository.
                </li>
                <li>
                    If you want to improve the starter kit in any way,
                    <a
                        href="https://github.com/tallstackui/starter-kit"
                        target="_blank"
                        class="underline"
                    >
                        please send us a pull request.
                    </a>
                </li>
            </ul>
        </div>
    </x-section>
</x-layout>
