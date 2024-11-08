<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
    @yield('styles')
</head>
<body>

@include('frontend.includes.header')
@yield('front')
@include('frontend.includes.footer')
@include('sweetalert::alert')
@include('frontend.includes.scripts')
@yield('scripts')
</body>
</html>
