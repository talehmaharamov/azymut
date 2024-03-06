@extends('master.frontend')
@section('title',($service->translate(app()->getLocale())->meta_title ?? ''))
@section('meta')
    <meta name="description" content="{{ $service->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy" data-originalbg="{{asset($service->photo)}}"></div>
        </div>

        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__back_title">
                                {{ $service->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </div>
                            <h1 class="page-masthead__title text-white">
                                {{ $service->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </h1>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                            <a data-barba href="{{ route('frontend.index') }}" class="page-masthead-bread__item">
                                @lang('backend.home-page')
                            </a>
                            /
                            <a data-barba class="page-masthead-bread__item ">
                                {{ $service->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                            </a>
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
                                {{ $service->translate(app()->getLocale())->name ?? __('backend.translation-not-found')  }}
                            </h3>
                            <p class="text-sm leading-2xl mt-12">
                                {!! $service->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                            </p>
                            {{--                            <div class="row y-gap-32 pt-32">--}}
                            {{--                                <p class="text-sm leading-2xl mt-12">--}}
                            {{--                                    {!! $service->translate(app()->getLocale())->content ?? __('backend.translation-not-found') !!}--}}
                            {{--                                </p>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="gallery y-gap-32 pl-80 lg:pr-0">
                            @foreach($service->photos as $photo)
                                <a href="{{ asset($photo->photo) }}" class="gallery__item js-gallery"
                                   data-gallery="gallery1">
                                    <div class="ratio ratio-77:60">
                                        <img class="ratio-img" src="{{ asset($photo->photo) }}"
                                             alt="{{ $service->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
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
@endsection
