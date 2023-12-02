@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> careers
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">careers </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.careers.update', ['career' => $career->slug]) }}">
            @csrf
            @method('PUT')
            <div class="col-md-6 col-sm-6 form-group">
                <img src="{{ $career->image_path }}" alt="logo" width="100">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                    <option value="0">Choose</option>
                    <option value="fulltime" {{ $career->type == 'fulltime' ? 'selected' : '' }}>Full time</option>
                    <option value="parttime" {{ $career->type == 'parttime' ? 'selected' : '' }}>Part time</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>No. of vaccancies</label>
                <input class="form-control" type="number" name="vacation" value="{{ $career->vacation }}">
            </div>
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Title ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="title_{{ $locale }}"
                        value="{{ $career->translate($locale)->title }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Location ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="location_{{ $locale }}"
                        value="{{ $career->translate($locale)->location }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description_{{ $locale }}">{{ $career->translate($locale)->description }}</textarea>
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
