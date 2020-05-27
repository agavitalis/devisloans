<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/fontawesome.min.css')}}">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.min.css')}}">
    <!-- NiceSelect CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}">
    <!-- Slick Min CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/slick.min.css')}}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/odometer.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
    <title>Devis - Online Loans</title>
    <link rel="icon" type="image/png" href="{{asset('public/frontend/img/favicon.png')}}">
</head>

<body>
    <!-- <div class=preloader>
        <div class=loader>
            <div class=shadow></div>
            <div class=box></div>
        </div>
    </div> -->
    <div class="navbar-area">
        <div class="luvion-responsive-nav">
            <div class="container">
                <div class="luvion-responsive-menu">
                    <div class="logo"> <a href="/"> <img src="{{asset('public/frontend/img/logo.png')}}" alt="logo"> <img
                                src="{{asset('public/frontend/img/black-logo.png')}}" alt="logo"> </a> </div>
                </div>
            </div>
        </div>
        <div class="luvion-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light"> <a class="navbar-brand" href="/"> <img
                            src="public/frontend/img/logo.png" alt=logo> <img src="public/frontend/img/black-logo.png" alt=logo> </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a>

                            </li>
                            <li class="nav-item"><a href="/how_it_works" class="nav-link">How it Works</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link">About Us </a>

                            </li>

                            <li class="nav-item"><a href="/plans" class="nav-link">Get a Loan</a></li>


                        </ul>


                        @auth
                        @if(Auth::user()->user_role == "user")

                        <div class="others-options"> <a href="/user_dashboard" class="login-btn"><i
                                    class="flaticon-user"></i> Dashboard</a> </div>
                        @else

                        <div class="others-options"> <a href="/admin_dashboard" class="login-btn"><i
                                    class="flaticon-user"></i> Dashboard</a> </div>

                        @endif
                        @else
                        <div class="others-options"> <a href="/login" class="login-btn"><i class="flaticon-user"></i>
                                Log
                                In</a> </div>
                        @endauth


                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield("contents")

    <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for a loan in minutes</h2>
                <p>Get your Devis account today!</p><a href="#" class="btn btn-primary">Get Your Devis Account</a>
            </div>
        </div>
    </section>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <div class="logo"><a href="#"><img src="public/frontend/img/black-logo.png" alt="logo"></a>
                            <p>Getting loans made easier. A community of people helping ourselves succeed in our hustle.
                            </p>
                        </div>
                        <ul class=social-links>
                            <li><a href="#" target=_blank><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target=_blank><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target=_blank><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target=_blank><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Company</h3>
                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Our Pricing</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Support</h3>
                        <ul class="list">
                            <li><a href="/faq">FAQ's</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>
                        <ul class="footer-contact-info">
                            <li><span>Location:</span> 27 Division St, New York, NY 10002, USA</li>
                            <li><span>Email:</span> <a href="#">devisloans@gmail.com</a></li>
                            <li><span>Phone:</span> <a href="#">+ (321) 984 754</a></li>
                            <li><span>Fax:</span> <a href="#">+1-212-9876543</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>Copyright @2020 <a href="#">Devis</a>. All rights reserved</p>
            </div>
        </div>
        <div class="map-image"><img src="public/frontend/img/map.png" alt=map></div>
    </footer>


    <!-- jQuery Min JS -->
    <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
    <!-- Popper Min JS -->
    <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Mean Menu JS -->
    <script src="{{asset('public/frontend/js/jquery.meanmenu.js')}}"></script>
    <!-- NiceSelect Min JS -->
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <!-- Slick Min JS -->
    <script src="{{asset('public/frontend/js/slick.min.js')}}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Appear Min JS -->
    <script src="{{asset('public/frontend/js/jquery.appear.min.js')}}"></script>
    <!-- Odometer Min JS -->
    <script src="{{asset('public/frontend/js/odometer.min.js')}}"></script>
    <!-- Parallax Min JS -->
    <script src="{{asset('public/frontend/js/parallax.min.js')}}"></script>
    <!-- WOW Min JS -->
    <script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{asset('public/frontend/js/form-validator.min.js')}}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{asset('public/frontend/js/contact-form-script.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>

</html>