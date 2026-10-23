
<x-layout title="Login">
    <div class="min-h-[70vh] flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-lg p-8">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-red-900">Welcome back</h1>
                <p class="mt-2 text-gray-600">Log in to your Car Showcase account</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
                @csrf

                <div class="flex flex-col gap-2">
                    <label for="email" class="font-semibold text-gray-800">Email address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="you@example.com"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-2 focus:ring-red-900"
                    >
                    @error('email')
                    <span class="text-sm text-red-900">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password" class="font-semibold text-gray-800">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-red-900 focus:ring-2 focus:ring-red-900"
                    >
                    @error('password')
                    <span class="text-sm text-red-900">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember" class="rounded border-gray-300 text-red-900 focus:ring-red-900">
                    <label for="remember" class="text-sm text-gray-600">Remember me</label>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-red-900 px-4 py-3 font-semibold text-white transition hover:bg-red-800"
                >
                    Log in
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold text-red-900 hover:underline">
                    Register
                </a>
            </p>

            <div class="mt-4 text-center">
                <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-red-900">
                    Return home
                </a>
            </div>

        </div>
    </div>
</x-layout>


