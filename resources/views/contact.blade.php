<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Espaces Services </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Espaces Services </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/gijgo.css">
	<link rel="stylesheet" href="/assets/css/animate.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="/assets/css/themify-icons.css">
	<link rel="stylesheet" href="/assets/css/slick.css">
	<link rel="stylesheet" href="/assets/css/nice-select.css">
	<link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/login/css/style.css">
<link rel="stylesheet" href="/login/fonts/material-icon/css/material-design-iconic-font.min.css">
</head>
<body>

    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <!-- Left Social -->
                    <div class="header-left-social">
                        <ul class="header-social">    
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                
                            <ul>     
                                <img class="ensamlogo"src="/assets/img/ensam.jpg" alt="" >
                                    
                                </ul>
                            </div>
                                <div class="header-info-right">
                                    <ul>    
                                    @if(Auth::check())
                                        <li><a href="#"><i class="ti-user"></i>Welcome   {{ Auth::user()->nom }} </a></li>
                                        <li><a href="{{ route('signout') }}"><i class="ti-lock"></i>Logout</a></li>
                                        @else
                                        <li><a href="{{url('/salut')}}"><i class="ti-user"></i>Login</a></li>
                                        <li><a href="{{url('/salut2')}}"><i class="ti-lock"></i>Register</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                    <a href="index.html"><img style="width:160px;height:32px;"src="/assets/img/es.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.html"><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="instructor.html">Instructors</a></li>
                                        <li><a href="{{url('/Web_masters')}}">Web Masters</a>
                                            
                                        </li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Search Courses">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
      

   
<div class="mainn"style="text-align: center;">

    <!-- Sign up form -->
    <section class="signup">
        <div class="containerr"style="align-items:center;" >
            <div class="signup-content" style="display:flex;justify-content:center;align-items:center; ">
                <div class="signup-form"style="text-align: center; ">
                    <h2 class="form-title" style="text-align: center;">Envoyez-nous un message</h2>
                    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom & Prénom">
            </div>
            <div class="form-group">
                <label for="Email"></label>
                <input type="email" class="form-control" name="email" id="email"placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="Phone"></label>
                <input type="text" class="form-control" name="phone" id="phone"placeholder="Téléphone">
            </div>
            <div class="form-group">
                <label for="Subject"></label>
                <input type="text" class="form-control" name="subject" id="subject"placeholder="Sujet">
            </div>
            <div class="form-group">
                <label for="Message"></label>
                <textarea class="form-control" name="message" id="message" rows="4"placeholder="Message"></textarea>
            </div>
            <input type="submit" name="send" value="Envoyer" class="btn btn-dark btn-block">
        </form>
    </div>
                </div>
                
            </div>
        </div>
    </section>
  
    
  
  </div>
    
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="footer-tittle2">
                                    <h4>Stay Updated</h4>
                                </div>
                                <!-- Form -->
                                <div class="footer-form mb-50">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Subscribe Now
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Let’s Get Social</h4>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="#">Online Learning</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Press Center</a></li>
                                        <li><a href="#">Become an Instructor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Campus</h4>
                                    <ul>
                                        <li><a href="#">Our Plans</a></li>
                                        <li><a href="#">Free Trial</a></li>
                                        <li><a href="#">Academic Solutions</a></li>
                                        <li><a href="#">Business Solutions</a></li>
                                        <li><a href="#"> Government Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Study</h4>
                                    <ul>
                                        <li><a href="#">Admissions Policy</a></li>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">Online Application</a></li>
                                        <li><a href="#">Visa Information</a></li>
                                        <li><a href="#">Tuition Calculator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Spport</h4>
                                    <ul>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                        <li><a href="#">System Requirements</a></li>
                                        <li><a href="#">Register Activation Key</a></li>
                                        <li><a href="#">Site feedback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
</html>