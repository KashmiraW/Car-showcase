<style>
form{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-top: 30px;
}

label{
    font-weight: bold;
}

</style>

<x-layout title="Create car">
    <h1 class="mt-10 font-bold text-3xl">Create your own car</h1>
    <form method="POST" enctype="multipart/form-data" action="{{route('cars.store')}}">
        <div class="flex flex-col gap-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <span class="text-red-900">{{$message}}</span>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{old('description')}}</textarea>

            @error('description')
            <span class="text-red-900">{{$message}}</span>
            @enderror

        </div>

        <div class="flex flex-col gap-2 rounded-lg">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" value="{{old('image')}}">

            @error('image')
            <span class="text-red-900">{{$message}}</span>
            @enderror

        </div>

{{--        <div class="flex flex-col gap-2">--}}
{{--            <label for="brand">Brand</label>--}}
{{--            <input type="text" id="brand" name="brand" value="{{old('brand')}}">--}}

{{--            @error('brand')--}}
{{--            <span class="text-red-900">{{$message}}</span>--}}
{{--            @enderror--}}

{{--        </div>--}}

        <div>
            <button class="p-4 w-52 text-center bg-red-900 text-white rounded-lg" type="submit">Create</button>
        </div>

    </form>
</x-layout>


