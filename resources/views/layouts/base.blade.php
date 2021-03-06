<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page-title', 'dccomics')</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  @include('partials.headerTop')
  @include('partials.header')
  @include('partials.jumbo')
  <main>
    @yield('page-content')
  </main>
  @include('partials.topFooter')
  @include('partials.bottomFooter')
</body>
</html>