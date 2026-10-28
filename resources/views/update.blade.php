
<style>
    .car-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 30px;
    }

    label {
        font-weight: bold;
    }
</style>

<x-layout title="edit">
    <h1 class="mt-10 font-bold text-3xl">Edit your car</h1>

    <form class="car-form"  method="POST" enctype="multipart/form-data" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $car->title) }}" required>

            @error('title')
            <span class="text-red-900">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="description">Description</label>
            <textarea id="description" name="description" required>{{ old('description', $car->description) }}</textarea>

            @error('description')
            <span class="text-red-900">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col gap-2 rounded-lg">
            <label for="image">Current image</label>

            @if ($car->image)
                <img class="w-52 rounded-lg" src="{{ asset('storage/' . $car->image) }}">
            @endif

            <label for="image">Choose a new image</label>
            <input type="file" name="image" id="image" accept="image/*">

            @error('image')
            <span class="text-red-900">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button class="p-4 w-52 text-center bg-red-900 text-white rounded-lg" type="submit">Save changes</button>
        </div>
    </form>


    @auth
        @if (auth()->user()->role === 'admin')
            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car?');">
                @csrf
                @method('DELETE')

                <button type="submit" class="p-4 w-52 text-center bg-black text-white rounded-lg">Delete</button>
            </form>
        @endif
    @endauth

</x-layout>
