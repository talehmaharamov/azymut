<header class="slider">
    <div class="slider-container">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide" data-background="{{ $slider->photo }}"
                     data-stellar-background-ratio="1.15">
                </div>
            @endforeach
        </div>
        <div class="inner-elements">
            <div class="container">
                <div class="pagination"></div>
                <div class="button-prev">@lang('pagination.previous')</div>
                <div class="button-next">@lang('pagination.next')</div>
            </div>
        </div>
    </div>
</header>
