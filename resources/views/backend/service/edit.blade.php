@extends('master.backend')
@section('title',__('backend.service'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.service.update',$id) }}" class="needs-validation" novalidate
                                  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.templates.components.card-col-12',['variable' => 'service'])
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
                                                               id="name{{ $lan->code }}"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $service->translate($lan->code)->name ?? '' }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.description') <span
                                                                class="text-danger">*</span></label>
                                                        <textarea name="description[{{ $lan->code }}]"
                                                                  id="elm{{$lan->code}}1"
                                                                  class="form-control"
                                                                  required="">{!! $service->translate($lan->code)->description ?? '' !!}</textarea>
                                                        {!! validation_response('backend.description') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.title')(Meta)</label>
                                                        <input name="meta_title[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               value="{{ $service->translate($lan->code)->meta_title ?? '' }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.description')(Meta)</label>
                                                        <textarea name="meta_description[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  rows="5">{{ $service->translate($lan->code)->meta_description ?? '' }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>@lang('backend.alt')</label>
                                                        <textarea name="alt[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  rows="5">{!! $service->translate($lan->code)->alt ?? '' !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>
                                                @lang('backend.slug')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input name="slug" type="text" id="slug" class="form-control" required
                                                   value="{{ $service->slug }}">
                                            {!! validation_response('backend.slug') !!}
                                        </div>
                                            <div class="mb-3">
                                                <label>@lang('backend.photo') <span class="text-danger">*</span></label>
                                                <input name="photo" type="file"
                                                       class="form-control">
                                                @if(file_exists($service->photo))
                                                    <img src="{{ asset($service->photo) }}" class="mt-3 w-100">
                                                @endif
                                                {!! validation_response('backend.photo') !!}
                                            </div>
                                            <div class="mb-3">
                                                <label>@lang('backend.photos')</label>
                                                <input type="file" class="form-control mb-2" id="photos" name="photos[]"
                                                       multiple>
                                                <div id="image-preview-container" class="d-flex flex-wrap"></div>
                                                @if($service->photos()->exists())
                                                    <div class="d-flex"
                                                         style="min-height: 150px; overflow: hidden; margin-bottom: 10px;border: 1px solid black; flex-wrap:wrap">
                                                        @foreach($service->photos()->get() as $photo)
                                                            <div style="position:relative;" class="wraper  m-3">
                                                                <img src="{{ asset($photo->photo) }}"
                                                                     style="height: 200px; width: 170px; object-fit: cover;">
                                                                <a style="position: absolute; right:5px; top:5px"
                                                                   type="button" class="btn btn-danger"
                                                                   href="{{ route('backend.deletePhoto',['model' => 'Service','id' => $photo->id]) }}">X</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        @include('backend.templates.components.buttons')
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('backend.templates.components.tiny')
    @include('backend.templates.components.preview-images')
@endsection
