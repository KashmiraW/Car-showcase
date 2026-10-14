<x-layout title="Cars">
    <div class="flex flex-wrap gap-4">
        @foreach($cars as $car)
            <artical class="h-96 justify-between grid grid-cols-1 border p-4 rounded-lg mt-10 w-80">
                <img class="h-40" src="{{asset('storage/' . $car->image)}}" alt="{{$car->title}}">

               <h2>{{$car->title}}</h2>
                <p class="block">{{$car->description}}</p>
                <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{route('detail', $car)}}">View details</a>

            </artical>
        @endforeach
    </div>
</x-layout>
