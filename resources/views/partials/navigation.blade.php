
<nav>
    <x-navlink href="{{route ('home')}}" :active="request() -> routeIs ('home')">Home</x-navlink>
    <x-navlink href="{{route ('about-us')}}" :active="request() -> routeIs ('about-us')">About Us</x-navlink>
    <x-navlink href="{{route ('contact-us')}}" :active="request() -> routeIs ('contact-us')">Contact</x-navlink>
    <x-navlink href="{{route ('login')}}" :active="request() -> routeIs ('login')">Login</x-navlink>
    <x-navlink href="{{route ('register')}}" :active="request() -> routeIs ('Register')">Register</x-navlink>
</nav>
