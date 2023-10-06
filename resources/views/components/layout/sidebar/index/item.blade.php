@props(['title', 'anchor'])

<li>
    <a class="hover:text-slate-600 dark:hover:text-slate-300"
       href="{{ $anchor }}">{{ $title }}</a>
</li>
