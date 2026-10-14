<x-layout title="Cars">
    <div class="flex flex-wrap gap-4">
        @foreach($cars as $car)
            <artical class="h-96 justify-between grid grid-cols-1 border p-4 rounded-lg mt-10 w-80">
                <img class="h-40 w-full object-cover rounded-lg" src="{{asset('storage/' . $car->image)}}" alt="{{$car->title}}">

               <h2>{{$car->title}}</h2>
                <p class="block">{{$car->description}}</p>

                <div>
                    <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{route('detail', $car)}}">View details</a>
                    <a class="p-4 text-center bg-red-900 text-white rounded-lg" href="{{route('update', $car)}}">Edit / Delete</a>
{{--                    <form method="post" action="{{ route('cars.destroy', $car) }}">--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="p-4 text-center bg-red-900 text-white rounded-lg">Delete</button>--}}
{{--                    </form>--}}
               </div>

            </artical>
        @endforeach
    </div>
</x-layout>
