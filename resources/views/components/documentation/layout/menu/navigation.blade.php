<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 ring-1 ring-white/5">
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <x-navigation.item :route="route('dashboard')" title="Welcome" :active="true" />
                    <x-navigation title="Getting Started">
                        <x-navigation.item :route="route('dashboard')" title="Installation" />
                    </x-navigation>
                    <x-navigation title="Components">
                        <x-navigation title="Form" sub>
                            <x-navigation.item :route="route('dashboard')" title="Installation" />
                        </x-navigation>
                        <x-navigation title="UI" sub>
                            <x-navigation.item :route="route('dashboard')" title="Installation" />
                        </x-navigation>
                    </x-navigation>
                </ul>
            </li>
            <li class="-mx-6 mt-auto">
                <a href="#" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">
                    <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <span class="sr-only">Your profile</span>
                    <span aria-hidden="true">Tom Cook</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
