<!-- This code below is extending the layout, found in views/layouts/layout.blade.php.  It will contain the header and styling sheet, as well as the closing tags at the bottom for body and html.  Extends is another blade directive. -->
@extends('layouts.layout')

<!-- This is a specific section of content, aptly named 'content'.  This is how we tie it to the yield in the layouts.blade.php file. -->
@section('content')

<div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
  <div>
    <h1>Pizza List</h1>
  </div>

  <p>{{$name}}</p>
  <p>{{$age}}</p>

  <div>
    <table style="margin: 0 auto;">

      <tr>
        <th>Index</th>
        <th>Type</th>
        <th>Base</th>
        <th>Price</th>
        <th>Notes</th>
      </tr>

      @foreach ($pizzas as $pizza)
      <tr>
        <td>{{ $loop -> index }}</td>
        <td>{{ $pizza['type'] }}</td>
        <td>{{ $pizza['base'] }}</td>
        <td>${{ $pizza['price'] }}</td>

        @if ($loop -> first)
        <td>First in the loop!</td>
        @endif

        @if ($loop -> last)
        <td>Last in the loop!</td>
        @endif
      </tr>
      @endforeach

    </table>
  </div>
</div>
@endsection