@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> solutions
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">solutions </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <a href="{{ route('admin.solutions.create') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i> Add new solution
        </a>
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solutions as $index => $solution)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ $solution->image_path }}" alt="logo" class="table-img">
                            </td>
                            <td>{{ $solution->translate('en')->name }}</td>
                            <td>
                                <a href="{{ route('admin.solutions.edit', ['solution' => $solution->slug]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.solutions.destroy', ['solution' => $solution->slug]) }}">
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
