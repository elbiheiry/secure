@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> About us
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">About us </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">
        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $index => $about)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $about->translate('en')->title }}</td>
                            <td>
                                <a href="{{ route('admin.about.edit', ['about' => $about->id]) }}"
                                    class="icon-btn green-bc">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div><!--End Page content-->
@endsection
