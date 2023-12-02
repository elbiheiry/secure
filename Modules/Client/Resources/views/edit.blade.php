@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Business partners
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Business partners</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.clients.update', ['client' => $client->id]) }}">
            @csrf
            @method('put')

            <div class="col-md-12 col-sm-12 form-group">
                <img src="{{ $client->image_path }}" alt="logo">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Link</label>
                <input class="form-control" type="text" name="link" value="{{ $client->link }}">
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
