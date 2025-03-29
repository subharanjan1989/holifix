<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Top Medical Tourism Services | Affordable Healthcare Abroad">
        <meta name="description" content="Explore world-class medical tourism services with affordable treatments, expert doctors, and premium healthcare facilities abroad. Plan your medical journey today!">
        <meta name="keywords" content="medical tourism, healthcare abroad, affordable medical treatments, best hospitals overseas, medical travel, surgery overseas, international healthcare">
        <meta name="author" content="">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">
        <meta name="revisit-after" content="7 days">
        
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/flaticon_hinton.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/dark-theme.css') }}">
        <title>Medical Tourism | Affordable Healthcare Abroad</title>
        <link rel="icon" type="image/png" href="{{ asset('front/img/favicon.png') }}">
        @yield('css')       
    </head>
    <body>

        <!--  Preloader Start -->
        <div class="preloader-area d-flex flex-column align-items-center justify-content-center h-100" id="preloader">
            <span class="d-block stethoscope-icon"><i class="ri-stethoscope-line"></i></span>
            <span class="text-primary mt-2 fw-medium">Loading...</span>
        </div>
        <!--  Preloader End -->

        <!-- Theme Switcher Start -->
        <!-- <div class="switch-theme-mode">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div> -->
        <!-- Theme Switcher End -->
         
        <!-- Custom Cursor -->
        <div class=""></div>
        <div class=""></div>
        
        @include('partials.front.nav')
        @yield('main')      
        @include('partials.front.footer')       

        <!-- Back to Top -->
        <div id="progress-wrap" class="progress-wrap style-one">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>

        <!-- Link of JS files -->
        <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front/js/megamenu.js') }}"></script>
        <script src="{{ asset('front/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('front/js/fslightbox.js') }}"></script>
        <script src="{{ asset('front/js/gsap.min.js') }}"></script>
        <script src="{{ asset('front/js/scrollTrigger.min.js') }}"></script>
        <script src="{{ asset('front/js/SplitText.min.js') }}"></script>
        <script src="{{ asset('front/js/customEase.js') }}"></script>
        <script src="{{ asset('front/js/aos.js') }}"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
        @yield('js')
    </body>
</html>