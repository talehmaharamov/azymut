@extends('master.frontend')
@section('title',($content->translate(app()->getLocale())->meta_title ?? ''))
@section('meta')
    <meta name="description" content="{{ $content->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg="{{ asset($content->photo) }}"></div>
        </div>
        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__subtitle">
                                {{ $content->category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </div>
                            <div class="page-masthead__back_title">
                                {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </div>
                            <h1 class="page-masthead__title text-white">
                                {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="page-masthead__content js-pin-container">
                <div class="row">
                    <div class="col-lg-4 col-md-10">
                        <div class="text-left js-pin-content">
                            <h3 class="text-4xl leading-2xl md:mt-48">
                                {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found')  }}
                            </h3>
                            <p class="text-sm leading-2xl mt-12">
                                {!! $content->translate(app()->getLocale())->short_description ?? __('backend.translation-not-found') !!}
                            </p>
                            <div class="row y-gap-32 pt-32">
                                <p class="text-sm leading-2xl mt-12">
                                    {!! $content->translate(app()->getLocale())->content ?? __('backend.translation-not-found') !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="gallery y-gap-32 pl-80 lg:pr-0">
                            @foreach($content->photos as $photo)
                                <a href="{{ asset($photo->photo) }}" class="gallery__item js-gallery"
                                   data-gallery="gallery1">
                                    <div class="ratio ratio-77:60">
                                        <img class="ratio-img" src="{{ asset($photo->photo) }}"
                                             alt="{{ $content->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                    </div>

                                    <div class="gallery__button">
                                        <i class="icon" data-feather="plus"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="related-nav py-40">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                @if($previousProject)
                    <div class="col-md-auto col-6">
                        <a data-barba href="{{ route('frontend.selectedContent',$previousProject->slug) }}"
                           class="related-nav__item -prev">
                            <div class="related-nav__arrow">
                                <i class="icon icon-left-arrow"></i>
                            </div>
                            <div class="related-nav__content">
                            <span>
                                @lang('pagination.previous')
                            </span>
                                <p>
                                    {{ $previousProject->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endif

{{--                <div class="col-auto md:d-none">--}}
{{--                    <div class="related-nav__icon">--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                    </div>--}}
{{--                </div>--}}

                @if($nextProject)
                    <div class="col-md-auto col-6">
                        <a data-barba href="{{ route('frontend.selectedContent',$nextProject->slug) }}"
                           class="related-nav__item -next">
                            <div class="related-nav__content">
                            <span>
                                @lang('pagination.next')
                            </span>
                                <p>
                                    {{ $nextProject->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                </p>
                            </div>

                            <div class="related-nav__arrow">
                                <i class="icon icon-right-arrow"></i>
                            </div>
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-md bg-beige-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="sectionHeading -top-line text-center">
                        <h2 class="sectionHeading__title">
                            @lang('backend.sample')
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row layout-pt-sm">
                <div class="sectionSlider overflow-hidden sm:px-16 js-sectionSlider" data-gap="30"
                     data-slider-col="base-3 lg-3 md-2 sm-1" data-pagination>

                    <div class="swiper-wrapper">
                        @foreach($relatedContents as $rProject)
                            <div class="swiper-slide">
                                <a data-barba href="#" class="portfolioCard -type-1 ratio">
                                    <div class="portfolioCard__image ratio ratio-3:4">
                                        <img class="ratio-img js-lazy" src="{{ asset($rProject->photo) }}"
                                             data-src="{{ asset($rProject->photo) }}"
                                             alt="{{ $rProject->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                    </div>
                                    <div class="portfolioCard__content px-30 py-30">
                                        <span class="portfolioCard__category text-sm uppercase text-beige-dark">
                                            {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </span>
                                        <h3 class="portfolioCard__title text-lg fw-600 mt-8">
                                            {{ $content->category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="nav -slider lg:d-none">
                        <div class="nav__item -left js-prev">
                            <i class="icon icon-left-arrow"></i>
                        </div>

                        <div class="nav__item -right js-next">
                            <i class="icon icon-right-arrow"></i>
                        </div>
                    </div>

                    <div class="pagination -slider mt-48 js-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
