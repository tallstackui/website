@props([
    'id',
    'code',
    'title' => null,
    'description' => null,
    'numbers' => false,
    'language' => 'php',
])

<div x-data="{ code : false }" @isset($id) id="{{ $id }}" @endisset>
    <div class="flex items-center justify-between">
        <div>
            @if ($title)
                <h1 @class(['text-xl tracking-tight text-slate-900 font-medium', 'mb-4' => !$description])>
                    {{ $title }}
                </h1>
            @endif
            @if ($description)
                <p class="mb-4 text-sm text-slate-500">{{ $description }}</p>
            @endif
        </div>
        <div class="flex">
            <button class="flex items-center overflow-hidden rounded-md p-1 focus:outline-none sm:px-2"
                    :class="{
                    'dark:bg-secondary-700 text-red-500 font-semibold':  code,
                    'text-gray-400': !code
                }" type="button" x-on:click="code = !code" x-cloak>
                <x-icon name="code-bracket" class="h-5 w-5" />
            </button>
        </div>
    </div>
    <div>
        <div x-show="!code" class="rounded-lg bg-white p-6">
            {{ $slot }}
        </div>
        <div class="overflow-auto custom-scrollbar rounded-lg bg-[#292D3E]" x-cloak x-show="code">
            <x-code :language="$language" :contents="$code" :line-numbers="$numbers" />
        </div>
    </div>
</div>
