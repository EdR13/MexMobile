@extends('layouts.home')
@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        @isset($phone)
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Phone
            </h2>
            <form action="/phone/{{ $phone->id }}" method="POST"  class="" enctype="multipart/form-data">{{-- Actualizar (update) --}}
            @method('PATCH')
        @else
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Add New Phone
            </h2>
            <form action="{{ url('/phone') }}" method="POST" enctype="multipart/form-data"> {{-- Crear --}}
        @endisset
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Phone Name</span>
                <input @error('name') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="name" name="name" type="text" min="5" max="45" placeholder="Name of the Phone" required value="{{ old('name') }} {{isset($phone) ? $phone->name: ''}}" />
                @error('name')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm ">
                <span class="text-gray-700 dark:text-gray-400">Phone Model</span>
                <input @error('model') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="model" name="model" type="text" min="5" max="45" placeholder="Model of the Phone" required value="{{ old('model') }} {{isset($phone) ? $phone->model: ''}}" />
                @error('model')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Storage Capacity
                </span><br>
                <select @error('storage') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="storage" name="storage">
                  <option></option>
                  <option value="64" {{  isset($phone) && $phone->storage == 64 ? 'selected' : old('storage') }}>64 GB</option>
                  <option value="128" {{  isset($phone) && $phone->storage == 128 ? 'selected' : old('storage') }}>128 GB</option>
                  <option value="256" {{  isset($phone) && $phone->storage == 256 ? 'selected' : old('storage') }}>256 GB</option>
                  <option value="512" {{  isset($phone) && $phone->storage == 512 ? 'selected' : old('storage') }}>512 GB</option>
                  <option value="1024" {{  isset($phone) && $phone->storage == 1024 ? 'selected' : old('storage') }}>1024 GB</option>
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  RAM
                </span><br>
                <select @error('ram') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="ram" name="ram">
                  <option></option>
                  <option value="4" {{  isset($phone) && $phone->ram == 4 ? 'selected' : old('ram') }}>4 GB</option>
                  <option value="6" {{  isset($phone) && $phone->ram == 6 ? 'selected' : old('ram') }}>6 GB</option>
                  <option value="8" {{  isset($phone) && $phone->ram == 8 ? 'selected' : old('ram') }}>8 GB</option>
                  <option value="12" {{  isset($phone) && $phone->ram == 12 ? 'selected' : old('ram') }}>12 GB</option>
                </select>
              </label>
              <label class="block mt-4 text-sm ">
                <span class="text-gray-700 dark:text-gray-400">Battery Capacity</span>
                <input @error('batery') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="battery" name="battery" type="number" min="2800" max="7000" placeholder="In mAh" required value="{{ old('battery') }} {{isset($phone) ? $phone->battery: ''}}" />
                @error('batery')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
        </div>
    </div>

</main>

    <br>
    <div class="mb-3">
        <label for='manufacter'>Manufacter:</label>
        <input type="text" name="manufacter" class="form-control" tabindex="1" value="{{ old('manufacter') ?? $phone->manufacter ?? ''}}"> 
    </div>
    @error('manufacter')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for='color'>Color:</label>
        <input type="text" id="color" name="color" class="form-control" tabindex="2" value="{{ old('color') ?? $phone->color ?? ''}}">
    </div>
    <div class="mb-3">
        <label for='os'>OS:</label>
        <input type="text" name="os" step="0.1" class="form-control" tabindex="3" value="{{ old('os') ?? $phone->os ?? ''}}">
    </div>
    <div class="mb-3">
        <label for='batery'>Batery:</label>
        <input type="number" id="batery" name="batery" class="form-control" tabindex="8" value="{{ old('batery') ?? $phone->batery ?? ''}}">
    </div>
    <div class="mb-3">
        <label for='release_year'>5g capable:</label>  
    </div>
    <div class="mb-3">
        <label for='release_year'>Release year:</label>
        <input type="number" name="release_year" step="0.1" class="form-control" tabindex="10" value="{{ old('release_year') ?? $phone->release_year ?? ''}}">
    </div>
    <div class="mb-3">
        <label for='price'>Price:</label>
        <input type="number" name="price" step="0.1" class="form-control" tabindex="11" value="{{ old('price') ?? $phone->price ?? ''}}">
    </div>
    <div class="mb-3">
        <label for='photo'>Photo:</label>
        <input type="text" name="photo" step="0.1" class="form-control" tabindex="12" value="{{ old('photo') ?? $phone->photo ?? ''}}">
    </div>
    <input type="submit" value="Guardar" class="btn btn-primary" tabindex="13" />
    </form>
@endsection