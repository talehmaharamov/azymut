@extends('master.frontend')
@section('title',__('backend.repair-packages'))
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>@lang('backend.repair-packages')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('backend.repair-packages')</li>
            </ol>
        </div>
    </header>
    @if(!$packages->isEmpty())
        <section class="get-consultation" style="background-color: transparent"
                 data-background="{{ asset('frontend/images/section-bg01.jpg')}}"
                 data-stellar-background-ratio="0.9">
            <div class="container">
                <div class="row">
                    @foreach($packages as $package)
                        <div class="col-lg-4 col-md-6 fadeInUp wow">
                            <div class="content-box">
                                <h4>{{ $package->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h4>
                                <b></b>
                                <h3>{{ $package->amount ?? 0 }} AZN</h3>
                                <b></b>
                                <div>{!! $package->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}</div>
                                <a href="#">@lang('backend.create-order')<i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="error404">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                          <h2 class="mb-4">@lang('backend.data-not-found')</h2>
                        <a href={{ route('frontend.index') }}>@lang('backend.go-to-back')</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
