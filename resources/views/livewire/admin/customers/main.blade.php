<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Customers') }}
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <x-form action="store">
            <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                <div class="col-span-full sm:col-span-3">
                    <x-input type="text" label="Name" placeholder="Fulano Mengano" name="name" />
                </div>
                <div class="col-span-full sm:col-span-3">
                    <x-input type="text" label="E-Mail Address" placeholder="email@address.com" name="email" />
                </div>
            </div>
            <button type="submit"
                class="flex items-center justify-between px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                <span>{{ __('Create Customer') }}</span>
            </button>

        </x-form>
    </div>

</div>
