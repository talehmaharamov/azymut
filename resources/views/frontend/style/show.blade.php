@extends('master.frontend')
@section('meta')
    <meta name="description" content="{{ $style->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>{{ $style->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active"
                    aria-current="page">{{$style->translate(app()->getLocale())->name ?? __('backend.translation-not-found')}}</li>
            </ol>
        </div>
    </header>
    @if($style->photos()->exists())
        <section
            class="get-consultation" style="background-color: transparent"
            data-background="{{ asset('frontend/images/section-bg01.jpg')}}"
            data-stellar-background-ratio="0.9">
            <div class="container">
                <div class="row side-content">
                    <div class="widget">
                        <ul class="side-gallery">
                            @foreach($style->photos()->get() as $photo)
                                <li>
                                    <a href="{{ asset($photo->photo)}}" data-fancybox>
                                        <img src="{{ asset($photo->photo)}}"
                                             alt="{{ $style->translate(app()->getLocale())->alt ?? __('backend.translation-not-found') }}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
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
