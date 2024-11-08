@foreach($mainCategories as $kKey => $main)
    <div class="rts-project-one-area pt--50" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-wrapper-casestudies-one">
                        <div class="elecate-left-title" data-sal="slide-up" data-sal-delay="150"
                             data-sal-duration="800">
                            <h3 class="title animated fadeIn">
                                {{ $main->translate(app()->getLocale())->name ?? '' }}
                            </h3>
                        </div>
                        <div class="next-prev-btn">
                            <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(($kKey+1) % 2 == 0)
            <div class="container-full-screen">
                <div class="row mt--40">
                    <div class="col-lg-12">
                        <div class="main-wrapper-case-swiper-tab" style="overflow-x: hidden; padding: 12px 0;">
                            <div class="swiper case-tab-swipers-11">
                                <div class="swiper-wrapper">
                                    @foreach(\App\Models\Content::whereIn('category_id',\App\Models\Category::where('parent_id',$main->id)->pluck('id')->toArray())->get() as $mPS)
                                        <div class="swiper-slide">
                                            <div class="single-blog-area-one">
                                                <a href="{{ route('frontend.selectedContent',$mPS->slug) }}"
                                                   class="thumbnail1">
                                                    <img src="{{asset($mPS->photo)}}"
                                                         alt="{{ $mPS->translate(app()->getLocale())->alt ?? '' }}">
                                                </a>
                                                <div class="inner">
                                                    <a class="title"
                                                       href="{{ route('frontend.selectedContent',$mPS->slug) }}">
                                                        <h5 class="title">
                                                            {{ $mPS->translate(app()->getLocale())->name ?? '' }}
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
        @else
            <div class="container-full-screen">
                <div class="row mt--40">
                    <div class="col-lg-12">
                        <div class="main-wrapper-case-swiper-tab" style="overflow-x: hidden; padding: 12px 0;">
                            <div class="swiper case-tab-swipers-11">
                                <div class="swiper-wrapper">
                                    @foreach(\App\Models\Content::whereIn('category_id',\App\Models\Category::where('parent_id',$main->id)->pluck('id')->toArray())->get() as $mPS)
                                        <div class="swiper-slide">
                                            <div class="single-case-wrapper">
                                                <a href="{{ route('frontend.selectedContent',$mPS->slug) }}">
                                                    <img class="main-2" src="{{ asset($mPS->photo) }}"
                                                         style="width: 487px;height: 307px;"
                                                         alt="projects-images">
                                                </a>
                                                <div class="content">
                                                    <a href="{{ route('frontend.selectedContent',$mPS->slug) }}">
                                                        <h5 class="title">
                                                            {{ $mPS->translate(app()->getLocale())->name ?? '' }}
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
@endforeach











{{--@foreach($mainCategories as $kKey => $main)--}}
{{--    <section class="layout-pt-md">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="sectionHeading -left-line">--}}
{{--                        <h2 class="sectionHeading__title text-black">--}}
{{--                            {{ $main->translate(app()->getLocale())->name ?? '' }}--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row layout-pt-sm">--}}
{{--                <div class="sectionSlider overflow-hidden sm:px-16 js-sectionSlider" data-gap="30"--}}
{{--                     data-slider-col="base-3 lg-3 md-2 sm-1" data-pagination>--}}
{{--                    <div class="swiper-wrapper">--}}
{{--
--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <a data-barba href="{{ route('frontend.selectedContent',$mPS->slug) }}" class="portfolioCard -type-1 ratio">--}}
{{--                                    <div class="portfolioCard__image ratio ratio-3:4">--}}
{{--                                        <img class="ratio-img js-lazy" src="{{ route('frontend.selectedContent',$mPS->slug) }}" data-src="{{ asset($mPS->photo) }}"--}}
{{--                                             alt="{{ $mPS->translate(app()->getLocale())->alt ?? '' }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="portfolioCard__content px-30 py-30">--}}
{{--                                        <h1 class="portfolioCard__title projectTitle fw-600 mt-8">--}}
{{--                                            {{ $mPS->translate(app()->getLocale())->name ?? '' }}--}}
{{--                                        </h1>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <div class="nav -slider lg:d-none">--}}
{{--                        <div class="nav__item -left js-prev">--}}
{{--                            <i class="icon icon-left-arrow"></i>--}}
{{--                        </div>--}}
{{--                        <div class="nav__item -right js-next">--}}
{{--                            <i class="icon icon-right-arrow"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="pagination -slider mt-48 js-pagination"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endforeach--}}
