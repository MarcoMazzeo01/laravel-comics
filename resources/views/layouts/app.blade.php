<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ env('APP_NAME') }} - @yield('page-title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <header class='mb-5'>
    @include('partials._navbar')
  </header>

  <main class='mb-5'>
    <div class="container">
      @yield('main-content')
    </div>
  </main>

  <footer>
    @include('partials._footer')
  </footer>
</body>

</html>
