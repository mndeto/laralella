<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('keywords')

    <title>@yield('title')</title>

    @include('admin.partials._styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          @include('admin.partials._side_menu')
        </div>
          @include('admin.partials._header')
          
          @yield('content')

        @include('admin.partials._footer')
      </div>
    </div>

    @include('admin.partials._scripts')

    @yield('script')
  </body>
</html>
