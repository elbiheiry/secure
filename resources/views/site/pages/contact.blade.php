@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Contact Us' : 'تواصل معنا' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'Contact Us' : 'تواصل معنا' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section Contact -->
    <div id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>{{ locale() == 'en' ? 'Get in Touch' : 'تواصل معنا' }}</h1>
                </div>
                <!-- Contact Details -->
                <div class="contact-details col-sm-12 p-3">
                    <div class="row justify-content-center">
                        @foreach ($branches as $branch)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <!-- Item -->
                                <div class="item">
                                    <div class="thumb-icon">
                                        <img src="{{ $branch->image_path }}" alt="">
                                    </div>
                                    <div class="description">
                                        <p>{{ $branch->translate(locale())->address }} </p>
                                    </div>
                                </div>
                                <!-- /.Item -->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.Contact Details -->
                <!-- Contact Form -->
                <div class="contact-form col-sm-12">
                    <!-- Form -->
                    <form class="contact-form" action="{{ route('site.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="name"
                                    placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم بالكامل' }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="{{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="{{ locale() == 'en' ? 'Subject' : 'عنوان الرساله' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <textarea class="form-control" name="message" placeholder="{{ locale() == 'en' ? 'Message' : 'الرسالة' }}"></textarea>
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
                <!-- /.Contact Form -->
            </div>
        </div>
    </div>
    <!-- /.Section Contact -->
@endsection
