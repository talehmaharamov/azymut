@if(!$packages->isEmpty())
    <section class="get-consultation pb-5" data-background="{{ asset('frontend/images/section-bg01.jpg')}}"
             data-stellar-background-ratio="0.9">
        <div class="container">
            <div class="col-lg-6 wow fadeInUp">
                <h4>@lang('backend.repair-packages')</h4>
            </div>
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-lg-4 col-md-6 fadeInUp wow">
                        <div class="content-box">
                            <h4>{{ $package->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h4>
                            <b></b>
                            <h3>{{ $package->amount ?? 0 }} AZN</h3>
                            <b></b>
                            <div>{!! $package->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}</div>
{{--                            <a href="#">@lang('backend.create-order')<i class="fas fa-caret-right"></i></a>--}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif

