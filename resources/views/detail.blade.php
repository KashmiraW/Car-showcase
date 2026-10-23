<x-layout title="details">
<section class="mt-10">
    <h1 class="font-bold text-3xl mb-5">{{ $car->title }}</h1>

    @if ($car->image)
        <img class="mb-6 w-full max-w-2xl rounded-lg object-cover" src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}">
    @endif

    <p class="mb-10">{{ $car->description }}</p>
    <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{ route('cars.index') }}">Go back</a>
</section>
</x-layout>
