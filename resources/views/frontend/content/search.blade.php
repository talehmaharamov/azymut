@extends('master.frontend')
@section('title',$keyword)
@section('front')
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">
                            {{ $keyword }}
                        </h1>
                        <div class="meta">
                            <a href="{{ route('frontend.index') }}" class="prev">@lang('backend.home-page') /</a>
                            <a href="#" class="next">
                                {{ $keyword }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-latest-project-area rts-section-gap">
        <div class="container">
            <div class="row g-24">
                @foreach($contents as $content)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="blog-single-two-wrapper">
                            <div class="image-area">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}" class="thumbnail">
                                    <img src="{{ asset($content->photo) }}"
                                         style="width:421px !important; height:266px !important;"
                                         alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}">
                                    <h5 class="title">
                                        {{ $content->translate(app()->getLocale())->name ?? '' }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.selectedContent',$content->slug) }}"
                                   class="btn-read-more-blog">
                                    @lang('backend.load-more')
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row mt--30">
                    <div class="col-lg-12">
                        @if($contents->isNotEmpty())
                            <div class="rts-elevate-pagination">
                                <ul>
                                    @if (!$contents->onFirstPage())
                                        <li>
                                            <button class="disabled">
                                                <<
                                            </button>
                                        </li>
                                    @endif
                                    @for ($i = 1; $i <= $contents->lastPage(); $i++)
                                        @if ($i == $contents->currentPage())
                                            <li>
                                                <button class="active">{{ $i }}</button>
                                            </li>
                                        @else
                                            <li><a href="{{ $contents->url($i) }}">
                                                    <button>{{ $i }}</button>
                                                </a></li>
                                        @endif
                                    @endfor
                                    @if ($contents->hasMorePages())
                                        <li>
                                            <a href="{{ $contents->nextPageUrl() }}">
                                                <button>
                                                    >>
                                                </button>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
