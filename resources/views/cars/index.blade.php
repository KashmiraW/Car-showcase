<x-layout title="Cars">

    <form class="flex flex-col sm:flex-row gap-3 mt-6 mb-8" method="GET" action="{{route('cars.index')}}">
        <input class="border border-gray-300 rounded-lg p-3 flex-1" type="text" name="search" placeholder="Search cars" value="{{$search ?? ''}}">
        <button class="p-3 bg-red-900 text-white rounded-lg" type="submit">Search</button>
        <a class="p-3 border border-gray-300 rounded-lg text-center" href="{{ route('cars.index') }}">Clear search</a>
    </form>

    @if ($cars->isEmpty())
        <p class="mt-6 text-gray-600">No cars found. Try another search.</p>
    @else

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($cars as $car)
            <artical class="h-96 justify-between grid grid-cols-1 border p-4 rounded-lg mt-10 w-80">
                <img class="h-40 w-full object-cover rounded-lg" src="{{asset('storage/' . $car->image)}}" alt="{{$car->title}}">

               <strong>{{$car->title}}</strong>
                <p class="block">{{$car->description}}</p>
                <div>
                    <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{route('cars.show', $car->id)}}">View details</a>
                    <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{route('cars.edit', $car->id)}}">Edit/Delete</a>
                </div>

            </artical>
        @endforeach
    </div>
    @endif
</x-layout>
