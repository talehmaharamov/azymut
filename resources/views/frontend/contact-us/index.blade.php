@extends('master.frontend')
@section('title',__('title.contact'))
@section('styles')
{{--    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>--}}
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>

    <style>
        /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
        .owl-carousel,.owl-carousel .owl-item {
            -webkit-tap-highlight-color: transparent;
            position: relative
        }

        .owl-carousel {
            display: none;
            width: 100%;
            z-index: 1
        }

        .owl-carousel .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden
        }

        .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0
        }

        .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            -webkit-transform: translate3d(0,0,0)
        }

        .owl-carousel .owl-item,.owl-carousel .owl-wrapper {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0)
        }

        .owl-carousel .owl-item {
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-touch-callout: none
        }

        .owl-carousel .owl-item img {
            display: block;
            /* width: 200px; */
        }

        .owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled {
            display: none
        }

        .no-js .owl-carousel,.owl-carousel.owl-loaded {
            display: block
        }

        .owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0!important;
            font: inherit
        }

        .owl-carousel.owl-loading {
            opacity: 0;
            display: block
        }

        .owl-carousel.owl-hidden {
            opacity: 0
        }

        .owl-carousel.owl-refresh .owl-item {
            visibility: hidden
        }

        .owl-carousel.owl-drag .owl-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel.owl-grab {
            cursor: move;
            cursor: grab
        }

        .owl-carousel.owl-rtl {
            direction: rtl
        }

        .owl-carousel.owl-rtl .owl-item {
            float: right
        }

        .owl-carousel .animated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        .owl-carousel .owl-animated-in {
            z-index: 0
        }

        .owl-carousel .owl-animated-out {
            z-index: 1
        }

        .owl-carousel .fadeOut {
            animation-name: fadeOut
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .owl-height {
            transition: height .5s ease-in-out
        }

        .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-item .owl-lazy:not([src]),.owl-carousel .owl-item .owl-lazy[src^=""] {
            max-height: 0
        }

        .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d
        }

        .owl-carousel .owl-video-wrapper {
            position: relative;
            height: 100%;
            background: #000
        }

        .owl-carousel .owl-video-play-icon {
            position: absolute;
            height: 80px;
            width: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            background: url(owl.video.play.png) no-repeat;
            cursor: pointer;
            z-index: 1;
            -webkit-backface-visibility: hidden;
            transition: transform .1s ease
        }

        .owl-carousel .owl-video-play-icon:hover {
            -ms-transform: scale(1.3,1.3);
            transform: scale(1.3,1.3)
        }

        .owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn {
            display: none
        }

        .owl-carousel .owl-video-tn {
            opacity: 0;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-video-frame {
            position: relative;
            z-index: 1;
            height: 100%;
            width: 100%
        }

        .section-padding {
            padding: 60px 0;
        }
        .owl-dots {
            text-align: center;
            margin-top: 4%;
        }

        .owl-dot {
            display: inline-block;
            height: 15px !important;
            width: 15px !important;
            background-color: #878787 !important;
            opacity: 0.8;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background-color: #000 !important;
        }


    </style>
@endsection
@section('front')
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">
                            @lang('backend.contact-us')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-contact-page-form-area">
        <div class="container">
            <div class="rts-contact-area-m mb--40">
                <div class="container">
                    <div class="row g-24">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-contact-one-inner">
                                <div class="content">
                                    <div class="icone">
                                        <img src="{{asset('frontend/images/contact/shape/01.svg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <a href="tel:{{ settings('phone') }}">
                                            <h5>
                                                {{ settings('phone') }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-contact-one-inner">
                                <div class="content">
                                    <div class="icone">x
                                        <img src="{{ asset('frontend/images/contact/shape/02.svg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <a href="mailto:{{ settings('email') }}">
                                            <h5>
                                                {{ settings('email') }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-contact-one-inner">
                                <div class="content">
                                    <div class="icone">
                                        <img src="{{ asset('frontend/images/contact/shape/03.svg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h5>
                                                {{ settings('address_'.app()->getLocale()) }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brand-carousel section-padding owl-carousel">
                @foreach($brands as $brand)
                    <div class="single-logo">
                        <img alt="{{ $brand->alt }}" src="{{ asset($brand->photo) }}">
                    </div>
                @endforeach
            </div>

            {{--            <div class="row">--}}
            {{--                <div class="mian-wrapper-form col-lg-6">--}}
            {{--                    <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150"--}}
            {{--                         data-sal-duration="800">--}}
            {{--                        <h2 class="title" style="font-size: 40px !important;">--}}
            {{--                            @lang('backend.contact-with-us')--}}
            {{--                        </h2>--}}
            {{--                    </div>--}}
            {{--                    <div id="form-messages"></div>--}}
            {{--                    <form id="contact-form" class="contact-form-contact" action="{{ route('frontend.sendMessage') }}"--}}
            {{--                          method="post">--}}
            {{--                        @csrf--}}
            {{--                        <div class="name-email">--}}
            {{--                            <input type="text" name="name" placeholder="@lang('backend.name')" required="">--}}
            {{--                            <input type="email" name="email" placeholder="@lang('backend.email')" required="">--}}
            {{--                        </div>--}}
            {{--                        <input type="text" name="phone" placeholder="@lang('backend.phone')">--}}
            {{--                        <textarea placeholder="@lang('backend.message')" name="message"></textarea>--}}
            {{--                        <button type="submit" class="rts-btn btn-primary">@lang('backend.send-message')</button>--}}
            {{--                    </form>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        <iframe src="{{ settings('map') }}" width="600" height="640" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script>
        $('.brand-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    </script>
@endsection
