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
    <div id="section-news1">
        <div class="container">
            <div class="card-columns">
                @foreach ($articles as $article)
                    <!-- Item -->
                    <div class="item">
                        <a href="{{ route('site.article', ['article' => $article->slug]) }}"><img class="img-fluid"
                                src="{{ $article->image_path }}" alt=""></a>
                        <a href="{{ route('site.article', ['article' => $article->slug]) }}">
                            <h2>{{ $article->translate(locale())->title }}</h2>
                        </a>
                        <p>{{ $article->created_at->format('M d, Y') }}</p>
                    </div>
                    <!-- /.Item -->
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    {!! $articles->links() !!}
                </div>
            </div>
            <!-- /.Pagination -->
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
