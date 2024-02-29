<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
</head>
<body  data-barba="wrapper">
{{--<div class="preloader js-preloader">--}}
{{--    <div class="preloader__bg"></div>--}}

{{--    <div class="preloader__progress">--}}
{{--        <div class="preloader__progress__inner"></div>--}}
{{--        <img src="{{asset('frontend/img/general/loader.svg')}}" alt="preloader image" class="preloader__img">--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader end -->

<!-- cursor start -->
<div class="cursor js-cursor">
    <div class="cursor__wrapper">
        <div class="cursor__follower js-follower"></div>
        <div class="cursor__label js-label"></div>
        <div class="cursor__icon js-icon"></div>
    </div>
</div>

<div class="barba-container" data-barba="container">
    <main class="main-content">
        @include('frontend.includes.header')
        @yield('front')
        @include('frontend.includes.footer')
        @include('sweetalert::alert')
    </main>
</div>

@include('frontend.includes.scripts')
@yield('scripts')
</body>
</html>
