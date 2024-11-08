@extends('master.frontend')
@section('title',$category->translate(app()->getLocale())->meta_title ?? "Azymut.az")
@section('meta')
    <meta name="description" content="{{ $category->translate(app()->getLocale())->meta_description  }}">
@endsection
@section('front')
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">
                            {{ $category->translate(app()->getLocale())->name ?? '' }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-about-area-about vision">
        <div class="container pb--45 plr_sm--15">
            <div class="vision-wrapper">
                <div class="">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="vision-main-wrapper">
                                <div class="row align-items-center">
                                    @if($category->photo != null)
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="side-sticky">
                                                <div class="sticky-inner">
                                                    <div class="thumbnail-area-about">
                                                        <img src="{{ asset($category->photo) }}"
                                                             alt="{{ $category->translate(app()->getLocale())->name }}"
                                                             class="main">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-7 about-a-p-cont col-md-6">
                                        <div class="about-inner-wrapper-inner">
                                            <div class="title-three-left">
                                                <h3 class="title" data-sal="slide-up" data-sal-delay="100"
                                                    style="color:#00007DFF !important;"
                                                    data-sal-duration="800">
                                                    {{ $category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                                </h3>
                                            </div>
                                            <div class="main-content-area-about-p">
                                                <p class="disc" style="color:#00007DFF; !important;">
                                                    {!! $category->translate(app()->getLocale())->description ?? '' !!}
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

    <div class="rts-latest-project-area rts-section-gap">
        <div class="container">
            <div class="row g-24">
                @foreach($contents as $content)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="blog-single-two-wrapper">
                            <div class="image-area">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}" class="thumbnail">
                                    <img src="{{ asset($content->photo) }}"
                                         style="width:421px !important; height:266px !important;"
                                         alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}">
                                    <h5 class="title">
                                        {{ $content->translate(app()->getLocale())->name ?? '' }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}"
                                   class="btn-read-more-blog">
                                    @lang('backend.load-more')
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row mt--30">
                    <div class="col-lg-12">
                        @if($contents->isNotEmpty())
                            <div class="rts-elevate-pagination">
                                <ul>
                                    @if (!$contents->onFirstPage())
                                        <li>
                                            <button class="disabled">
                                                <<
                                            </button>
                                        </li>
                                    @endif
                                    @for ($i = 1; $i <= $contents->lastPage(); $i++)
                                        @if ($i == $contents->currentPage())
                                            <li>
                                                <button class="active">{{ $i }}</button>
                                            </li>
                                        @else
                                            <li><a href="{{ $contents->url($i) }}">
                                                    <button>{{ $i }}</button>
                                                </a></li>
                                        @endif
                                    @endfor
                                    @if ($contents->hasMorePages())
                                        <li>
                                            <a href="{{ $contents->nextPageUrl() }}">
                                                <button>
                                                    >>
                                                </button>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
