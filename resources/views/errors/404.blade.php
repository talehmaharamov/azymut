@extends('master.frontend')
@section('title',__('backend.page-not-found'))
@section('front')
    <section class="no-page">
        <div data-parallax="0.6" class="no-page__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg=""></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-8 col-md-10">
                    <div class="no-page__content">
                        <h1 class="no-page__title text-white">404</h1>
                        <p class="no-page__text text-white mt-8">
                            @lang('backend.page-not-found')
                        </p>
                        <div class="no-page__button mt-64 md:mt-48">
                            <a data-barba href="{{ route('frontend.index') }}" class="button -md -accent text-white">
                                @lang('backend.back-to-home')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
