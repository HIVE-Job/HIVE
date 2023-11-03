<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


<!--css and js files -->
<link rel="stylesheet" href="{{ asset('assets/css/custom-bs.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/fonts/line-icons/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">





    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

<header class="site-navbar mt-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="site-logo col-6"><a href="{{ url('/') }}">HIVE</a></div>
<nav class="mx-auto site-navigation">
<ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
<li style="padding-left: 544px;"><a href="index.html" class="nav-link active">Home</a></li>
<li><a href="theme/jobboard/about.html">About</a></li>
<li class="has-children">
<a href="theme/jobboard/job-listings.html">Job Listings</a>
<ul class="dropdown">
<li><a href="theme/jobboard/job-single.html">Job Single</a></li>
<li><a href="theme/jobboard/post-job.html">Post a Job</a></li>
</ul>
</li>
<li class="has-children">
<a href="theme/jobboard/services.html">Pages</a>
<ul class="dropdown">
<li><a href="theme/jobboard/services.html">Services</a></li>
<li><a href="theme/jobboard/service-single.html">Service Single</a></li>
<li><a href="theme/jobboard/blog-single.html">Blog Single</a></li>
<li><a href="theme/jobboard/portfolio.html">Portfolio</a></li>
<li><a href="theme/jobboard/portfolio-single.html">Portfolio Single</a></li>
<li><a href="theme/jobboard/testimonials.html">Testimonials</a></li>
<li><a href="theme/jobboard/faq.html">Frequently Ask Questions</a></li>
<li><a href="theme/jobboard/gallery.html">Gallery</a></li>
</ul>
</li>
<li><a href="theme/jobboard/blog.html">Blog</a></li>
<li><a href="theme/jobboard/contact.html">Contact</a></li>


@guest
@if (Route::has('login'))
<li class=""><a href="{{ route('login') }}">Log In</a></li>
@endif
@if (Route::has('register'))
<li class=""><a href="{{ route('register') }}">Register In</a></li>
@endif
@else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
</ul>
</nav>
<div class="right-cta-menu text-right d-flex aligin-items-center col-6">
<div class="ml-auto">
<a href="theme/jobboard/post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
 
</div>
<a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
</div>
</div>
</div>
</header>



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="site-footer">
<a href="#top" class="smoothscroll scroll-top">
<span class="icon-keyboard_arrow_up"></span>
</a>
<div class="container">
<div class="row mb-5">
<div class="col-6 col-md-3 mb-4 mb-md-0">
<h3>Search Trending</h3>
<ul class="list-unstyled">
<li><a href="#">Web Design</a></li>
<li><a href="#">Graphic Design</a></li>
<li><a href="#">Web Developers</a></li>
<li><a href="#">Python</a></li>
<li><a href="#">HTML5</a></li>
<li><a href="#">CSS3</a></li>
</ul>
</div>
<div class="col-6 col-md-3 mb-4 mb-md-0">
<h3>Company</h3>
<ul class="list-unstyled">
<li><a href="#">About Us</a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Resources</a></li>
</ul>
</div>
<div class="col-6 col-md-3 mb-4 mb-md-0">
<h3>Support</h3>
<ul class="list-unstyled">
<li><a href="#">Support</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
<div class="col-6 col-md-3 mb-4 mb-md-0">
<h3>Contact Us</h3>
<div class="footer-social">
<a href="#"><span class="icon-facebook"></span></a>
<a href="#"><span class="icon-twitter"></span></a>
<a href="#"><span class="icon-instagram"></span></a>
<a href="#"><span class="icon-linkedin"></span></a>
</div>
</div>
</div>
<div class="row text-center">
<div class="col-12">
<p class="copyright"><small>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</small></p>
</div>
</div>
</div>
</footer>
    <!--Scripts-->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/js/stickyfill.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>
