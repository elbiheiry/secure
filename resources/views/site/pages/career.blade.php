@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Careers' : 'الوظائف' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'Careers' : 'الوظائف' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section Careers -->
    <div id="section-portfoliodetails1" class="careers-page">
        <div class="container">
            <div class="row">
                <div class="title2 col-12">
                    <h2>{{ $career->translate(locale())->title }}</h2>
                    <i class="flaticon-download"></i>
                </div>
                <!-- Contents -->
                <div class="contents col-12 mb-0">
                    <div class="main-image-detail">
                        <ul>
                            <li id="img3">
                                <img class="img-fluid main-image" src="{{ $career->image_path }}" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="project-description col-12 col-sm-8">
                            {!! $career->translate(locale())->description !!}

                        </div>
                        <div class="sidebar-description col-12 col-sm-4">
                            <div class="item">
                                <h4>{{ locale() == 'en' ? 'Created' : 'أنشئ في' }}:</h4>
                                <p>{{ $career->created_at->format('M d Y') }}</p>
                            </div>
                            <div class="item">
                                <h4>{{ locale() == 'en' ? 'Location' : 'الموقع' }}:</h4>
                                <p>{{ $career->translate(locale())->location }}</p>
                            </div>
                            <div class="item">
                                <h4>{{ locale() == 'en' ? 'Vacation' : 'عدد الوظائف' }}:</h4>
                                <p>{{ $career->vacation }}</p>
                            </div>
                            <div class="item">
                                <h4>{{ locale() == 'en' ? 'Jop type' : 'نوع الوظيقة' }}:</h4>
                                <p>{{ $career->work_type }}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="section-contact">
                                <div class="contact-form col-sm-12">
                                    <!-- Form -->
                                    <form action="{{ route('site.careers.store') }}" method="post" class="contact-form">
                                        @csrf
                                        @method('post')
                                        <input type="hidden" name="career_id" value="{{ $career->id }}">
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم بالكامل' }}*">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }}*">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="{{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }}*">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="{{ locale() == 'en' ? 'Jop Title' : 'المسمي الوظيفي' }}*">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label class="UploadCV-wrapper" for="UploadCV">
                                                    <input type="file" id="UploadCV" name="cv">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <p>{{ locale() == 'en' ? 'Upload Your CV' : 'قم بتحميل السيرة الذاتية' }}
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <button type="submit">{{ locale() == 'en' ? 'Submit' : 'تأكيد' }}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.Contents -->
            </div>
        </div>
    </div>
    <!-- /.Section Careers -->
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
