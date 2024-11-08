<div class="rts-faw-area-2 faq-bg-2 bg_image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 first-child">
                <div class="title-mid-wrapper-home-two left">
                    <h2 class="title">
                        @lang('backend.faq')
                    </h2>
                </div>
                <div class="accordion-two" id="accordionExample">
                    @foreach($faqs as $key => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $key }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $key }}" aria-expanded="true"
                                        aria-controls="collapse{{ $key }}">
                                    {{ $faq->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                </button>
                            </h2>
                            <div id="collapse{{ $key }}"
                                 class="accordion-collapse collapse {{ ($loop->first) ? 'show' : '' }}"
                                 aria-labelledby="heading{{ $key }}" data-bs-parent="#accordi{{ $key }}xample">
                                <div class="accordion-body">
                                    <p class="disc" style="color: #00007d !important;">
                                        {!! $faq->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

{{--<section class="layout-pt-md layout-pb-sm">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-auto">--}}
{{--                <div class="sectionHeading -top-line text-center">--}}
{{--                    <span class="sectionHeading__subtitle">FAQ</span>--}}
{{--                    <h2 class="sectionHeading__title">--}}
{{--                        @lang('backend.faq')--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row justify-content-center pt-60">--}}
{{--            <div class="col-xl-12 col-lg-10">--}}
{{--                <div class="accordion -simple js-accordion">--}}
{{--                    @foreach($faqs as $faq)--}}
{{--                        <div class="accordion__item">--}}
{{--                            <div class="accordion__button text-black">--}}
{{--                                <button class="text-lg md:text-base fw-600 text-black">--}}
{{--                                    {{ $faq->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}--}}
{{--                                </button>--}}
{{--                                <div class="accordion__icon">--}}
{{--                                    <i class="icon" data-feather="plus"></i>--}}
{{--                                    <i class="icon" data-feather="minus"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="accordion__content">--}}
{{--                                <div class="accordion__content__inner">--}}
{{--                                    <p class="text-sm">--}}
{{--                                        {!! $faq->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
