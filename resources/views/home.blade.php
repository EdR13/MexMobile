@extends('layouts.home')
@section('content')
<h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Avaliable Phones
</h2>
@foreach($phones as $phone)
    <div class="flex items-center items-stretch	 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
        {{-- <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
            @foreach($images as $image)
                <div class="flex items-center p-2 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
                  <body>
                    @if( Str::startsWith($images->image, 'https'))
                      <a target="_blank" href="{{$images->image}}">
                          <img src="{{$images->image}}" style="max-height:100px; max-width:100px" alt="Phone Picture">
                      </a>
                    @else
                        <a target="_blank" href="/phones/{{$images->image}}">
                            <img src="/phones/{{$images->image}}" style="max-height:100px; max-width:100px" alt="Phone Picture">
                        </a>
                    @endif
                    @break
                  </body>
                </div>
            @endforeach
        </div> --}}
        <div class="w-full">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <a href="{{ route('phones.show', $phone->id) }}">{{ $phone->name }}</a> 
            </p>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Release Year: {{ $phone->release_year }}
            </p>
            <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                {{ $phone->os($phone->os_id) }}
            </p> 
        </div>
    </div>
@endforeach
@endsection