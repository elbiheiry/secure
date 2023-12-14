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
    <!-- Section Blogs -->
    <div id="section-newsdetails1">
        <div class="container">
            <div class="row">
                <!-- Contents -->
                <div class="contents col-12 col-sm-12 col-md-12 col-lg-8">
                    <!-- Posts Contents -->
                    <a href="#">
                        <h2>{{ $forum->translate(locale())->title }}</h2>
                    </a>
                    <div class="date">{{ $forum->created_at->format('M d, Y') }}
                        <span>{{ locale() == 'en' ? 'IN' : 'في ' }}</span>
                        <strong>{{ $forum->translate(locale())->department }}</strong>
                    </div>
                    {!! $forum->translate(locale())->description !!}
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
                    <div class="comments">
                        <h1>{{ $forum->comments()->count() }} {{ locale() == 'en' ? 'Comments' : 'تعليقات' }}</h1>
                        <!-- Comment Item -->
                        @foreach ($forum->comments()->whereNull('forum_comment_id')->orderBy('id', 'desc')->get() as $comment)
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $comment->name }}
                                        <span>{{ $comment->created_at->format('d M Y') }}</span>
                                    </h5>
                                    <p>{{ $comment->comment }}</p>
                                    <div class="leave-comment">
                                        <form action="{{ route('site.addComment') }}" method="post"
                                            class="comment-form reply-form d-none" id="comment_form_{{ $comment->id }}">
                                            @csrf
                                            <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                                            <input type="hidden" name="forum_comment_id" value="{{ $comment->id }}">

                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <textarea class="form-control" name="comment" placeholder="{{ locale() == 'en' ? 'Your Comment' : 'تعليقك' }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group m-bot0 col-md-12">
                                                    <button
                                                        type="submit">{{ locale() == 'en' ? 'Submit comment' : 'إترك تعليقك' }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <a href="javascript:;" class="reply"
                                        data-id="comment_form_{{ $comment->id }}">{{ locale() == 'en' ? 'Reply' : 'الرد' }}</a>
                                    <!-- Replied -->
                                    <div class="media mt-3">
                                        @foreach ($comment->subComments as $sub)
                                            <a class="pr-3" href="javascript:;">
                                                <div class="img-frame2">

                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <h5 class="mt-0">{{ $sub->name }}
                                                    <span>{{ $sub->created_at->format('d M Y') }}</span>
                                                </h5>
                                                <p>{{ $sub->comment }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- /.Replied -->
                                </div>
                            </div>
                        @endforeach
                        <!-- /Comment Item -->
                    </div>
                    <!-- /.Comments -->
                    <!-- Leave Comment -->
                    <div class="leave-comment">
                        <h1>{{ locale() == 'en' ? 'Leave a comment' : 'إترك تعليقك' }}</h1>
                        <!-- Form -->
                        <form action="{{ route('site.addComment') }}" method="post" class="comment-form">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <textarea class="form-control" name="comment" placeholder="{{ locale() == 'en' ? 'Your Comment' : 'تعليقك' }}"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group m-bot0 col-md-12">
                                    <button
                                        type="submit">{{ locale() == 'en' ? 'Submit comment' : 'إترك تعليقك' }}</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.Form -->
                    </div>
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
                        <h3>{{ locale() == 'en' ? 'Popular' : 'رائج' }}</h3>
                        <!-- List -->
                        @foreach ($relates as $relate)
                            <div class="list">
                                <a href="{{ route('site.forum', ['forum' => $relate->slug]) }}">
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
@push('js')
    <script>
        $(document).on('submit', '.comment-form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }}");

            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            $('.progress-bar').width(percentComplete + '%');
                            $('.progress-bar').html(percentComplete + '%');

                        }
                    }, false);

                    return xhr;
                },
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
                        "{{ locale() == 'en' ? 'Submit comment' : 'إترك تعليقك' }}");
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            return false;
        });

        $(document).on('click', '.reply', function() {
            var id = $(this).data('id');

            $('#reply-form').addClass('d-none');
            $('#' + id).removeClass('d-none');
        })
    </script>
@endpush
