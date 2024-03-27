<footer class="footer -type-1">
    <div class="footer__top">
        <div class="container">
            <div class="row y-gap-48 justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__item">
                        <h3 class="footer__title text-white">@lang('backend.contact-information')</h3>
                        <div class="footer__content pr-20">
                            <div class="footer__content__item">
                                <p>
                                    <span>
                                        {{ substr(__('backend.phone'), 0, 1) }}:
                                    </span>
                                    {{ settings('phone') }}
                                </p>
                                <br>
                                <p>
                                    <span>
                                        {{ substr(__('backend.email'), 0, 1) }}:
                                    </span>
                                    {{ settings('email') }}
                                </p>
                                <br>
                                <p>
                                    <span>
                                        A:
                                    </span>
                                    {{ settings('address_'.app()->getLocale()) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer__item">

                        <h3 class="footer__title text-white">
                            @lang('backend.useful-links')
                        </h3>

                        <div class="footer__content">
                            <div class="footer__content__item">
                                <a data-barba href="{{ route('frontend.about') }}">
                                    @lang('backend.about')
                                </a>
                            </div>
                            <div class="footer__content__item">
                                <a data-barba href="{{ route('frontend.contact-us-page') }}">
                                    @lang('backend.contact-us')
                                </a>
                            </div>
                            <div class="footer__content__item">
                                <a data-barba href="{{ route('frontend.faqs') }}">
                                    @lang('backend.faq')
                                </a>
                            </div>
                            <div class="footer__content__item">
                                <a data-barba href="{{ route('frontend.ourTeam') }}">
                                    @lang('backend.our-team')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="footer__item">
                        <h3 class="footer__title text-white">
                            @lang('backend.services')
                        </h3>

                        <div class="footer__content">
                            <div class="footer__content">
                                @foreach($mainCategories as $mC)
                                    <div class="footer__content__item">
                                        <a data-barba>
                                            {{ $mC->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="footer__socials">
                                <h3 class="footer__title text-white">@lang('backend.follow-us')</h3>

                                <div class="footer__socials_content">
                                    <a data-barba href="{{ settings('facebook') }}" target="_blank" class="text-white">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="{{ settings('whatsapp') }}" target="_blank" class="text-white">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                    <a data-barba href="{{ settings('instagram') }}" target="_blank" class="text-white">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between sm:justify-content-start">
                <div class="col-auto sm:order-2">
                    <div class="footer__bottom_text">© {{ now()->year }} Azymut. @lang('backend.all-right-reserved').
                    </div>
                </div>
                <div class="col-auto sm:order-1">
                    <div class="footer__logo">
                        <img style="height: 40px;width: 120px;" src="{{ asset('frontend/logos/Azymut loqo5.png') }}"
                             alt="logo">
                    </div>
                </div>
                <div class="col-auto sm:d-none">
                    <div class="footer__bottom_text">
                        Powered by
                        <a target="_blank" style="color: #B88768 !important" href="https://foz.az">FOZ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-cursor class="backButton js-backButton">
        <div class="nav -slider">
            <div class="nav__item -left">
                <i class="icon icon-right-arrow"></i>
            </div>
        </div>
    </div>
</footer>
