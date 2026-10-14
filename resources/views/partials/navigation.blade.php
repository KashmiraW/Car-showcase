
<nav class="flex justify-between bg-red-900 p-10 text-white font-bold">
    <div class="space-x-4">
        <x-navlink href="{{route ('home')}}" :active="request() -> routeIs ('home')">Home</x-navlink>
        <x-navlink href="{{route ('about-us')}}" :active="request() -> routeIs ('about-us')">About Us</x-navlink>
        <x-navlink href="{{route ('cars.index')}}" :active="request() -> routeIs ('cars.index')">Cars</x-navlink>
    </div>
    <div class="space-x-4">
        <x-navlink href="{{route ('login')}}" :active="request() -> routeIs ('login')">Login</x-navlink>
        <x-navlink href="{{route ('register')}}" :active="request() -> routeIs ('Register')">Register</x-navlink>
    </div>
</nav>
