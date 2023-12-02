@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Candidates
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home
                </a>
            </li>
            <li>
                <a href="{{ route('admin.careers.index') }}">
                    <i class="fa fa-list"></i>Careers
                </a>
            </li>
            <li class="active">Candidates </li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content">

        <div class="table-responsive-lg-lg">
            <table class="table table-bordered" id="datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job title</th>
                        <th>Download CV</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidates as $index => $candidate)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                {{ $candidate->name }}
                            </td>
                            <td>
                                {{ $candidate->email }}
                            </td>
                            <td>
                                {{ $candidate->phone }}
                            </td>
                            <td>
                                {{ $candidate->title }}
                            </td>
                            <td>
                                <a href="{{ $candidate->resume_path }}" download>Download CV</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div><!--End Page content-->
@endsection
