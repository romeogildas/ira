<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        <!--====== Required meta tags ======-->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->

        @yield('title')

        <link rel="shortcut icon" href="{!!asset('/images/favicon.png')!!}" type="image/x-icon">

        <link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}" media="screen">
        <link rel="stylesheet" href="{!!asset('/css/slicknav.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/swiper-bundle.min.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/all.min.css')!!}" media="screen">
        <link rel="stylesheet" href="{!!asset('/css/animate.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/magnific-popup.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/mousecursor.css')!!}">
        <link rel="stylesheet" href="{!!asset('/css/custom.css')!!}" media="screen">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet">


        @yield('styles')

    </head>
    <body>

        <!-- <div id="main-wrapper"> -->

            <!--====== Start Header ======-->
            @include('layouts.site.header')
            <!--====== End Header ======-->


            @yield('content')

            <!--====== Start Footer ======-->
            @include('layouts.site.footer')

            <!--====== End Footer ======-->


            <!--====== back-to-top ======-->
            <a href="#" class="back-to-top"><i class="fas fa-angle-up"></i></a>

       <!--  <div> -->

        <script src="{!!asset('/js/jquery-3.7.1.min.js')!!}"></script>
        <script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
        <script src="{!!asset('/js/validator.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.slicknav.js')!!}"></script>
        <script src="{!!asset('/js/swiper-bundle.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.waypoints.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.counterup.min.js')!!}"></script>
        <script src="{!!asset('/js/isotope.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.magnific-popup.min.js')!!}"></script>
        <script src="{!!asset('/js/SmoothScroll.js')!!}"></script>
        <script src="{!!asset('/js/parallaxie.js')!!}"></script>
        <script src="{!!asset('/js/gsap.min.js')!!}"></script>
        <script src="{!!asset('/js/magiccursor.js')!!}"></script>
        <script src="{!!asset('/js/SplitText.js')!!}"></script>
        <script src="{!!asset('/js/ScrollTrigger.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.mb.YTPlayer.min.js')!!}"></script>
        <script src="{!!asset('/js/wow.min.js')!!}"></script>
        <script src="{!!asset('/js/function.js')!!}"></script>



        @yield('scripts')
    </body>
</html>
