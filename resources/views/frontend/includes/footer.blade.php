<div class="rts-footer-two footer-8 rts-section-gap2Top">
    <div class="container">
        <div class="row g-0 main-ftop-wrapper">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-fill-footer logo">
                    <a href="#" class="thumbnail-logo">
                        <img src="{{ asset('frontend/logos/logo9.png') }}" style="width: 187px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-fill-footer info">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                    </div>
                    <div class="info">
                        <a href="tel:{{ settings('phone') }}">
                            {{ settings('phone') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-fill-footer info">
                    <div class="icon">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <div class="info">
                        <a href="mailto:{{ settings('email') }}">
                            {{ settings('email') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-fill-footer info">
                    <div class="icon">
                        <i class="fa-solid fa-location-arrow"></i>
                    </div>
                    <div class="info">
                        <a href="#">
                            {{ settings('address_'.app()->getLocale()) }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-row-wrapper mt--40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrapper-footer-row">
                            <div class="d-flex justify-content-start footer1">
                                <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                    <a href="{{ route('frontend.index') }}">
                                        @lang('backend.home-page')
                                    </a>
                                </div>
                                <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                    <a href="{{ route('frontend.about') }}">
                                        @lang('backend.about')
                                    </a>
                                </div>
                                <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                    <a href="{{ route('frontend.contact-us-page') }}">
                                        @lang('backend.contact-us')
                                    </a>
                                </div>
                            </div>


                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ settings('facebook') }}" target="_blank">
                                            <i style="color: white !important;" class="fab fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ settings('instagram') }}" target="_blank">
                                            <i style="color: white !important;" class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="https://wa.me/{{ settings('phone') }}" target="_blank">
                                            <i style="color: white !important;" class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-footer-two">
                        <p>
                            @lang('backend.all-right-reserved') &copy; {{ now()->year }}
                            Powered by
                            <a class="text-white" target="_blank" href="https://foz.az">
                                FOZ
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
