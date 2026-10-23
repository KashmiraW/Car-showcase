
<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-800" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-800" />

            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-red-900"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-red-900 shadow-sm focus:ring-red-900" name="remember">
                <span class="ms-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4 gap-3">
            @if (Route::has('password.request'))
                <a class="text-sm text-red-900 underline hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-red-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 rounded-lg bg-red-900 px-6 py-3 text-white hover:bg-red-800 focus:bg-red-800 active:bg-red-950">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
