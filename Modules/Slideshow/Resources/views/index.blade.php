@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Slideshow
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Slideshow </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <a href="{{ route('admin.slides.create') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i> Add new slide
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
                    @foreach ($slides as $index => $slide)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ $slide->image_path }}" alt="logo" class="table-img">
                            </td>
                            <td>{{ $slide->translate('en')->title }}</td>
                            <td>
                                <a href="{{ route('admin.slides.edit', ['slide' => $slide->id]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.slides.destroy', ['slide' => $slide->id]) }}">
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
