<section class="layout-pb-lg" style="margin-top: 90px !important;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">@lang('backend.projects')</span>
                    <h2 class="sectionHeading__title">@lang('backend.featured-works')</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center layout-pt-sm">
            <div class="col-lg-8">
                <div class="sectionSlider js-sectionSlider" data-gap="30" data-slider-col="base-1 lg-1 md-1 sm-1"
                     data-center data-loop data-pagination data-cursor data-cursor-label="@lang('backend.click')">

                    <div class="sliderNav -portfolio-slider js-nav">
                        <button class="sliderNav__item -prev js-prev">
                            @lang('pagination.previous')
                        </button>
                        <button class="sliderNav__item -next js-next">
                            @lang('pagination.next')
                        </button>
                    </div>

                    <div class="swiper-wrapper">
                        @foreach($mainPageProjects as $mPP)
                            <div class="swiper-slide">
                                <a data-barba data-cursor data-cursor-label="@lang('backend.click')"
                                   href="{{ route('frontend.selectedContent',$mPP->slug) }}" class="portfolio">
                                    <div class="portfolio__image">
                                        <div class="ratio ratio-16:9">
                                            <img class="ratio-img swiper-lazy" src="{{ asset($mPP->photo) }}"
                                                 data-src="{{ asset($mPP->photo) }}"
                                                 alt="{{ $mPP->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                            <div class="swiper-lazy-preloader"></div>
                                        </div>
                                    </div>

                                    <div class="portfolio__content text-center">
                                        <span class="portfolio__category">
                                            {{ $mPP->category->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </span>
                                        <h3 class="portfolio__title">
                                            {{ $mPP->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </h3>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination -slider mt-48 js-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
