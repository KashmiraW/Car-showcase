
<nav class="flex justify-between bg-red-900 p-10 text-white font-bold">
    <div class="space-x-4">
        <x-navlink href="{{route ('home')}}" :active="request() -> routeIs ('home')">Home</x-navlink>
        <x-navlink href="{{route ('about-us')}}" :active="request() -> routeIs ('about-us')">About Us</x-navlink>
        <x-navlink href="{{route ('cars.index')}}" :active="request() -> routeIs ('cars.index')">Cars</x-navlink>
    </div>

    <div class="flex items-center gap-4">
        @guest
            <x-navlink href="{{ route('login') }}" :active="request()->routeIs('login')">Login</x-navlink>
            <x-navlink href="{{ route('register') }}" :active="request()->routeIs('register')">Register</x-navlink>
        @else
            <span>{{ auth()->user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="rounded-lg bg-white px-4 py-2 text-red-900 hover:bg-gray-100">Log Out</button>
            </form>
        @endguest
    </div>
</nav>
