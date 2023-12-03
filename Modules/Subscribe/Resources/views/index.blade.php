@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Subscribers
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Subscribers </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $index => $subscriber)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $subscriber->email }}</td>
                            <td>
                                <a href="javascript:;" class="icon-btn red-bc delete-btn"
                                    data-url="{{ route('admin.subscribers.destroy', ['id' => $subscriber->id]) }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $subscribers->links() !!}
        </div>
    </div><!--End Page content-->
@endsection
