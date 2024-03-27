@extends('master.frontend')
@section('title',__('title.faq'))
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
                                @lang('backend.faq')
                            </div>
                            <h1 class="page-masthead__title text-white">
                                @lang('backend.faq')
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
                                @lang('backend.faq')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="sectionHeading -top-line text-center">
                        <h2 class="sectionHeading__title">
                            @lang('backend.faq')
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pt-60">
                <div class="col-xl-8 col-lg-10">
                    <div class="accordion -simple js-accordion">

                        @foreach($faqs as $faq)
                            <div class="accordion__item">
                                <div class="accordion__button text-black">
                                    <button class="text-lg md:text-base fw-600 text-black">
                                        {{ $faq->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                    </button>
                                    <div class="accordion__icon">
                                        <i class="icon" data-feather="plus"></i>
                                        <i class="icon" data-feather="minus"></i>
                                    </div>
                                </div>
                                <div class="accordion__content">
                                    <div class="accordion__content__inner">
                                        <p class="text-sm">
                                            {!! $faq->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
