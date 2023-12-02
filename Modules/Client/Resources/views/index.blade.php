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
        <form class="row ajax-form" method="post" action="{{ route('admin.clients.store') }}">
            @csrf

            <div class="col-md-6 col-sm-6 form-group">
                <label>Image</label>
                <input class="jfilestyle" type="file" name="image">
            </div>
            <div class="col-md-6 col-sm-6 form-group">
                <label>Link</label>
                <input class="form-control" type="text" name="link">
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
    <div class="page-content">
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $index => $client)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><img src="{{ $client->image_path }}" class="table-img"></td>
                            <td>
                                <a href="{{ route('admin.clients.edit', ['client' => $client->id]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.clients.destroy', ['client' => $client->id]) }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div><!--End Page content-->
@endsection
