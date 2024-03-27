@extends('master.frontend')
@section('title',__('title.index'))
@section('front')
    <div class="content-wrapper  js-content-wrapper">
        @include('frontend.includes.sidebar')
        @include('frontend.layouts.slider')
        @include('frontend.layouts.projects')
{{--        @include('frontend.layouts.services')--}}
        @include('frontend.layouts.counter')
        @include('frontend.layouts.faq')
        @include('frontend.layouts.team')
        @include('frontend.layouts.partners')
@endsection
