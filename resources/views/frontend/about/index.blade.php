@extends('master.frontend')
@section('title',__('title.about'))
@section('front')
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">
                            @lang('backend.about')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($abouts as $key => $about)
        @if(($key+1) % 2 == 0)
            <div class="rts-about-area-about vision">
                <div class="container pb--45 plr_sm--15">
                    <div class="vision-wrapper">
                        <div class="">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="vision-main-wrapper">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="side-sticky">
                                                    <div class="sticky-inner">
                                                        <div class="thumbnail-area-about">
                                                            <img src="{{ asset($about->photo) }}" alt="about-area"
                                                                 class="main">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 about-a-p-cont col-md-6">
                                                <div class="about-inner-wrapper-inner">
                                                    <div class="title-three-left">
                                                        <h3 class="title" data-sal="slide-up" data-sal-delay="100" style="color:#00007DFF !important;"
                                                            data-sal-duration="800">
                                                            {{ $about->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}
                                                        </h3>
                                                    </div>
                                                    <div class="main-content-area-about-p">
                                                        <p class="disc" style="color:#00007DFF; !important;">
                                                            {!! $about->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="rts-about-area-about vision">
                <div class="container plr_sm--15">
                    <div class="vision-wrapper">
                        <div class="">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="vision-main-wrapper">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 about-a-p-cont col-md-6">
                                                <div class="about-inner-wrapper-inner">
                                                    <div class="title-three-left">
                                                        <h3 class="title" data-sal="slide-up" data-sal-delay="100" style="color:#00007DFF !important;"
                                                            data-sal-duration="800">
                                                            {{ $about->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}
                                                        </h3>
                                                    </div>
                                                    <div class="main-content-area-about-p" style="color:#00007DFF !important;">
                                                        <p class="disc" style="color:#00007DFF !important;">
                                                            {!! $about->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="side-sticky">
                                                    <div class="sticky-inner">
                                                        <div class="thumbnail-area-about">
                                                            <img src="{{ asset($about->photo) }}" alt="about-area"
                                                                 class="main">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
