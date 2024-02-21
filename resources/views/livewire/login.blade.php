<div class="border border-dark-600 rounded-xl bg-dark-300 w-1/2 mx-auto">
    <form wire:submit="login" class="p-6">
        <x-form.form-input name="email" type="email" />
        @error('email')
            <span class="ml-4 text-white uppercase font-semibold text-xs">{{ $message }}</span>
        @enderror
        <x-form.form-input name="password" type="password" />
        @error('password')
            <span class="ml-4 text-white uppercase font-semibold text-xs">{{ $message }}</span>
        @enderror
        <x-form.submit-button>Login</x-form.submit-button>
    </form>
</div>
