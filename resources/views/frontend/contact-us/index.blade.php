@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <section class="page-masthead">
        <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg="{{('frontend/img/backgrounds/6.jpg')}}"></div>
        </div>

        <div class="container">
            <div class="page-masthead__content">
                <div class="row justify-content-between md:justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-10">
                        <div data-anim="slide-up delay-1">
                            <div class="page-masthead__subtitle">Explore the features</div>
                            <div class="page-masthead__back_title">Contact Us</div>
                            <h1 class="page-masthead__title text-white">Contact Us</h1>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                            <a data-barba href="{{ route('frontend.index') }}" class="page-masthead-bread__item">
                                @lang('backend.home-page')
                            </a>
                            /
                            <a data-barba href="#" class="page-masthead-bread__item ">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-xl md:pb-64">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-7 col-lg-7 z-1">
                    <div id="map" class="map ratio ratio-1:1">
                        {{--                        <iframe id="map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194472.76853003306!2d49.69014890705255!3d40.394737007992184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2sBaku!5e0!3m2!1sen!2saz!4v1707629377113!5m2!1sen!2saz" width="600px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 offset-lg-1">
                    <div class="md:pt-40 md:pb-40">
                        <div class="sectionHeading -left-line">
                            <span class="sectionHeading__subtitle">
                                @lang('backend.contact-information')
                            </span>
                            <h2 class="sectionHeading__title">
                                @lang('backend.azymut')
                            </h2>
                        </div>

                        <div class="text-sm text-black leading-4xl mt-48 md:mt-16">
                            <p>
                                @lang('backend.phone'):
                                {{ settings('phone') }}
                            </p>
                            <p>
                                @lang('backend.email'):
                                {{ settings('email') }}
                            </p>
                            <p>
                                @lang('backend.address'):
                                {{ settings('address_'.app()->getLocale()) }}
                            </p>
                        </div>

                        <div class="sectionHeading__button mt-24 md:mt-20">
                            <a data-barba href="#" class="button -simple text-black">GET DIRECTIONS</a>
                        </div>

                        <div class="socialsSection mt-24">
                            <a data-barba href="#" class="text-accent">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a data-barba href="#" class="text-accent">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a data-barba href="#" class="text-accent">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a data-barba href="#" class="text-accent">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 offset-lg-5 z-5">
                    <div class="mt-minus-xl md:mt-0">
                        <div class="sectionHeading -left-line bg-dark py-48 px-48 md:py-20 md:px-20">
                            <span class="sectionHeading__subtitle text-white">
                                @lang('backend.contact-us')
                            </span>
                            <h2 class="sectionHeading__title text-white">
                                @lang('backend.send-message')
                            </h2>

                            <form class="-light row js-ajax-form" method="POST"
                                  action="{{ route('frontend.sendMessage') }}"
                                  data-message-success="Your message has been sent! We will reply you as soon as possible."
                                  data-message-error="Something went wrong. Please contact me directly at <a href='hellix@example.com'>hellix@example.com</a>.">
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
    </section>

@endsection
