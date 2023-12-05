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

        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $index => $comment)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.forums.comments.destroy', ['id' => $comment->id]) }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $comments->links() !!}
        </div>
    </div><!--End Page content-->
@endsection
