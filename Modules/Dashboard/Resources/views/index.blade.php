@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $index => $message)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>

                            <td>
                                <a href="{{ route('admin.message.show', ['id' => $message->id]) }}" class="icon-btn green-bc">
                                    <i class="fas fa-eye"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
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
        </div>
    </div><!--End Page content-->
@endsection
