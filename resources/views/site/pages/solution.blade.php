@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ $solution->translate(locale())->name }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li><a href="{{ route('site.solutions') }}">{{ locale() == 'en' ? 'solutions' : 'حلولنا' }}</a></li>
                        <li class="current"><a href="javascript:;">{{ $solution->translate(locale())->name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section Solution -->
    <div id="section-portfoliodetails1" class="solution-sec2">
        <div class="container">
            <div class="row">
                <div class="title2 ez-animate col-12" data-animation="slideInUp">
                    <h2>{{ $solution->translate(locale())->name }} </h2>
                    <i class="flaticon-download"></i>
                </div>
                <!-- Contents -->
                <div class="contents col-12">
                    <div class="main-image-detail">
                        <ul>
                            <li id="img3" style="display: list-item;">
                                <img class="img-fluid main-image" src="{{ $solution->image_path }}" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="project-description col-12">
                            {!! $solution->translate(locale())->description !!}
                        </div>
                    </div>
                </div>
                <!-- /.Contents -->
                @if (count($relates) > 0)
                    <div class="related-projects col-12">
                        <h2>{{ locale() == 'en' ? 'Other Solutions' : 'الحلول الأخري' }}</h2>
                        <div class="row">
                            <!-- Item -->
                            @foreach ($relates as $relate)
                                <div class="item col-sm-12 col-md-4">
                                    <a href="{{ route('site.solution', ['solution' => $relate->slug]) }}">
                                        <div class="img-container">
                                            <img class="img-fluid" src="{{ $relate->image_path }}" alt="">
                                            <div class="overlay">
                                                <div class="overlay-content">
                                                    <i></i>
                                                    <h3>{{ $relate->translate(locale())->name }}</h3>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <!-- /.Item -->
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- /.Section Solution -->
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
