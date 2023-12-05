@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> forums
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">forums </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="post" action="{{ route('admin.forums.store') }}">
            @csrf
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Title ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="title_{{ $locale }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description_{{ $locale }}"></textarea>
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
