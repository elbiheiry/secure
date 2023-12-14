@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Login' : 'تسجيل الدخول' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'Login' : 'تسجيل الدخول' }}</a></li>
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
                    <h1>{{ locale() == 'en' ? 'Login' : 'تسجيل الدخول' }}</h1>
                </div>
                <!-- /.Contact Details -->
                <!-- Contact Form -->
                <div class="contact-form col-sm-12">
                    <!-- Form -->
                    <form action="{{ route('site.login') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }}">
                                @error('email')
                                    <div id="error-name" class="login__input-error text-danger mt-2">
                                        {{ $errors->first('email') }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="password" class="form-control" name="password"
                                    placeholder="{{ locale() == 'en' ? 'Password' : 'الرقم السري' }}">
                                @error('password')
                                    <div id="error-password" class="login__input-error text-danger mt-2">
                                        {{ $errors->first('password') }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit">{{ locale() == 'en' ? 'Login' : 'تسجيل الدخول' }}</button>
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
