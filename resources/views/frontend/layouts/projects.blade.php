{{--<section class="layout-pb-lg" style="margin-top: 90px !important;">--}}
@foreach($mainCategories as $kKey => $main)
    <section class="layout-pt-md">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <div class="sectionHeading -left-line">
                        <h2 class="sectionHeading__title text-black">
                            {{ $main->translate(app()->getLocale())->name ?? '' }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row layout-pt-sm">
                <div class="sectionSlider overflow-hidden sm:px-16 js-sectionSlider" data-gap="30"
                     data-slider-col="base-3 lg-3 md-2 sm-1" data-pagination>
                    <div class="swiper-wrapper">
                        @foreach(\App\Models\Content::whereIn('category_id',\App\Models\Category::where('parent_id',$main->id)->pluck('id')->toArray())->get() as $mPS)
                            <div class="swiper-slide">
                                <a data-barba href="{{ route('frontend.selectedContent',$mPS->slug) }}" class="portfolioCard -type-1 ratio">
                                    <div class="portfolioCard__image ratio ratio-3:4">
                                        <img class="ratio-img js-lazy" src="{{ route('frontend.selectedContent',$mPS->slug) }}" data-src="{{ asset($mPS->photo) }}"
                                             alt="{{ $mPS->translate(app()->getLocale())->alt ?? '' }}">
                                    </div>
                                    <div class="portfolioCard__content px-30 py-30">
{{--                                        <span class="portfolioCard__category text-sm uppercase text-beige-dark">LIVING</span>--}}
                                        <h1 class="portfolioCard__title projectTitle fw-600 mt-8">
                                            {{ $mPS->translate(app()->getLocale())->name ?? '' }}
                                        </h1>
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
@endforeach
{{--</section>--}}
