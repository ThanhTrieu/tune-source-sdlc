<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Muzik- {{ $title ?? null }}</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/css/typography.css') }}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
   @stack('stylesheets')
</head>
<body>
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      @include('partials.frontend.sidebar')
      <!-- TOP Nav Bar -->
      @include('partials.frontend.top-navbar')
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->
   @include('partials.frontend.footer')
   <!-- Footer END -->
   <!-- color-customizer -->
   @include('partials.frontend.color-box')
   <!-- color-customizer END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
   <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
   <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ asset('frontend/js/countdown.min.js') }}"></script>
   <!-- Counterup JavaScript -->
   <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
   <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
   <!-- Apexcharts JavaScript -->
   <script src="{{ asset('frontend/js/apexcharts.js') }}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
   <!-- Select2 JavaScript -->
   <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ asset('frontend/js/smooth-scrollbar.js') }}"></script>
   <!-- lottie JavaScript -->
   <script src="{{ asset('frontend/js/lottie.js') }}"></script>
   <!-- am core JavaScript -->
   <script src="{{ asset('frontend/js/core.js') }}"></script>
   <!-- am charts JavaScript -->
   <script src="{{ asset('frontend/js/charts.js') }}"></script>
   <!-- am animated JavaScript -->
   <script src="{{ asset('frontend/js/animated.js') }}"></script>
   <!-- am kelly JavaScript -->
   <script src="{{ asset('frontend/js/kelly.js') }}"></script>
   <!-- am maps JavaScript -->
   <script src="{{ asset('frontend/js/maps.js') }}"></script>
   <!-- am worldLow JavaScript -->
   <script src="{{ asset('frontend/js/worldLow.js') }}"></script>
   <!-- Raphael-min JavaScript -->
   <script src="{{ asset('frontend/js/raphael-min.js') }}"></script>
   <!-- Morris JavaScript -->
   <script src="{{ asset('frontend/js/morris.js') }}"></script>
   <!-- Morris min JavaScript -->
   <script src="{{ asset('frontend/js/morris.min.js') }}"></script>
   <!-- Flatpicker Js -->
   <script src="{{ asset('frontend/js/flatpickr.js') }}"></script>
   <!-- Style Customizer -->
   <script src="{{ asset('frontend/js/style-customizer.js') }}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ asset('frontend/js/chart-custom.js') }}"></script>
<!-- Music js -->
   <script src="{{ asset('frontend/js/music-player.js') }}"></script>
   <!-- Music-player js -->
   <script src="{{ asset('frontend/js/music-player-dashboard.js') }}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ asset('frontend/js/custom.js') }}"></script>
   @stack('javascripts')
</body>
</html>