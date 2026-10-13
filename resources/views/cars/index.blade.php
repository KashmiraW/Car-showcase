<x-layout title="Cars">
        @foreach($cars as $car)
            <div>
            <artical class="grid grid-cols-1 border p-4 mb-4 rounded-lg gap-4 mt-10">
                <h2>{{$car->title}}</h2>
                <p class="block">{{$car->description}}</p>
                <a href="{{route('detail', $car)}}">View details</a>
            </artical>
            </div>
        @endforeach
</x-layout>
