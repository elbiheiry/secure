@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> About us
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">About us </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.about.update', ['about' => $about->id]) }}">
            @csrf
            @method('PUT')
            @if ($about->image)
                <div class="col-md-12 col-sm-12 form-group">
                    <img src="{{ $about->image_path }}" alt="logo" width="150">
                </div>
            @endif

            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Icon</label>
                <input class="form-control" type="text" name="icon" value="{{ $about->icon }}">
            </div>
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Title ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="title_{{ $locale }}"
                        value="{{ $about->translate($locale)->title }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description_{{ $locale }}">{{ $about->translate($locale)->description }}</textarea>
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
