<section class="press-relases">
    <div class="container">
        <div class="row">
            @foreach($styles as $style)
                <div class="col-xl-3 col-lg-4 col-md-6 service-box-wrap wow fadeInUp" data-wow-delay="0s">
                    <div class="service-box" style="background-image: url({{ asset($style->photo) }})">
                        <a href="{{ route('frontend.selectedStyle',$style->slug) }}"
                           alt="{{ $style->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                            <div class="service-info">
                                <h5>{{ $style->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h5>
                                <p>{{ $style->created_at->format('d.m.Y') }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>







