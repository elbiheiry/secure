@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Messages
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Messages</li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content only-message">
        <div class="message-head">
            <div class="sender-name">
                {{ $message->name }} ({{ $message->phone }})
                {{-- <p>{{ $message->email }}</p> --}}
                <span>
                    <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans(null, true) }}
                </span>
            </div>
        </div>
        <div class="message-details">
            {{ $message->message }}
        </div>
    </div>
    <!--End Page content-->
@endsection
