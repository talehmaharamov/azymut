@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy"
                 data-originalbg="{{asset('frontend/img/1 (1).jpg')}}"></div>
        </div>

        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__back_title">
                                @lang('backend.contact-us')
                            </div>
                            <h1 class="page-masthead__title text-white">
                                @lang('backend.contact-us')
                            </h1>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                            <a data-barba href="" class="page-masthead-bread__item">
                                @lang('backend.home-page')
                            </a>
                            /
                            <a data-barba class="page-masthead-bread__item ">
                                @lang('backend.contact-us')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md md:pb-64">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 contactLogo ssllds">
                    <img style="width: 170px;height: 50px;" src="{{ asset('frontend/logos/Azymut loqo7.png')}}"
                         alt="Azymut">
                </div>
                <hr>
                <div class="col-md">
                    <div class=" md:pb-40">
                        <div class="text-sm text-black">
                            <h4>
                                @lang('backend.phone'):
                                {{ settings('phone') }}
                            </h4><br>
                            <h4>
                                @lang('backend.email'):
                                {{ settings('email') }}
                            </h4><br>
                            <h4 style="word-wrap: break-word;">
                                @lang('backend.address'):
                                {{ settings('address_'.app()->getLocale()) }}
                            </h4>
                        </div>
                        <div class="socialsSection mt-24">
                            <a data-barba href="{{ settings('facebook') }}" class="text-accent">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a data-barba href="{{ settings('whatsapp') }}" class="text-accent">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a data-barba href="{{ settings('instagram') }}" class="text-accent">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="">
                        <div class="sectionHeading -left-line bg-dark py-48 px-48 md:py-20 md:px-20">
                            <span class="sectionHeading__subtitle text-white">
                                @lang('backend.contact-with-us')
                            </span>
                            <h2 class="sectionHeading__title text-white">
                                @lang('backend.send-message')
                            </h2>

                            <form class="-light row" method="POST"
                                  action="{{ route('frontend.sendMessage') }}">
                                @csrf
                                <div class="col-12">
                                    <div class="js-input-group">
                                        <textarea name="message" rows="5"
                                                  placeholder="@lang('backend.message')"></textarea>
                                        <span class="form__error"></span>
                                    </div>
                                </div>
                                <div class="col-12 mt-20">
                                    <div class="js-input-group">
                                        <input type="text" name="name" data-required
                                               placeholder="@lang('backend.name')">
                                        <span class="form__error"></span>
                                    </div>
                                </div>
                                <div class="col-12 mt-20">
                                    <div class="js-input-group">
                                        <input type="email" name="email" data-required
                                               placeholder="@lang('backend.email')">
                                        <span class="form__error"></span>
                                    </div>
                                </div>
                                <div class="col-12 mt-20">
                                    <div class="js-input-group">
                                        <input type="text" name="phone" placeholder="@lang('backend.phone')">
                                    </div>
                                </div>

                                <div class="col-12 ajax-form-alert js-ajax-form-alert">
                                    <div class="ajax-form-alert__content"></div>
                                </div>

                                <div class="col-12 mt-32">
                                    <button type="submit" name="submit" class="button -md -accent text-white">
                                        @lang('backend.send-message')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <iframe src="{{ settings('map') }}" width="100%" height="600px" style="border:0; margin-top: 50px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

@endsection
