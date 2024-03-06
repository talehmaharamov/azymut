@extends('master.frontend')
@section('title',$keyword)
@section('front')

    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy"
                 data-originalbg="{{asset('frontend/logos/Azymut loqo2.jpg')}}"></div>
        </div>

        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__subtitle">
                                @lang('backend.search-result')
                            </div>
                            <div class="page-masthead__back_title">
                                {{ $keyword }}
                            </div>
                            <h1 class="page-masthead__title text-white">
                                {{ $keyword }}
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
                                {{ $keyword }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="section-filter px-16">
                <div class="masonry -gap-32 -col-3 layout-pt-sm js-masonry js-masonry-no-filter">
                    <div class="masonry__sizer"></div>
                    @foreach($contents as $content)
                        <div class="masonry__item -r-120  {{ $content->category->slug }}">
                            <a data-barba href="{{ route('frontend.selectedContent',$content->slug) }}"
                               class="portfolioCard -type-1 ratio">
                                <div class="portfolioCard__image">
                                    <img class="ratio-img js-lazy" src="" data-src="{{ asset($content->photo) }}"
                                         alt="{{ $content->translate(app()->getLocale())->alt ?? 'FOZ' }}">
                                </div>
                                <div class="portfolioCard__content px-30 py-30">
                                    {{--                                    <span class="portfolioCard__category text-sm uppercase text-beige-dark">LIVING</span>--}}
                                    <h3 class="portfolioCard__title text-lg fw-600 mt-8">
                                        {{ $content->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @if(!$contents->isEmpty())
                <div class="row justify-content-center mt-80 md:mt-32">
                    <div class="col-auto">
                        <div class="pagination -section">
                            <div class="pagination__nav">
                                @if ($contents->previousPageUrl())
                                    <a href="{{ $contents->previousPageUrl() }}" class="nav-icon -left" data-barba>
                                        <div class="nav-icon__circle">
                                            <i class="icon icon-left-arrow"></i>
                                        </div>
                                    </a>
                                @endif
                            </div>

                            <div class="pagination__content">
                                @for ($i = 1; $i <= $contents->lastPage(); $i++)
                                    <a href="{{ $contents->url($i) }}"
                                       @if ($contents->currentPage() === $i) class="is-active"
                                       @endif data-barba>{{ $i }}</a>
                                @endfor
                            </div>

                            <div class="pagination__nav">
                                @if ($contents->nextPageUrl())
                                    <a href="{{ $contents->nextPageUrl() }}" class="nav-icon -right" data-barba>
                                        <div class="nav-icon__circle">
                                            <i class="icon icon-right-arrow"></i>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="text-4xl leading-2xl md:mt-48">
                    @lang('backend.data-not-found')!
                </h1>
            @endif
        </div>
    </section>
@endsection
