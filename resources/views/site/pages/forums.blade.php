@extends('site.layouts.master')
@section('content')
    <!-- Section Breadcrumb 1 -->
    <div id="section-breadcrumb1" class="bg8">
        <div class="container">
            <div class="row">
                <div class="content col-12">
                    <h1>{{ locale() == 'en' ? 'Forum' : 'المنتدي' }}</h1>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }}</a></li>
                        <li class="current"><a href="#">{{ locale() == 'en' ? 'Forum' : 'المنتدي' }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Breadcrumb 1 -->
    <!-- Section About -->

    <!-- Contact Form -->
    <div id="section-contact">
        <div class="container">
            <div class="contact-form col-sm-12">
                <!-- Form -->
                <form class="contact-form" action="{{ route('site.createForum') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-12 col-lg-6">
                            <input type="text" class="form-control" name="title"
                                placeholder="{{ locale() == 'en' ? 'Title' : 'العنوان' }}">
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-6">
                            <input type="text" class="form-control" name="category"
                                placeholder="{{ locale() == 'en' ? 'Category' : 'القسم' }}">
                        </div>

                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                            <textarea class="form-control" name="description" placeholder="{{ locale() == 'en' ? 'Description' : 'الوصف' }}">
                                </textarea>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button type="submit">{{ locale() == 'en' ? 'Save' : 'إضافة' }}</button>
                        </div>
                    </div>
                </form>
                <!-- /.Form -->
            </div>
        </div>
    </div>
    <!-- Section Blogs -->
    <div id="section-news1">
        <div class="container">
            <!-- /.Contact Form -->
            <div class="card-columns">
                @foreach ($forums as $forum)
                    <!-- Item -->
                    <div class="item">
                        <a href="{{ route('site.forum', ['forum' => $forum->slug]) }}">
                            <h2>{{ $forum->translate(locale())->title }}</h2>
                        </a>
                        <p>{{ $forum->created_at->format('M d, Y') }}</p>
                    </div>
                    <!-- /.Item -->
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    {!! $forums->links() !!}
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
@push('js')
    <script>
        $(document).on('submit', '.contact-form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }}");

            $.ajax({
                xhr: functio
                url: url,
                method: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    notification("success", response.message, "fas fa-check");
                    setTimeout(function() {
                        window.location.href = response.url;
                    }, 2000);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                    form.find(":submit").attr('disabled', false).html(
                        "{{ locale() == 'en' ? 'Save' : 'حفظ' }}");
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            return false;
        });
    </script>
@endpush
