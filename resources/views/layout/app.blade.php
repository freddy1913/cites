<!doctype html>
<html lang="fr">
  <head>
    <title>Appli cités</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('content')
    

  </body>
</html>