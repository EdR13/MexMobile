@extends('layouts.home')
@section('content')
<h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Your Orders
</h2>
@foreach($orders as $order)
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 mt-4">
        <div class="w-full">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <a href="">{{ $order->phone->name }}</a> 
            </p>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                {{ $order->phone->color($phone->color_id) }}
            </p>
            <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                {{ $order->phone->os($phone->os_id) }}
            </p> 
            <p class="text-gray-700 dark:text-gray-400 min-w-2x1 mt-4">
                {{ $order->phone->price }}
            </p> 
        </div>
            <a onclick="document.getElementById('DeletePending-{{ $phone->id }}').submit();" href="javascript:void(null);">
                <!--Este es la función de eliminar, no se como integrarlo al diseño -->
                <form action="/orders/{{$order->id}}" method="post" id="DeletePending-{{ $order->id }}">
                    @csrf
                    @method('DELETE')
                </form>
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </a>
        </div>
    </div>
@endforeach
@endsection
