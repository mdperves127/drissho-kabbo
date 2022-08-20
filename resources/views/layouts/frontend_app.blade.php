
<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/boxicons.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/magnific-popup.min.css">
    <!-- Timeline CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/timeline.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/fonts/flaticon.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset("frontend_asset") }}/css/responsive.css">


    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset("frontend_asset") }}/img/favicon.png">
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset("frontend_asset") }}/img/logo.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ asset("frontend_asset") }}/img/logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('index') }}" class="nav-link dropdown-toggle @yield('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('application') }}" class="nav-link @yield('application')">Application Form</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link @yield('contact')">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    @yield('frontend_content')

    <!-- Footer -->
    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="footer-logo-img" href="{{ route('index') }}">
                                <img src="{{ asset("frontend_asset") }}/img/logo.png" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aviverra</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-link">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('application') }}">Application Form</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-touch">
                            <h3>Get In Touch</h3>
                            <ul>
                                <li>
                                    <i class='bx bxs-phone-call'></i>
                                    <h4>Phone:</h4>
                                    <a href="tel:882569756">882-569-756</a>
                                </li>
                                <li>
                                    <i class='bx bx-message-square-detail'></i>
                                    <h4>Email:</h4>
                                    <a
                                        href="https://templates.envytheme.com/cdn-cgi/l/email-protection#f891969e97b89597978e91d69b9795"><span
                                            class="__cf_email__"
                                            data-cfemail="4e272028210e2321213827602d2123">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class='bx bxs-location-plus'></i>
                                    <h4>Address:</h4>
                                    <span>3254-425 NW-2nd Ave, Miami USA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright ©2022 Drisshokabbo. Designed & deplopoed By <a href="https://futureinltd.com/"
                        target="_blank">Future Innovation LTD</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->


    <!-- Essential JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset("frontend_asset") }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset("frontend_asset") }}/js/popper.min.js"></script>
    <script src="{{ asset("frontend_asset") }}/js/bootstrap.min.js"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset("frontend_asset") }}/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="{{ asset("frontend_asset") }}/js/contact-form-script.js"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset("frontend_asset") }}/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset("frontend_asset") }}/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset("frontend_asset") }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Timeline JS -->
    <script src="{{ asset("frontend_asset") }}/js/timeline.js"></script>
    <!-- Thumb Slider JS -->
    <script src="{{ asset("frontend_asset") }}/js/thumb-slide.js"></script>
    @yield('footer_script')
    <!-- Custom JS -->
    <script src="{{ asset("frontend_asset") }}/js/custom.js"></script>
</body>


</html>