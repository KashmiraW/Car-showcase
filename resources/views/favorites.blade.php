<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">My Favorites</h1>
        @if ($cars->isEmpty())
            <p>You haven't added any favorites yet.</p>
        @else

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($cars as $car)
                    <div class="bg-white shadow rounded-lg p-4">

                        @if ($car->image)
                            <img class="w-full h-48 object-cover rounded" src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}">
                        @endif

                        <h2 class="text-xl font-bold mt-3">{{ $car->title }}</h2>
                            <p class="mt-2">{{ $car->description }}</p>

                            <div class="flex flex-wrap items-center gap-2 mt-4">
                                <a class="bg-red-900 text-white px-4 py-2 rounded" href="{{ route('cars.show', $car->id) }}">View details</a>

                                <form action="{{ route('favorites.destroy', $car) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-black text-white px-4 py-2 rounded" type="submit">Remove from Favorites</button>
                                </form>
                            </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
