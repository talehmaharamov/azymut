@extends('master.frontend')
@section('title',__('title.about'))
@section('front')
    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy"
                 data-originalbg="{{asset('frontend/img/1 (4).jpg')}}"></div>
        </div>

        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__back_title">
                                @lang('backend.about')
                            </div>
                            <h1 class="page-masthead__title text-white">
                                @lang('backend.about')
                            </h1>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                            <a data-barba href="{{ route('frontend.index') }}" class="page-masthead-bread__item">
                                @lang('backend.home-page')
                            </a>
                            /
                            <a data-barba href="#" class="page-masthead-bread__item ">
                                @lang('backend.about')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($abouts as $about)
        <section class="relative layout-pt-lg layout-pb-lg">
            <div class="section-bg-image col-lg-6 px-0">
                <div class="bg-image js-lazy" data-originalbg="{{ asset($about->photo) }}"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 offset-lg-7">
                        <div class="sectionHeading -left-line">
                            <h2 class="sectionHeading__title mt-16">
                                {{ $about->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}
                            </h2>
                            <p class="sectionHeading__text mt-24">
                                {!! $about->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
