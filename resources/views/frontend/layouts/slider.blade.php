<section class="masthead swiper-container js-slider">
    <div class="swiper-wrapper">
        @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div data-parallax="0.6" class="masthead__image" data-swiper-parallax="40%">
                    <img data-parallax-target class="swiper-lazy" width="100%" src="{{asset($slider->photo)}}" alt="Slider image">
                </div>
                <div class="container-fluid h-100 px-32">
                    <div class="row align-items-center">
                        <div class="col-lg-10 offset-lg-2 offset-md-1">
                            <div class="masthead__content js-content">
                                <div data-split="lines" data-anim="split-lines" class="js-title-wrap">
                                    <h1 class="masthead__title text-white js-title">
                                        {{ $slider->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}
                                    </h1>
                                </div>
                                <div class="masthead__button js-button">
{{--                                    <a data-barba href="https://salam.az" class="button -simple text-white">--}}
{{--                                        VIEW PROJECT--}}
{{--                                    </a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="masthead__pagination_numbers js-pag-numbers lg:d-none">
        <span class="js-current"></span>
        <span>/</span>
        <span class="js-all"></span>
    </div>

    <div class="masthead-pagination js-pag">
        @foreach($sliders as $sliderKey => $slider)
            <div data-cursor class="masthead-pagination__item @if($loop->first) is-active @endif js-pag-item">
                <span class="masthead-pagination__number">{{ $sliderKey + 1 }}</span>
                <h4 class="masthead-pagination__title md:d-none">
                    {{ $slider->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}
                </h4>
                <span class="masthead-pagination__line"></span>
            </div>
        @endforeach
    </div>

    <div class="masthead__scroll js-scroll md:d-none">
        <div class="masthead__scroll_item">
            @lang('backend.scroll')
            <div class="masthead__scroll_icon">
                <i class="icon icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
