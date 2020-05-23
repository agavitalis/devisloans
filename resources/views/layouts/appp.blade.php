<!doctype html>
<html lang=zxx>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel=stylesheet href="frontend/css/bootstrap.min.css">
    <link rel=stylesheet href="frontend/css/animate.min.css">
    <link rel=stylesheet href="frontend/css/fontawesome.min.css">
    <link rel=stylesheet href="frontend/css/flaticon.css">
    <link rel=stylesheet href="frontend/css/magnific-popup.min.css">
    <link rel=stylesheet href="frontend/css/nice-select.css">
    <link rel=stylesheet href="frontend/css/slick.min.css">
    <link rel=stylesheet href="frontend/css/meanmenu.css">
    <link rel=stylesheet href="frontend/css/odometer.min.css">
    <link rel=stylesheet href="frontend/css/style.css">
    <link rel=stylesheet href="frontend/css/responsive.css">
    <title>Devis - Online Loans</title>
    <link rel=icon type="image/png" href="frontend/img/favicon.png">
</head>

<body>
    <!-- <div class=preloader>
        <div class=loader>
            <div class=shadow></div>
            <div class=box></div>
        </div>
    </div> -->
    <div class=navbar-area>
        <div class=luvion-responsive-nav>
            <div class=container>
                <div class=luvion-responsive-menu>
                    <div class=logo> <a href=index-2.html> <img src="frontend/img/logo.png" alt=logo> <img
                                src="frontend/img/black-logo.png" alt=logo> </a> </div>
                </div>
            </div>
        </div>
        <div class=luvion-nav>
            <div class=container>
                <nav class="navbar navbar-expand-md navbar-light"> <a class=navbar-brand href=index-2.html> <img
                            src="frontend/img/logo.png" alt=logo> <img src="frontend/img/black-logo.png" alt=logo> </a>
                    <div class="collapse navbar-collapse mean-menu" id=navbarSupportedContent>
                        <ul class=navbar-nav>
                            <li class=nav-item><a href="/" class=nav-link>Home</a>

                            </li>
                            <li class=nav-item><a href="/how_it_works" class=nav-link>How it Works</a></li>
                            <li class=nav-item><a href="/about" class=nav-link>About Us </a>

                            </li>

                            <li class=nav-item><a href="/plans" class=nav-link>Get a Loan</a></li>


                        </ul>
                      
                       
                            @auth
                            @if(Auth::user()->user_type == "user")
                           
                            <div class=others-options> <a href="/user_dashboard" class=login-btn><i class=flaticon-user></i> Dashboard</a> </div>
                            @else
                            
                            <div class=others-options> <a href="/admin_dashboard" class=login-btn><i class=flaticon-user></i> Dashboard</a> </div>
  
                            @endif
                            @else
                            <div class=others-options> <a href="/login" class=login-btn><i class=flaticon-user></i> Log
                                In</a> </div>
                            @endauth
                       
                       
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield("contents")
    
<section class=account-create-area>
    <div class=container>
        <div class=account-create-content>
            <h2>Apply for a loan in minutes</h2>
            <p>Get your Devis account today!</p><a href="#" class="btn btn-primary">Get Your Devis Account</a>
        </div>
    </div>
</section>

    <footer class=footer-area>
        <div class=container>
            <div class=row>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class=single-footer-widget>
                        <div class=logo><a href="#"><img src="frontend/img/black-logo.png" alt=logo></a>
                            <p>Getting loans made easier. A community of people helping ourselves succeed in our hustle.</p>
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
                        <ul class=list>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Our Pricing</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class=single-footer-widget>
                        <h3>Support</h3>
                        <ul class=list>
                            <li><a href="/faq">FAQ's</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class=single-footer-widget>
                        <h3>Address</h3>
                        <ul class=footer-contact-info>
                            <li><span>Location:</span> 27 Division St, New York, NY 10002, USA</li>
                            <li><span>Email:</span> <a href="#">devisloans@gmail.com</a></li>
                            <li><span>Phone:</span> <a href="#">+ (321) 984 754</a></li>
                            <li><span>Fax:</span> <a href="#">+1-212-9876543</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=copyright-area>
                <p>Copyright @2020 <a href="#">Devis</a>. All rights reserved</p>
            </div>
        </div>
        <div class=map-image><img src="frontend/img/map.png" alt=map></div>
    </footer>
    <div class=go-top><i class="fas fa-arrow-up"></i></div>
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/popper.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/jquery.meanmenu.js"></script>
    <script src="frontend/js/jquery.nice-select.min.js"></script>
    <script src="frontend/js/slick.min.js"></script>
    <script src="frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/js/jquery.appear.min.js"></script>
    <script src="frontend/js/odometer.min.js"></script>
    <script src="frontend/js/parallax.min.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/form-validator.min.js"></script>
    <script src="frontend/js/contact-form-script.js"></script>
    <script src="frontend/js/main.js"></script>
</body>

</html>