<section class="layout-pt-lg layout-pb-lg bg-beige-light">
    <div class="container">

        <div class="row">
            <div class="col-auto">
                <div class="sectionHeading -left-line">
{{--                    <span class="sectionHeading__subtitle">BLOG</span>--}}
                    <h2 class="sectionHeading__title">
                        @lang('backend.service')
                    </h2>
                </div>
            </div>
        </div>

        <div class="row y-gap-32 layout-pt-sm">
            @foreach($mainPageServices as $mPS)
                <div class="col-lg-4 col-md-6">
                    <div data-anim-wrap class="blog -hover">
                        <a data-barba href="{{ route('frontend.selectedProject',$mPS->slug) }}">
                            <div class="blog__image">
                                <div data-anim-child="img-right">
                                    <div>
                                        <div class="ratio ratio-41:35">
                                            <img class="ratio-img" src="{{ asset($mPS->photo) }}" alt="{{ $mPS->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="blog__category">Interior</div>--}}
                            </div>
                        </a>

                        <div class="blog__content mt-20">
                            <div data-anim-child="slide-up delay-7">
                                <a data-barba href="#">
                                    <h3 class="blog__title text-black pr-80 lg:pr-0">
                                        {{ $mPS->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}
                                    </h3>
                                </a>
                            </div>

                            <div data-anim-child="slide-up delay-8">
                                <a data-barba href="#" class="blog__button button -simple text-black">
                                    @lang('backend.read-more')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
