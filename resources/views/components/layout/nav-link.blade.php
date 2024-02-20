@props(['link'])
<li class="inline px-2 hover:text-dark-600"><a href="{{ $link }}" wire:navigate>{{ $slot }}</a></li>
