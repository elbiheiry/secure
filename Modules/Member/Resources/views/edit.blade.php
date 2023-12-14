@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> members
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">members </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <form class="row ajax-form" method="put" action="{{ route('admin.members.update', ['member' => $member->id]) }}">
            @csrf
            @method('PUT')

            <div class="col-md-6 col-sm-6 form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ $member->name }}">
            </div>

            <div class="col-md-6 col-sm-6 form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{ $member->email }}">
            </div>

            <div class="col-md-6 col-sm-6 form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="col-md-12 col-sm-12 form-group">
                <button class="custom-btn">
                    <span> <i class="fa fa-save"></i> save</span>
                </button>
            </div>
        </form>
    </div><!--End Page content-->
@endsection
