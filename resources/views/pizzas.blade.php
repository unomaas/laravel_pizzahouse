<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body>
  <div class="content">
    <div>
      Pizza List
    </div>

    <table>
      <tr>
        <th>Index</th>
        <th>Type</th>
        <th>Base</th>
        <th>Price</th>
      </tr>
      <!-- @for ($i = 0; $i < count($pizzas); $i++) 
      <tr>
        <td>{{ $pizzas[$i]['type'] }}</td>
        <td>{{ $pizzas[$i]['base'] }}</td>
        <td>${{ $pizzas[$i]['price'] }}</td>
      </tr>
      @endfor -->
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
</body>

</html>

<!-- <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
        Pizza List
      </div>
      
    </div>
  </div>

    This is also Blade helping out, allowing us to use logic.
    It's called a blade 'directive'. Notice that there's no curly brackets,
    it just ends with another blade directive.-->
<!-- @if ($price ?? '' > 15)
    <p>This pizza is expensive.</p>
    @elseif ($price ?? '' < 5) <p>This pizza is cheap.</p>
      @else
      <p>This pizza is normally priced.</p>
      @endif
      <!-- This closes the if directive. -->

<!-- Unless is kind of like the opposite to if, and is another directive. 
    It basically means !if or !true. -->
<!-- @unless ($base ?? '' == 'cheesy crust')
      <p>You don't have a cheesy crust.</p>
      @endunless -->

<!-- This is the php directive, to output regular PHP if we want. -->
<!-- Why would we want to do regular vanilla PHP?  Blade is great,
      but basically PHP is bigger. -->
<!-- @php
      $name = 'ryan';
      echo($name);
      @endphp

-->