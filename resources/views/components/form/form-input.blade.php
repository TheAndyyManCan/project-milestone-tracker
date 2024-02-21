@props(['name', 'type' => 'text'])
<div class="mx-2 p-2">
    <label for="name" class="text-md text-white mx-auto">{{ ucwords($name) }}</label><br />
    <input type="{{ $type }}"
           name="{{ $name }}"
           wire:model="{{ $name }}"
           class="bg-dark-200 rounded-lg text-dark-600 w-full mx-auto p-2 h-8 focus:ring-dark-600 focus:outline-none" />
    <x-form.error name="{{ $name }}" />
</div>
