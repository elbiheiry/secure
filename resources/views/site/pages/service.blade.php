@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ $service->translate(locale())->name }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="{{ route('site.services') }}">{{ locale() == 'en' ? 'Services' : 'الخدمات' }}</a></li>
                        <li class="current"><a href="javascript:;">{{ $service->translate(locale())->name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section News 2 -->
    <div id="section-newsdetails1">
        <div class="container">
            <div class="row">
            	<!-- Sidebar -->
                <div class="sidebar col-12 col-sm-12 col-md-12 col-lg-4">
                    <!-- Category -->
                    <div class="category">
                        <!-- List -->
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            
                            @foreach ($relates as $index => $relate)
                                <li>
                                    <a class="{{ $index == 0 ? 'active' : '' }}" id="{{ $relate->slug }}-tab" data-toggle="tab" data-target="#{{ $relate->slug }}"
                                        type="button" role="tab" aria-controls="{{ $relate->slug }}"
                                        aria-selected="false">
                                        {{ $relate->translate(locale())->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.List -->
                    </div>
                    <!-- /.Category -->
                </div>
                <!-- /.Sidebar -->
                <!-- Contents -->
                <div class="contents col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($relates as $index => $relate)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="{{ $relate->slug }}" role="tabpanel"
                                aria-labelledby="{{ $relate->slug }}-tab">
                                <!-- Posts Contents -->
                                <img class="img-fluid main-image" src="{{ $relate->image_path }}" alt="">

                                {!! $relate->translate(locale())->description !!}
                            </div>
                        @endforeach
                    </div>
                    <!--@if (count($others) > 0)-->
                        <!-- Other Services -->
                    <!--    <div class="related-posts">-->
                    <!--        <h1>{{ locale() == 'en' ? 'Other Services' : 'خدمات أخري' }}</h1>-->
                    <!--        <div class="row">-->
                                <!-- Item -->
                    <!--            @foreach ($others as $other)-->
                    <!--                <div class="item col-sm-12 col-md-6">-->
                    <!--                    <a href="{{ route('site.service', ['service' => $other->slug]) }}">-->
                    <!--                        <div class="img-container">-->
                    <!--                            <img class="img-fluid" src="{{ $other->image_path }}" alt="">-->
                    <!--                            <div class="overlay">-->
                    <!--                                <div class="overlay-content">-->
                    <!--                                    <i></i>-->
                    <!--                                    <h3>{{ $other->translate(locale())->name }}</h3>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </a>-->
                    <!--                </div>-->
                    <!--            @endforeach-->
                                <!-- /.Item -->
                    <!--        </div>-->
                    <!--    </div>-->
                        <!-- /.Other Services -->
                    <!--@endif-->

                </div>
                <!-- /.Contents -->
            </div>
        </div>
    </div>
    <!-- /.Section News 2 -->
    <div id="section-subscribe1">
        <div class="container">
            <div class="row">
                <div class="title1 col-12">
                    <h2><span>{{ locale() == 'en' ? 'Stay connected to our' : 'إشترك الان في ' }}</span>
                        {{ locale() == 'en' ? 'Newsletters' : 'نشرتنا الإخبارية' }}</h2>
                    <i class="flaticon-download"></i>
                </div>
                <div class="content col-12">
                    <p>
                        @if (locale() == 'en')
                            Subscriber now to our newsletter to stay tuned for our newest updates
                        @else
                            إشترك الان في نشرتنا الإخبارية لتبقي علي إطلاع علي أخر أخبارنا
                        @endif
                    </p>
                </div>
                <div class="subscribe col-12">
                    <form action="{{ route('site.subscribe') }}" id="SubscribeForm" class="subscribe-form" method="post">
                        @csrf
                        @method('POST')
                        <input type="email" name="email"
                            placeholder="{{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }}">
                        <button type="submit">{{ locale() == 'en' ? 'Subscribe' : 'إشترك الان' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
