<!DOCTYPE html>
<html lang="{{ locale() }}" @if(locale() == 'ar')dir="rtl"@endif>

@include('site.layouts.head')

<body>
    <!-- Section Preloader -->
    <!-- <div id="section-preloader">
  <div class="blobs">
   <div class="blob-center"></div>
   <div class="blob"></div>
   <div class="blob"></div>
   <div class="blob"></div>
   <div class="blob"></div>
   <div class="blob"></div>
   <div class="blob"></div>
  </div>
 </div> -->
    <!-- /.Section Preloader -->
    <!-- Section Navbar -->
    @include('site.layouts.header')
    <!-- /.Section Navbar -->
    @if (request()->routeIs('site.index'))
        @yield('content')
        <!-- /.Section Contact -->
        <!-- Section Footer -->
        @include('site.layouts.footer')
    @else
        <div class="main-wrapper">
            <div id="main-content" class="active">
                @yield('content')
                <!-- /.Section Contact -->
                <!-- Section Footer -->
                @include('site.layouts.footer')
            </div>
        </div>
    @endif

    <!-- /.Section Footer -->
    @include('site.layouts.scripts')
</body>

</html>
