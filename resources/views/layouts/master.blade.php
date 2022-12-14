<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
      <!-- PAGE TITLE -->
      <title>@yield('title')</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="description" content="">
      <meta name="keywords" content="">

      <!-- FAVICON -->
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

      <!-- CSS:: FONTS -->
      <link href="../../../css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <!-- CSS:: Bootstrap 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <!-- CSS:: DATEPICKER -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/datepicker/datepicker.css') }}">

      <!-- CSS:: ANIMATE -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/animate/animate.css') }}">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="{{ asset('assets/color-files/color-08.css') }}">
      <script src="https://kit.fontawesome.com/97e37c6653.js" crossorigin="anonymous"></script>
      @yield('OtherStyle')
  </head>
  <body>
    <!--
      <section id="r-customizer" class="r-customizer">
            <div class="r-selector">
                  <span class="d-block text-center">Color Options</span>
                  <div class="r-color_section r-color_block">
                        <ul class="r-color_selector" id="r-color_selector">
                            <li class="r-color_1" data-attr="color-01"></li>
                            <li class="r-color_6" data-attr="color-06"></li>
                            <li class="r-color_2" data-attr="color-02"></li>
                            <li class="r-color_3" data-attr="color-03"></li>
                            <li class="r-color_4" data-attr="color-04"></li>
                            <li class="r-color_5" data-attr="color-05"></li>
                            <li class="r-color_7" data-attr="color-07"></li>
                            <li class="r-color_8" data-attr="color-08"></li>
                        </ul>
                  </div>
            </div>
            <i id="r-selector_icon" class="fa fa-cog"></i>
      </section>
    -->
      <div class="r-wrapper">
		@include('layouts.header')
        @yield('content')
        @include('layouts.footer')
      </div>
      <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>

      <!-- JQUERY:: JQUERY.JS -->
      <script src="assets/js/jquery.min.js"></script>

      <!-- JQUERY:: APPEAR.JS -->
      <script src="assets/js/plugins/appear/appear.js"></script>

      <!-- JQUERY:: COUNTER.JS -->
      <script src="assets/js/plugins/counter/jquery.easing.min.js"></script>
      <script src="assets/js/plugins/counter/counter.min.js"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src="assets/js/tether.min.js"></script>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

      <!-- JQUERY:: PLUGINS -->
      <script src="assets/js/plugins/owl/owl.carousel.min.js"></script>
      <script src="assets/js/plugins/lightcase/lightcase.js"></script>

      <!-- JQUERY:: DATEPICKER.JS -->
      <script src="assets/js/plugins/datepicker/moment-with-locales.min.js"></script>
      <script src="assets/js/plugins/datepicker/moment-timezone.js"></script>
      <script src="assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>

      <!-- JQUERY:: MAP -->
      <script src="assets/js/map.js"></script>
      <script src="../../../maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap">></script>

      <!-- JQUERY:: CUSTOM.JS -->
      <script src="assets/js/custom.js"></script>
      @yield('OtherScript')
  </body>
</html>
