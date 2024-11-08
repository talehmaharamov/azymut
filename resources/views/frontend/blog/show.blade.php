@extends('master.frontend')
@section('title',($blog->translate(app()->getLocale())->meta_title ?? ''))
@section('meta')
    <meta name="description" blog="{{ $blog->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <div class="rts-blog-list-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img
                                src="{{($blog->photo != null) ? asset($blog->photo) : asset('frontend/logos/azylogo-2.jpg')}}"
                                style="max-height: 541px;max-width: 100%;"
                                alt="{{ $blog->translate(app()->getLocale())->alt ?? '' }}">
                        </div>
                        <div class="blog-listing-content">
                            <h3 class="title">
                                {{ $blog->translate(app()->getLocale())->name ?? 'FOZ' }}
                            </h3>
                            <p class="disc para-1">
                                {!! $blog->translate(app()->getLocale())->description ?? 'FOZ' !!}
                            </p>

                            <div class="row g-5">
                                @foreach($blog->photos as $photo)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumbnail details">
                                            <img src="{{ asset($blog->photo) }}"
                                                 alt="{{ $blog->translate(app()->getLocale())->alt ?? 'FOZ'}}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @if($relatedBlogs->isNotEmpty())
                    <div class="rts-project-one-area" style="padding-bottom: 30px;">
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
                                                        <div class="blog">
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
                @endif

            </div>
        </div>
    </div>
@endsection
