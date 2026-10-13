<x-layout title="Cars">
    <div class="flex flex-wrap gap-4">
        @foreach($cars as $car)

            <artical class=" grid grid-cols-1 border p-4 mb-4 rounded-lg mt-10 w-80">
             <div class="">
               <h2>{{$car->title}}</h2>
                <p class="block">{{$car->description}}</p>
                <a class="" href="{{route('detail', $car)}}">View details</a>
             </div>
            </artical>
        @endforeach
    </div>
</x-layout>
