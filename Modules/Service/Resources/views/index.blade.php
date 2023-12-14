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
        <a href="{{ route('admin.services.create') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i> Add new service
        </a>
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $index => $service)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ $service->image_path }}" alt="logo" class="table-img">
                            </td>
                            <td>{{ $service->translate('en')->name }}</td>
                            <td>{{ $service->parent_id == 0 ? 'Main service' : 'Sub to ' . $service->parent->translate('en')->name }}
                            </td>
                            <td>
                                <a href="{{ route('admin.services.edit', ['service' => $service->slug]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.services.destroy', ['service' => $service->slug]) }}">
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
