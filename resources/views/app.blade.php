<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

 @include('include.style ')
  </head>
  <body>


<!-----------------navbar--------------->


  @include('include.navbar')
  @yield('main_content')

   @include('include.javascript')
  </body>
</html>
