<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="Muhammad Rivaldi Fanani" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @include('komponen.style')

  </head>

  <body>
    {{-- Navbar --}}
    @include('komponen.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('komponen.footer')

    {{-- Script --}}
    @include('komponen.script')
  </body>
</html>
