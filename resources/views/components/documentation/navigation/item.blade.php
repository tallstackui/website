@props(['route', 'title' => null, 'blank' => false, 'navigate' => true])

<li>
    <a href="{{ $route }}" @if ($blank) target="_blank" @endif
       class="block rounded-md py-2 pr-2 pl-9 text-sm leading-6 text-white hover:underline" @if ($navigate) wire:navigate @endif>
        {{ $title ?? $slot }}
    </a>
</li>
