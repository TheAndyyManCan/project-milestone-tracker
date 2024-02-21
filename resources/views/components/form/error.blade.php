@props(['name'])
@error('{{ $name }}')
    <span class="ml-4 text-white uppercase font-semibold text-xs">{{ $message }}</span>
@enderror
