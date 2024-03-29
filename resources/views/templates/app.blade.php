<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dynamic Gallery Laravel</title>

  
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  
</head>
<body>
  @include('templates.partials.header')
  
    <main class="container container-sm">
      @yield('content')
    </main>
    
  {{-- @include('templates.partials.footer')--}}
  <script src="/js/app.js">

  </script>
</body>
</html>