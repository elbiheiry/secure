@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> services
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">services </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put"
            action="{{ route('admin.services.update', ['service' => $service->slug]) }}">
            @csrf
            @method('PUT')
            <div class="col-md-6 col-sm-6 form-group">
                @if ($service->outer_image)
                    <img src="{{ $service->outer_image_path }}" alt="logo" style="height : 100px; !importnant">
                @else
                    {{-- <img src="{{ $service->outer_image_path }}" alt="logo" style="height : 100px; !importnant"> --}}
                @endif

            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <img src="{{ $service->image_path }}" alt="logo" width="250">
            </div>

            <div class="col-md-6 col-sm-6 form-group">
                <label>Outer image</label>
                <input class="jfilestyle" type="file" name="outer_image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Icon</label>
                <input class="form-control" type="text" name="icon" value="{{ $service->icon }}">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Service Sub to :</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{ $service->parent_id == 0 ? 'selected' : '' }}>Main category</option>
                    @foreach ($services as $item)
                        <option value="{{ $item->id }}" {{ $service->parent_id == $item->id ? 'selected' : '' }}>
                            {{ $item->translate('en')->name }}</option>
                    @endforeach
                </select>
            </div>
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Name ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="name_{{ $locale }}"
                        value="{{ $service->translate($locale)->name }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description_{{ $locale }}">{{ $service->translate($locale)->description }}</textarea>
                </div>
            @endforeach
            <div class="col-md-12 col-sm-12 form-group">
                <button class="custom-btn">
                    <span> <i class="fa fa-save"></i> save</span>
                </button>

            </div>

        </form>
    </div><!--End Page content-->
@endsection
