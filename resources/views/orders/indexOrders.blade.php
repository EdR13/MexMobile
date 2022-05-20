@extends('layouts.home')
@section('content')
@include('alerts.alert')

<h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Your Orders
</h2>
@foreach ($orders as $order )
    @foreach($phones as $phone)
        @if($order->phone_id==$phone->id)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
                <div class="w-full">
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('phones.show', $phone->id) }}">{{ $phone->name }}</a> 
                    </p>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        {{ $phone->color($phone->color_id) }}
                    </p>
                    <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                        Operative System: {{ $phone->os($phone->os_id) }}
                    </p> 
                    <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                        Price: {{ $phone->price }}
                    </p>
                </div>
            </div>
        @endif
    @endforeach
@endforeach
@endsection
