@extends('master.frontend')
@section('title',__('backend.news'))
@section('front')
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">
                            @lang('backend.blogs')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-latest-project-area mt--30 mb--30">
        <div class="container">
            <div class="row g-24">
                @foreach($mainBlogs as $content)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="blog-single-two-wrapper">
                            <div class="image-area">
                                <a href="{{ route('frontend.selectedBlog',$content->slug) }}" class="thumbnail">
                                    <img src="{{ asset($content->photo) }}"
                                         alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}">
                                </a>
                            </div>
                            <div class="inner">
                                <a href="{{ route('frontend.selectedBlog',$content->slug) }}">
                                    <h5 class="title">
                                        {{ $content->translate(app()->getLocale())->name ?? '' }}
                                    </h5>
                                </a>
                                <a href="{{ route('frontend.selectedBlog',$content->slug) }}"
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
                        @if($mainBlogs->isNotEmpty())
                            <div class="rts-elevate-pagination">
                                <ul>
                                    @if (!$mainBlogs->onFirstPage())
                                        <li>
                                            <button class="disabled">
                                                <<
                                            </button>
                                        </li>
                                    @endif
                                    @for ($i = 1; $i <= $mainBlogs->lastPage(); $i++)
                                        @if ($i == $mainBlogs->currentPage())
                                            <li>
                                                <button class="active">{{ $i }}</button>
                                            </li>
                                        @else
                                            <li><a href="{{ $mainBlogs->url($i) }}">
                                                    <button>{{ $i }}</button>
                                                </a></li>
                                        @endif
                                    @endfor
                                    @if ($mainBlogs->hasMorePages())
                                        <li>
                                            <a href="{{ $mainBlogs->nextPageUrl() }}">
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
