<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自炊継続アプリ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/button.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/show.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
  <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
</head>
<body>
@component('components.header')
@endcomponent
  <main class="main">
      @yield('content')
  </main>
</body>
</html>