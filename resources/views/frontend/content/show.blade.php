@extends('master.frontend')
@section('title',($content->category->translate(app()->getLocale())->meta_title ?? 'Azymut.az'))
@section('meta')
    <meta name="description" content="{{ $content->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <div class="rts-blog-list-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <div class="blog-single-post-listing details mb--0">
{{--                        <div class="thumbnail">--}}
{{--                            <img--}}
{{--                                src="{{($content->photo != null) ? asset($content->photo) : asset('frontend/logos/azylogo-2.jpg')}}"--}}
{{--                                style="max-height: 541px;max-width: 100%;"--}}
{{--                                alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}">--}}
{{--                        </div>--}}
                        <div class="rts-about-area-about vision">
                            <div class="container plr_sm--15">
                                <div class="vision-wrapper">
                                    <div class="">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="vision-main-wrapper">

                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-6 col-sm-12 mt-4">
                                                            <div class="side-sticky">
                                                                <div class="sticky-inner">
                                                                    <div class="thumbnail-area-about">
                                                                        <img src="{{ asset($content->photo) }}" alt="about-area"
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
                                                                        {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                                                    </h3>
                                                                </div>
                                                                <div class="main-content-area-about-p" style="color:#00007DFF !important;">
                                                                    <p class="disc" style="color:#00007DFF !important;">
                                                                        {!! $content->translate(app()->getLocale())->content ?? __('backend.translation-not-found') !!}
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
                        <div class="blog-listing-content">
                            <div class="row g-5">
                                @foreach($content->photos as $photo)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumbnail details">
                                            <img src="{{ asset($photo->photo) }}" style="width: 592px;height: 444px;"
                                                 alt="{{ $content->translate(app()->getLocale())->alt ?? 'FOZ'}}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if($relatedContents->isNotEmpty())
                        <div class="container">
                            <div class="rts-project-one-area" style="padding-top: 20px;padding-bottom: 10px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title-wrapper-casestudies-one">
                                                <div class="elecate-left-title" data-sal="slide-up" data-sal-delay="150"
                                                     data-sal-duration="800">
                                                    <h3 class="title animated fadeIn">
                                                        @lang('backend.sample')
                                                    </h3>
                                                </div>
                                                <div class="next-prev-btn">
                                                    <div class="swiper-button-next">
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-full-screen">
                                <div class="row mt--40">
                                    <div class="col-lg-12">
                                        <div class="main-wrapper-case-swiper-tab"
                                             style="padding: 12px 0;">
                                            <div class="swiper case-tab-swipers">
                                                <div class="swiper-wrapper">
                                                    @foreach($relatedContents as $rC)
                                                        <div class="swiper-slide">
                                                            <div class="single-case-wrapper">
                                                                <a href="{{ route('frontend.selectedContent',$rC->slug) }}">
                                                                    <img class="main-2" src="{{ asset($rC->photo) }}"
                                                                         alt="{{ $rC->translate(app()->getLocale())->alt ?? 'FOZ' }}">
                                                                </a>
                                                                <div class="content">
                                                                    <a href="{{ route('frontend.selectedContent',$rC->slug) }}">
                                                                        <h5 class="title">
                                                                            {{ $rC->translate(app()->getLocale())->name ?? 'FOZ' }}
                                                                        </h5>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
