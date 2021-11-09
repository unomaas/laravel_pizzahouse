<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link href="/css/main.css" rel="stylesheet">
</head>

<body class="antialiased">
  <!-- Here is how we tie in the content from the pizzas.blade.php file.  The `@section('content')` will be produced here. -->
  @yield('content')

  <footer>
    Copyright 2021 Pizza House
  </footer>
</body>

</html>