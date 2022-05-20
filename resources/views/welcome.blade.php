@extends('layouts.welcome-base')
@section('content')
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Welcome to MexMobile
    </h2>
    
    <p  class="my-6 text-gray-700 dark:text-gray-200">
        Remember that you need to be logged to use the app.
    </p>    
    <div class="px-6 my-6">
        <a
        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="/register"
        >
        Register
        <span class="ml-2" aria-hidden="true">+</span>
        </a>
    </div>
    <div class="px-6 my-6">
        <a
        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="/login"
        >
        Login
        <span class="ml-2" aria-hidden="true">+</span>
        </a>
    </div>

@endsection
