@extends('layouts.home')
@section('content')

    <h2 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Phone Details
    </h2>


    <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
      
      <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
                <div class="carousel relative shadow-2xl">
                <div class="carousel-inner relative overflow-hidden w-full">
                {{ $i=0; }}
                @foreach($images as $image)
                    <input class="carousel-open" type="radio" id="carousel-{{ $i }}" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <img src="{{$image->image}}" class="d-block w-32 h-28"  alt="Phone Picture">
                    </div>
                    <label for="carousel-{{ $i-1 }}" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-{{ $i+1 }}" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                {{ $i++ }}
                @endforeach
                </div>
            </div>
        </div>

        <div>
            <div class="flex items-stretch">
                <p class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    {{$phone->name}}
                </p>
                <div class="flex items-center space-x-4 text-sm">
                    <a href="phones/{{$phone->id}}/">
                        <button class="flex items-center justify-between px-2 py-1 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
          <p class="mb-2 text-sm font-semifold text-gray-700 dark:text-gray-200">
            Price: {{$phone->price}}
          </p>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Release year: {{$phone->release_year}}
          </p>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Color: {{ $phone->color($phone->color_id) }}
          </p>
          
          <ul class="mt-6">
            <li class="text-gray-700 dark:text-gray-300">
               Manufacturer: {{ $phone->manufacturer($phone->manufacturer_id) }}
            </li>
            <li class="text-gray-700 dark:text-gray-300">
                Operative System: {{ $phone->os($phone->os_id) }}
            </li>
            <li class="text-gray-700 dark:text-gray-300">
                Storage: {{$phone->storage}}
            </li>
            <li class="text-gray-700 dark:text-gray-300">
                Model: {{$phone->model}}
            </li>
            <li class="text-gray-700 dark:text-gray-300">
                Ram: {{$phone->ram}}
            </li>
            <li class="text-gray-700 dark:text-gray-300">
                Battery capacity: {{$phone->battery}}
            </li>
          </ul>
        </div>
    </div>

@endsection