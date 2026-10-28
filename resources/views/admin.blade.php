<x-layout title="admin">

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Admin - Cars</h1>

        @foreach ($cars as $car)
            <div class="mb-4 p-5 border rounded-lg">

                <div class="grid grid-cols-[50px_minmax(200px,1fr)_180px_120px_190px_60px] items-center gap-4">
                     <p class="text-gray-500">{{ $car->id }}</p>

                    <h2 class="text-lg font-bold">{{ $car->title }}</h2>

                    <p class="text-gray-600">{{ $car->created_at->format('d-m-Y H:i') }}</p>
                    <p class="{{ $car->is_active ? 'text-green-700' : 'text-red-700' }}">{{ $car->is_active ? 'Active' : 'Non-active' }}</p>

                    <form action="{{ route('cars.changeStatus', $car) }}" method="POST">
                        @csrf
                        <button class="bg-red-900 text-white px-3 py-2 rounded whitespace-nowrap" type="submit">{{ $car->is_active ? 'Make non-active' : 'Make active' }}</button>
                    </form>

                    <a class="text-gray-700 underline" href="{{ route('cars.edit', $car->id)}}">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
