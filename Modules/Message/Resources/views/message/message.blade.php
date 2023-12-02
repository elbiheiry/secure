@extends('layouts.master')
@section('content')
    <div class="page-head">
        <i class="fa fa-list"></i> Messages
        <ul class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-home"></i>home</a>
            </li>
            <li class="active">Messages</li>
        </ul>
    </div>
    <!-- Page content ==========================================-->
    <div class="page-content ">
        <h4 class="alert-text">You have {{ count($messages) }} Message</h4>
        @foreach ($messages as $index => $message)
            <div class="item-list gray">
                <a href="{{ route('admin.messages.show', ['id' => $message->id]) }}">
                    <div class="item-content">
                        {{ $message->message }}
                        <span>
                            <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans(null, true) }}
                        </span>
                    </div>
                </a>
            </div><!--End Item List-->
        @endforeach
    </div><!--End Page content-->
@endsection
