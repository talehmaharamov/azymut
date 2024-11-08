@extends('master.frontend')
@section('title',__('backend.page-not-found'))
@section('front')
    <div class="rts-404-area ptb--200 ptb_md--100 ptb_sm--80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper-404 text-center">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/images/contact/04.png')}}" alt="">
                        </div>
                        <h2 class="title mt--40">
                           @lang('backend.data-not-found')!
                        </h2>
                        <a class="rts-btn btn-primary" href="{{ route('frontend.index') }}">
                            @lang('backend.back-to-home')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
