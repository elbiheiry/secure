@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Social links
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Social links</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.links.update', ['id' => $link->id]) }}">
            @csrf
            @method('put')

            <div class="col-md-6 col-sm-6 form-group">
                <label>Name </label>
                <input class="form-control" type="text" name="name" value="{{ $link->name }}">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Link</label>
                <input class="form-control" type="text" name="link" value="{{ $link->link }}">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Icon</label>
                <input class="form-control" type="text" name="icon" value="{{ $link->icon }}">
            </div>

            <div class="col-md-12 col-sm-12">
                <hr>
            </div>
            <div class="col-md-12 col-sm-12 form-group">
                <button class="custom-btn">
                    <span> <i class="fa fa-save"></i> save</span>
                </button>

            </div>

        </form>
    </div><!--End Page content-->
@endsection
