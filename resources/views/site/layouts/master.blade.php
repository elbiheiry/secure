<!DOCTYPE html>
<html lang="{{ locale() }}">

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
    @yield('content')
    <!-- /.Section Contact -->
    <!-- Section Footer -->
    @include('site.layouts.footer')
    <!-- /.Section Footer -->
    @include('site.layouts.scripts')
</body>

</html>
