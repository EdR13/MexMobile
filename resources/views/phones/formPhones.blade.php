@extends('layouts.home')
@section('content')
@include('alerts.alert')
<main class="h-full pb-16 overflow-y-auto">
  <div class="flex items-stretch ">
    @isset($phone)
    <div>
      <h2 class="text-centered my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Images
      </h2>
      @foreach ($images as $image)
        <form action="/deletePhoto/{{ $image->id }}" method="POST">
          <button class="btn text-danger">X</button>
          @csrf
          @method('delete')
        </form>
        <img src="{{ $image->image }}" class="object-cover h-auto w-32" style="max-height=100px;">
      @endforeach
    </div>
    @endisset
    <div class="container px-6 mx-auto grid">
        @isset($phone)
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Phone
            </h2>
            <form action="/phones/{{ $phone->id }}" method="POST" enctype="multipart/form-data">{{-- Actualizar (update) --}}
            @method('PATCH')
        @else
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Add New Phone
            </h2>
            <form action="{{ url('phones') }}" method="POST" enctype="multipart/form-data"> {{-- Crear --}}
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
                  <option value="64" {{  isset($phone) && $phone->storage == 64 ? 'selected' : '' }}>64 GB</option>
                  <option value="128" {{  isset($phone) && $phone->storage == 128 ? 'selected' : '' }}>128 GB</option>
                  <option value="256" {{  isset($phone) && $phone->storage == 256 ? 'selected' : '' }}>256 GB</option>
                  <option value="512" {{  isset($phone) && $phone->storage == 512 ? 'selected' : '' }}>512 GB</option>
                  <option value="1024" {{  isset($phone) && $phone->storage == 1024 ? 'selected' : '' }}>1024 GB</option>
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
                <input @error('battery') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="battery" name="battery" type="number" min="2800" max="7000" placeholder="In mAh" required value="{{isset($phone) ? $phone->battery: old('battery')}}" />
                @error('battery')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Device Color
                </span><br>
                <select @error('color_id') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="color" name="color">
                  <option></option>
                  @foreach ($colors as $color)
                    <option value="{{ $color->id }}" {{  isset($phone) && $phone->color_id == $color->id ? 'selected' : '' }}>{{ $color->color }}</option>
                  @endforeach
                </select>
                @error('color_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Manufacturer
                </span><br>
                <select @error('manufacturer_id') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="manufacturer" name="manufacturer">
                  <option></option>
                  @foreach ($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}" {{  isset($phone) && $phone->manufacturer_id == $manufacturer->id ? 'selected' : ''}}>{{ $manufacturer->name }}</option>
                  @endforeach
                </select>
                @error('manufacturer_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Operative System
                </span><br>
                <select @error('os_id') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="os" name="os">
                  <option></option>
                  @foreach ($os as $o)
                    <option value="{{ $o->id }}" {{  isset($phone) && $phone->os_id == $o->id ? 'selected' : '' }}>{{ $o->name }} - {{ $o->version }}</option>
                  @endforeach
                </select>
                @error('os_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  5G Compatibility
                </span><br>
                <select @error('fiveg_capable') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required id="fiveg_capable" name="fiveg_capable">
                  <option></option>
                  <option value="0" {{  isset($phone) && $phone->fiveg_capable == 0 ? 'selected' :''}}>No</option>
                  <option value="1" {{  isset($phone) && $phone->fiveg_capable == 1 ? 'selected' : '' }}>Yes</option>
                </select>
                @error('fiveg_capable')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm ">
                <span class="text-gray-700 dark:text-gray-400">Release Year</span>
                <input @error('release_year') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="release_year" name="release_year" type="number" min="2015" max="2022" required value="{{isset($phone) ? $phone->release_year: old('release_year')}}" />
                @error('release_year')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm ">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input @error('price') class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" @enderror class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id="price" name="price" type="number" min="0" max="100000" required value="{{isset($phone) ? $phone->price: old('price')}}" />
                @error('price')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Upload Images</span>
                <input accept="image/*" type="file" name="images[]" multiple class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                @error('images')
                <span class="text-xs text-red-600 dark:text-red-400 invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <img id="image-thumb" class="img-fluid img-thumbnail" src="">
            </label>

            <input class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" value="Upload" />
        </div>
    </div>
    </form>
  </div>
</main>
@endsection