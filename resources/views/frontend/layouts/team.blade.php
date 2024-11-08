<div class=" team-3bg pt--50 pb--50">
    <div class="container">
        <div class="row pb--30">
            <div class="col-lg-12">
                <div class="elecate-center-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <h3 class="title">
                        @lang('backend.our-team')
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($mainPageTeams->chunk(3) as $chunk)
                <div class="row @if(!$loop->first)  mt--50 @endif">
                    @foreach($chunk as $mpt)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="single-team-three">
                                <div class="thumbnail">
                                    <img src="{{ asset($mpt->photo) }}" style="width: 376px;height: 389px;"
                                         alt="team_area-start">
                                    <div class="social-team-wrapper">
                                        <ul>
                                            @if($mpt->email != null)
                                                <li>
                                                    <a href="mailto:{{ $mpt->email }}">
                                                        <i class="fas fa-mail-bulk"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($mpt->phone)
                                                    <li>
                                                        <a href="tel:{{ $mpt->phone }}">
                                                            <i class="fas fa-phone"></i>
                                                        </a>
                                                    </li>
                                            @endif
                                            @if($mpt->facebook != null)
                                                <li>
                                                    <a href="{{ $mpt->facebook }}">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                            @endif
                                            @if($mpt->instagram != null)
                                                <li>
                                                    <a href="{{ $mpt->instagram	}}">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <span class="designation">
                                       {{ $mpt->translate(app()->getLocale())->position ?? '' }}
                                    </span>
                                    <a>
                                        <h6 class="name">
                                            {{ $mpt->translate(app()->getLocale())->name ?? '' }}
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
</div>


{{--<div class="rts-technical-expart-area pb--90">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="elecate-center-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">--}}
{{--                    <h3 class="title">--}}
{{--                        @lang('backend.our-team')--}}
{{--                    </h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row g-24 mt--10">--}}

{{--            <div class="col-lg-12">--}}
{{--                <div class="swiper-technical-main-wrapper">--}}
{{--                    <div class="next-prev-btn">--}}
{{--                        <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>--}}
{{--                        <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper mySwiper-technical">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="row g-24 mt--10" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">--}}
{{--                                @foreach($mainPageTeams as $mpt)--}}
{{--                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                                        <!-- single team start -->--}}
{{--                                        <div class="team-area-start-five">--}}
{{--                                            <a href="#" class="thumbnail">--}}
{{--                                                <img src="{{asset($mpt->photo)}}" alt="team">--}}
{{--                                            </a>--}}
{{--                                            <div class="details-team">--}}
{{--                                                <div class="name">--}}
{{--                                                    <a href="#">--}}
{{--                                                        Marina Dicola Mita--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="desig">--}}
{{--                                                    <span>Head of Marketing</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- single team end-->--}}
{{--                                    </div>--}}
{{--                                    --}}{{--                                <div class="swiper-slide">--}}
{{--                                    --}}{{--                                    <div class="rts-team-one-start pb--180">--}}
{{--                                    --}}{{--                                        <div class="wrapper">--}}
{{--                                    --}}{{--                                            <a class="thumbnail">--}}
{{--                                    --}}{{--                                                <img src="{{ asset($mpt->photo) }}" style="height: 455px; width: 359px;"--}}
{{--                                    --}}{{--                                                     alt="{{ $mpt->alt }}">--}}
{{--                                    --}}{{--                                            </a>--}}
{{--                                    --}}{{--                                            <div class="inner">--}}
{{--                                    --}}{{--                                                <a class="name">--}}
{{--                                    --}}{{--                                                    <h5 class="title">--}}
{{--                                    --}}{{--                                                        {{ $mpt->translate(app()->getLocale())->name ?? '' }}--}}
{{--                                    --}}{{--                                                    </h5>--}}
{{--                                    --}}{{--                                                </a>--}}
{{--                                    --}}{{--                                                <span class="desig">--}}
{{--                                    --}}{{--                                                    {{ $mpt->translate(app()->getLocale())->position ?? '' }}--}}
{{--                                    --}}{{--                                                </span>--}}
{{--                                    --}}{{--                                                <div class="info-wrapper">--}}
{{--                                    --}}{{--                                                    <div class="single">--}}
{{--                                    --}}{{--                                                        <i class="fa-light fa-envelope"></i>--}}
{{--                                    --}}{{--                                                        <a href="mailto:{{ $mpt->email }}">--}}
{{--                                    --}}{{--                                                            {{ $mpt->email }}--}}
{{--                                    --}}{{--                                                        </a>--}}
{{--                                    --}}{{--                                                    </div>--}}
{{--                                    --}}{{--                                                    <div class="single">--}}
{{--                                    --}}{{--                                                        <i class="fa-regular fa-phone-volume"></i>--}}
{{--                                    --}}{{--                                                        <a href="tel:{{ $mpt->phone }}">--}}
{{--                                    --}}{{--                                                            {{ $mpt->phone }}--}}
{{--                                    --}}{{--                                                        </a>--}}
{{--                                    --}}{{--                                                    </div>--}}

{{--                                    --}}{{--                                                    <div class="single">--}}
{{--                                    --}}{{--                                                        <i class="fa-regular fa-phone-volume"></i>--}}
{{--                                    --}}{{--                                                        <a href="tel:+4733378901">+00012345678</a>--}}
{{--                                    --}}{{--                                                    </div>--}}
{{--                                    --}}{{--                                                    <!-- single info -->--}}
{{--                                    --}}{{--                                                </div>--}}
{{--                                    --}}{{--                                            </div>--}}
{{--                                    --}}{{--                                        </div>--}}
{{--                                    --}}{{--                                    </div>--}}
{{--                                    --}}{{--                                </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
