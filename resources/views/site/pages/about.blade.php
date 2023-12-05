@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'About us' : 'من نحن' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'About us' : 'من نحن' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section About -->
    <div id="section-allstarted">
        <div class="container">
            <div class="row">
                <div class="left col-sm-12 col-md-6 mb-5 mb-md-0">
                    <h6>{{ locale() == 'en' ? 'About us' : 'من نحن' }}</h6>
                    <h1>
                        <strong>{{ $first_section->translate(locale())->title }}</strong>
                    </h1>
                    {!! $first_section->translate(locale())->description !!}
                    <a href="#" class="btn-1">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا`' }}</a>
                </div>
                <div class="right col-sm-12 col-md-6 mb-5 mb-md-0">
                    <img class="img-fluid" src="{{ $first_section->image_path }}" alt="">
                </div>
                <!-- Space -->
                <div class="space140 d-none d-md-block"></div>
                <div class="row">
                    @foreach ($abouts as $index => $about)
                        <div class="col-sm-6 col-lg-4">
                            <div class="item {{ $index % 3 == 1 ? 'item-toped' : '' }}">
                                <i class="{{ $about->icon }}"></i>
                                <h3>{{ $about->translate(locale())->title }}</h3>
                                {!! $about->translate(locale())->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="section-aboutus2" class="v3">
        <div class="container">
            <div class="row">
                <div class="title-hr2 col-1 col-sm-1"></div>
                <div class="title4 col-11 col-sm-11">
                    <h2>{{ locale() == 'en' ? 'WHY WORK WITH US' : 'لماذا تعمل معنا ' }} </h2>
                    {!! $work->translate(locale())->description1 !!}
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                {!! $work->translate(locale())->description2 !!}
            </div>
        </div>
    </div>
@endsection
