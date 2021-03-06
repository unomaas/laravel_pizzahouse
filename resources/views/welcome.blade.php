<!-- This code below is extending the layout, found in views/layouts/layout.blade.php.  It will contain the header and styling sheet, as well as the closing tags at the bottom for body and html.  Extends is another blade directive. -->
@extends('layouts.layout')


<!-- This is a specific section of content, aptly named 'content'.  This is how we tie it to the yield in the layouts.blade.php file. -->
@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
  </div>
  @endif

  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style>
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
      <img src="/img/pizzahouse.png" alt="Pizza House Logo" />
    </div>

    <div class="title">
      The North's Best Pizza's
    </div>


  </div>
</div>
@endsection