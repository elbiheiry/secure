@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Services' : 'الخدمات' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current">{{ locale() == 'en' ? 'Services' : 'الخدمات' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section About -->
    @foreach ($allServices as $index => $service)
        <div id="{{ $index % 2 == 0 ? 'section-services2' : '' }}"
            class="{{ $index % 2 != 0 ? 'section-services2 bg-2' : '' }}">
            <div class="container">
                <div class="row">
                    @if ($index % 2 == 0)
                        <div class="left col-sm-12 col-md-6">
                            <h1>{{ $service->translate(locale())->name }} </h1>
                            {!! \Str::limit($service->translate(locale())->description, 700) !!}
                            <a href="{{ route('site.service', ['service' => $service->slug]) }}" class="btn-3">
                                {{ locale() == 'en' ? 'More Details' : 'المزيد من التفاصيل' }} <i
                                    class="fa fa-chevron-{{ locale() == 'en' ? 'right' : 'left' }}"></i></a>
                        </div>
                        <div class="right ez-animate col-sm-12 col-md-6" data-animation="fadeIn">
                            <img class="img-fluid" src="{{ $service->outer_image_path }}" alt=""
                                style="max-width: 450px;">
                        </div>
                    @else
                        <div class="right ez-animate col-sm-12 col-md-6" data-animation="fadeIn">
                            <img class="img-fluid" src="{{ $service->outer_image_path }}" alt=""
                                style="max-width: 450px;">
                        </div>
                        <div class="left col-sm-12 col-md-6">
                            <h1>{{ $service->translate(locale())->name }} </h1>
                            {!! \Str::limit($service->translate(locale())->description, 700) !!}
                            <a href="{{ route('site.service', ['service' => $service->slug]) }}" class="btn-3">
                                {{ locale() == 'en' ? 'More Details' : 'المزيد من التفاصيل' }} <i
                                    class="fa fa-chevron-{{ locale() == 'en' ? 'right' : 'left' }}"></i></a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    @endforeach
    <!-- /.Section About -->
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
