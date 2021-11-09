<!-- This code below is extending the layout, found in views/layouts/layout.blade.php.  It will contain the header and styling sheet, as well as the closing tags at the bottom for body and html.  Extends is another blade directive. -->
@extends('layouts.layout')

<!-- This is a specific section of content, aptly named 'content'.  This is how we tie it to the yield in the layouts.blade.php file. -->
@section('content')

<div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
  <div>
    <h1>{{ $id }} - Pizza List</h1>
  </div>

</div>
@endsection