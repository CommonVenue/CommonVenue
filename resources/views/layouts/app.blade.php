<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
  @include('includes.header')
  <section>
    @yield('content')
  </section>
  @include('includes.footer')
</body>
</html>
