@extends('layouts.home')
@section('content')
<h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Avaliable Phones
</h2>
@foreach($phones as $phone)
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
        {{--<img src="{{ $pelicula-> imagen }}" width="150" class="p-2 mr-3">--}}
        <div class="w-full">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <a href="">{{ $phone->name }}</a> 
            </p>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Release Year: {{ $phone-> release_year }}
            </p>
            <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                {{ $phone->operative_system($phone->os_id) }}
            </p> 
        </div>
    </div>
@endforeach
@endsection