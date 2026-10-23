
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-semibold text-gray-800" />
            <x-text-input id="name" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-800" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-800" />

            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold text-gray-800" />

            <x-text-input id="password_confirmation" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900"
                          type="password"
                          name="password_confirmation"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-wrap items-center justify-between gap-4 mt-2">
            <a class="text-sm text-red-900 underline hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-red-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="rounded-lg bg-red-900 px-6 py-3 font-semibold text-white hover:bg-red-800 focus:bg-red-800 active:bg-red-950">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
