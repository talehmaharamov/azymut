<div class="rts-banner-main-area-swiper">
    <div class="swiper-container">
        <div class="swiper-pagination"></div>
        <div class="swiper-wrapper">
           @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--1" style="background-image: url('{{ asset($slider->photo) }}')">
    {{--                        <div class="banner-shape-area">--}}
    {{--                            <img src="{{asset('frontend/images/banner/shape/01.png')}}" alt="{{ asset($slider->alt) }}" class="shape shape-1">--}}
    {{--                            <img src="{{asset('frontend/images/banner/shape/02.png')}}" alt="{{ asset($slider->alt) }}" class="shape shape-2">--}}
    {{--                        </div>--}}
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <h1 class="title-banner">
                                           {{ $slider->translate(app()->getLocale())->title ?? '' }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           @endforeach
        </div>
    </div>
</div>
