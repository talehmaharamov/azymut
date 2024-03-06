@extends('master.backend')
@section('title',__('backend.team'))
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('backend.team.update',$id) }}" class="needs-validation"
                                  novalidate method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    @include('backend.templates.components.card-col-12',['variable' => 'team'])
                                    @include('backend.templates.components.multi-lan-tab')
                                    <div class="tab-content p-3 text-muted">
                                        @foreach(active_langs() as $lan)
                                            <div class="tab-pane @if($loop->first) active show @endif"
                                                 id="{{ $lan->code }}"
                                                 role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="mb-3">
                                                        <label>@lang('backend.name')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input name="name[{{ $lan->code }}]" type="text"
                                                               class="form-control"
                                                               required=""
                                                               value="{{ $team->translate($lan->code)->name ?? '' }}">
                                                        {!! validation_response('backend.name') !!}
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>
                                                            @lang('backend.position')
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <textarea name="position[{{ $lan->code }}]" type="text"
                                                                  class="form-control"
                                                                  required=""
                                                                  rows="3">{!! $team->translate($lan->code)->position ?? '' !!}</textarea>
                                                        {!! validation_response('backend.position') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="mb-3">
                                            <label>@lang('backend.photo')</label>
                                            <input type="file" name="photo" class="form-control">
                                            @if(file_exists($team->photo))
                                                <img class="form-control mt-2" width="100%"
                                                     src="{{ asset($team->photo) }}">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                @lang('backend.phone')
                                            </label>
                                            <input name="phone" type="text" class="form-control"
                                                   value="{{ $team->phone }}">
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                @lang('backend.email')
                                            </label>
                                            <input name="email" type="text" class="form-control"
                                                   value="{{ $team->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                @lang('backend.alt')
                                            </label>
                                            <textarea rows="3" name="alt" type="text"
                                                      class="form-control">{!! $team->alt !!}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                Facebook
                                            </label>
                                            <input name="facebook" type="text" class="form-control"
                                                   value="{{ $team->facebook }}">
                                        </div>
                                        <div class="mb-3">
                                            <label>
                                                Instagram
                                            </label>
                                            <input name="instagram" type="text" class="form-control"
                                                   value="{{ $team->instagram }}">
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
