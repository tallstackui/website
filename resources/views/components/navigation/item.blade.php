@props(['route', 'title' => null, 'active' => false])

<li>
    <a href="{{ $route }}" class="block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-white hover:underline">
        {{ $title ?? $slot }}
    </a>
</li>
