@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Blog' : 'المدونة' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'Blog' : 'المدونة' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section About -->
    <!-- Section Blogs -->
    <div id="section-newsdetails1">
        <div class="container">
            <div class="row">
                <!-- Contents -->
                <div class="contents col-12 col-sm-12 col-md-12 col-lg-8">
                    <!-- Posts Contents -->
                    <a href="#"><img class="img-fluid main-image" src="{{ $article->image_path }}" alt=""></a>
                    <div class="date">{{ $article->created_at->format('M d, Y') }}
                        <span>{{ locale() == 'en' ? 'IN' : 'في ' }}</span><strong>
                            {{ $article->translate(locale())->department }}</strong>
                    </div>
                    {!! $article->translate(locale())->description !!}
                    <!-- Share -->
                    <div class="shared">
                        <h4>{{ locale() == 'en' ? 'Share' : 'شارك' }}:</h4>
                        <!-- AddToAny BEGIN -->
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_copy_link"></a>
                            <a class="a2a_button_linkedin"></a>
                        </div>
                    </div>
                    <!-- /.Share -->
                </div>
                <!-- /.Contents -->
                <!-- Sidebar -->
                <div class="sidebar col-12 col-sm-12 col-md-12 col-lg-4">
                    <!-- Searchbar -->
                    <div class="searchbar">
                        <h3>{{ locale() == 'en' ? 'Search' : 'البحث' }}</h3>
                        <form action="{{ route('site.blog') }}" method="get">
                            <input type="text" name="search"
                                placeholder="{{ locale() == 'en' ? 'Search' : 'البحث' }} ">
                            <i class="flaticon-search"></i>
                        </form>
                    </div>
                    <!-- /.Searchbar -->
                    <!-- Searchbar -->
                    <div class="popular-news">
                        <h3>{{ locale() == 'en' ? 'Related Posts' : 'المقالات المتعلقة' }}</h3>
                        <!-- List -->
                        @foreach ($relates as $relate)
                            <div class="list">
                                <a href="{{ route('site.article', ['article' => $relate->slug]) }}">
                                    <img class="img-fluid" src="{{ $relate->image_path }}" alt="">
                                    <h3>{{ $relate->translate(locale())->title }}</h3>
                                </a>
                            </div>
                        @endforeach
                        <!-- /.List -->
                    </div>
                    <!-- /.Searchbar -->
                </div>
                <!-- /.Sidebar -->
            </div>
        </div>
    </div>
    <!-- /.Section Blogs -->
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
