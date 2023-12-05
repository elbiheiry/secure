@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> forums
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">forums </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <a href="{{ route('admin.forums.create') }}" class="custom-btn green-bc">
            <i class="fa fa-plus"></i> Add new forum
        </a>
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forums as $index => $forum)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $forum->translate('en')->title }}</td>
                            <td>
                                <a href="{{ route('admin.forums.comments', ['forum' => $forum->slug]) }}"
                                    class="icon-btn blue-bc">
                                    <i class="fas fa-comment"></i>
                                </a>
                                <a href="{{ route('admin.forums.edit', ['forum' => $forum->slug]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.forums.destroy', ['forum' => $forum->slug]) }}">
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
