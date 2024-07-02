<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pusat Data Nasional</title>
</head>

<body>
  @include('Layouts.navbar')
  <div class="container py-5">
  @yield('body')</div>
 
</body>
</html>