<x-layout title="Create car">
    <form method="POST" enctype="multipart/form-data" action="{{route('cars.store')}}">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <span class="text-red-900">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description">{{old('description')}}</textarea>

            @error('description')
            <span class="text-red-900">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" value="{{old('image')}}">

            @error('image')
            <span class="text-red-900">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" value="{{old('brand')}}">

            @error('brand')
            <span class="text-red-900">{{$message}}</span>
            @enderror

        </div>

        <div>
            <button type="submit">Create</button>
        </div>

    </form>
</x-layout>


