<section class="layout-pt-xs" style="padding-bottom: 1.75rem !important;">
    <div class="container">
        <div class="row justify-content-center md:justify-content-start">
            <div class="col-auto">
                <div class="sectionHeading -top-line -md text-center md:text-left">
                    <span class="sectionHeading__subtitle">@lang('backend.azymut')</span>
                    <h2 class="sectionHeading__title">@lang('backend.our-team')</h2>
                </div>
            </div>
        </div>


        <div class="row layout-pt-sm">
            <div class="sectionSlider overflow-hidden sm:px-16 js-sectionSlider" data-gap="30"
                 data-slider-col="base-4 lg-3 md-2 sm-2" data-pagination>

                <div class="swiper-wrapper">
                    @foreach($mainPageTeams as $mPT)
                        <div class="swiper-slide">
                            <div class="team -hover">
                                <div data-anim="img-right" class="team__image">
                                    <div>
                                        <div class="ratio ratio-3:4 bg-image js-lazy"
                                             style="background-image: url({{ asset($mPT->photo) }})"
                                             data-bg="{{ asset($mPT->photo) }}"></div>
                                    </div>
                                </div>

                                <div class="team__content">
                                    <div class="team__socials">
                                        @if($mPT->email !== null)
                                            <a data-barba target="_blank" href="mailto:{{ $mPT->email }}"
                                               class="text-white">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                        @endif
                                        @if($mPT->phone !== null)
                                            <a data-barba href="tel:{{ $mPT->phone }}" class="text-white">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        @if($mPT->facebook !== null)
                                            <a data-barba href="{{ settings('facebook') }}" class="text-white">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        @if($mPT->instagram !== null)
                                            <a data-barba href="{{ settings('instagram') }}" class="text-white">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        @endif


                                    </div>

                                    <div class="md:d-none">
                                        <div class="team__info">
                                            {{ $mPT->translate(app()->getLocale())->position ?? __('backend.translation-not-found') }}
                                        </div>
                                        <h3 class="team__title text-white">
                                            {{ $mPT->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
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
