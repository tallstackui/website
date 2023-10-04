@props(['title', 'sub' => false])

<li>
    <div x-data="{ expand : true }">
        <button x-on:click="expand = !expand"
                type="button"
                @class([
                    'flex w-full items-center gap-x-3 rounded-md p-2 text-left font-semibold leading-6 text-white hover:underline',
                    'text-md' => !$sub,
                    'text-sm' => $sub,
                ])>
            <x-icon name="chevron-right" class="h-4 w-4 text-gray-400" x-show="!expand" />
            <x-icon name="chevron-down" class="h-4 w-4 text-gray-400" x-show="expand" />
            {{ $title }}
        </button>
        <ul x-show="expand" class="mt-1 px-2" id="sub-menu-1">
            {{ $slot }}
        </ul>
    </div>
</li>
