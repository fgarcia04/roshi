<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                    src="{{ asset('img/forgot-password-office.jpeg') }}" alt="Office" />
                <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                    src="{{ asset('img/forgot-password-office-dark.jpeg') }}" alt="Office" />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">
                    <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        {{ __('Reset Password') }}
                    </h1>
                    <x-form action="resetPassword">
                        <x-alert-danger />
                        <x-input type="password" label="Password" placeholder="********" name="password" />
                        <x-input type="password" label="Confirm Password" placeholder="********"
                            name="password_confirmation" />
                        <button type="submit"
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-orange-600 border border-transparent rounded-lg active:bg-orange-600 hover:bg-orange-700 focus:outline-none focus:shadow-outline-orange">
                            {{ __('Recover Password') }}
                        </button>
                    </x-form>
                    <hr class="my-8" />
                    <p>
                        <a class="text-sm font-medium text-orange-600 dark:text-orange-400 hover:underline"
                            href="{{ route('login') }}">
                            {{ __('Back') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
