<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset("style.css") }}">
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Top Search Form Area -->
        <div class="top-search-area">
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <!-- Close -->
                            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                            <!-- Form -->
                            <form action="index.html" method="post">
                                <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area">
            <!-- Main Header Start -->
            <div class="main-header-area">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-between" id="alimeNav">

                            <!-- Logo -->
                            <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- Menu Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul id="nav">
                                        <li class="{{ set_active(['/']) }}"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="{{ set_active(['reservasi', 'reservasi/*']) }}"><a href="{{ url('/reservasi') }}">Reservasi</a></li>
                                        <li class="{{ set_active(['galeri', 'galeri/*']) }}"><a href="{{ url('/galeri') }}">Gallery</a></li>
                                        <li class="{{ set_active(['kontak', 'kontak/*']) }}"><a href="{{ url('/kontak') }}">Contact</a></li>
                                        <li class="{{ set_active(['tentang', 'tentang/*']) }}"><a href="{{ url('/tentang') }}">About</a></li>
                                    </ul>

                                    <!-- Search Icon -->
                                    <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        @yield('content')

        <!-- Follow Area Start -->
        <section class="follow-area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Follow Instagram</h2>
                            <p>@Alime_photographer</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Feed Area -->
            <div class="instragram-feed-area owl-carousel">
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/11.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/12.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/13.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/14.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/15.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/16.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Follow Area End -->

        <!-- Footer Area Start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Popper -->
        <script src="{{ asset("js/popper.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- All Plugins -->
        <script src="{{ asset("js/alime.bundle.js") }}"></script>
        <!-- Active -->
        <script src="{{ asset("js/default-assets/active.js") }}"></script>
    </body>
</html>
