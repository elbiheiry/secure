@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> about us
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">about us </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.work.update') }}">
            @csrf
            @method('PUT')
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>First description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control " name="description1_{{ $locale }}">{{ $work->translate($locale)->description1 }}</textarea>
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-md-6 col-sm-6 form-group">
                    <label>Second description ({{ strtoupper($locale) }})</label>
                    <textarea class="form-control tiny-editor" name="description2_{{ $locale }}">{{ $work->translate($locale)->description2 }}</textarea>
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
