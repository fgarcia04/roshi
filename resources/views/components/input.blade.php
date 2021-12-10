<label class="block mt-4 text-sm">
    <span class="text-gray-700 dark:text-gray-400">{{ __($label) }}</span>
    <input
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-orange-400 focus:outline-none focus:shadow-outline-orange dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error($name) border-red-600 @enderror"
        placeholder="{{ $placeholder }}" type="{{ $type }}" wire:model="{{ $name }}" />
    @error($name) <span class="error">
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror

</label>
