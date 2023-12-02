@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> articles
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">articles </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put"
            action="{{ route('admin.articles.update', ['article' => $article->slug]) }}">
            @csrf
            @method('PUT')
            <div class="col-md-12 col-sm-12 form-group">
                <img src="{{ $article->image_path }}" alt="logo" width="200">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                    <option value="0">Choose</option>
                    <option value="forum" {{ $article->type == 'forum' ? 'selected' : '' }}>Forum</option>
                    <option value="blog" {{ $article->type == 'blog' ? 'selected' : '' }}>Blog</option>
                </select>
            </div>
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Title ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="title_{{ $locale }}"
                        value="{{ $article->translate($locale)->title }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Department ({{ strtoupper($locale) }})</label>
                    <input class="form-control" type="text" name="department_{{ $locale }}"
                        value="{{ $article->translate($locale)->department }}">
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description_{{ $locale }}">{{ $article->translate($locale)->description }}</textarea>
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
