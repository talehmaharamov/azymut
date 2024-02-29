@extends('master.frontend')
@section('title',__('backend.videos'))
@section('front')
    <header class="page-header" data-background="{{asset('images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>@lang('backend.videos')</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('backend.videos')</li>
            </ol>
        </div>
    </header>
    @if(!$videos->isEmpty())
    <section class="press-relases">
        <div class="container">
            <div class="row">
                @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                        {!! $video->link !!}
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
