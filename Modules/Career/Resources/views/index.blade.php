@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Careers
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Careers </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <a href="{{ route('admin.careers.create') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i> Add new career
        </a>
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($careers as $index => $career)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ $career->image_path }}" alt="logo" class="table-img">
                            </td>
                            <td>{{ $career->translate('en')->title }}</td>
                            <td>
                                <a href="{{ route('admin.careers.candidates.index', ['career' => $career->slug]) }}"
                                    class="icon-btn blue-bc" title="candidates">
                                    <i class="fas fa-users"></i>
                                </a>
                                <a href="{{ route('admin.careers.edit', ['career' => $career->slug]) }}"
                                    class="icon-btn green-bc" title>
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.careers.destroy', ['career' => $career->slug]) }}">
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
