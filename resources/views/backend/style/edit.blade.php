@extends('master.backend')
@section('title',__('backend.style'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.style.update',$id) }}" class="needs-validation"
                                  novalidate method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.templates.components.card-col-12',['variable' => 'style'])
                                    @include('backend.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.name') <span class="text-danger">*</span></label>
                                                        <input name="name[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $style->translate($lan->code)->name ?? __('backend.translation-not-found') }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.alt')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <textarea name="alt[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  placeholder="@lang('backend.alt')"
                                                                  rows="3">{{ $style->translate(app()->getLocale())->alt ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>@lang('backend.slug') <span class="text-danger">*</span></label>
                                            <input name="slug" type="text" class="form-control" required
                                                   value="{{ $style->slug }}">
                                            {!! validation_response('backend.slug') !!}
                                        </div>
                                        <div class="mb-3">
                                            <label>@lang('backend.photo')</label>
                                            <input name="photo" type="file" class="form-control mb-4">
                                            @if(file_exists($style->photo))
                                                <img src="{{ asset($style->photo) }}" class="form-control w-100">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label>@lang('backend.photos')</label>
                                            <input type="file" class="form-control mb-2" id="photos" name="photos[]"
                                                   multiple>
                                            <div id="image-preview-container" class="d-flex flex-wrap"></div>
                                            @if($style->photos()->exists())
                                                <div class="d-flex"
                                                     style="min-height: 150px; overflow: hidden; margin-bottom: 10px;border: 1px solid black; flex-wrap:wrap">
                                                    @foreach($style->photos()->get() as $photo)
                                                        <div style="position:relative;" class="wraper col-2 m-3">
                                                            <img src="{{ asset($photo->photo) }}"
                                                                 style="height: 200px; width: 200px; object-fit: cover;">
                                                            <a style="position: absolute; right:5px; top:5px"
                                                               type="button" class="btn btn-danger"
                                                               href="{{ route('backend.stylePhotoDelete',$photo->id) }}">X</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck2"
                                                   @if($style->is_home == 1) checked @endif
                                                   name="is_home">
                                            <label class="form-check-label" for="formCheck2">
                                                @lang('backend.is-home')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @include('backend.templates.components.buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
