<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/tlogo.png">
    <title>Fadhil-Roshan | Portfolio</title>
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Center large portfolio images consistently */
.portfolio-large-img-and-top-title .large-img {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Control image size and centering */
.portfolio-large-img-and-top-title .large-img img {
    max-width: 100%;
    width: auto;
    height: auto;
    display: block;
    margin: 0 auto;
}
/* Full-width portfolio images */
.portfolio-fullwidth {
    width: 100%;
    padding: 0;
    margin: 0;
}

.portfolio-large-img-and-top-title .large-img {
    width: 100%;
    margin: 0;
}

.portfolio-large-img-and-top-title .large-img img {
    width: 85%;          /* 🔹 adjust: 70% / 80% / 85% */
    max-width: 1200px;   /* 🔹 prevents over-stretching on big screens */
    height: auto;
}
/* Disable image grow / zoom on hover */
.grow,
.grow img {
    transform: none !important;
    transition: none !important;
}

</style>
</head>

<body class="inner-page project-details">

    <!-- Scripts style two -->
    <!-- header area two start -->
<div class="rts-header-area-two header--sticky">
    <div class="container-150">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-top-two">
                    <div class="left">
                        <p>Welcome To Portfolio of Fadhil Roshan</p>
                    </div>
                    <div class="right">
                        <div class="male">
                            <a href="mailto:fadhilroshan22@gmail.com">fadhilroshan22@gmail.com</a>
                        </div>
                        <div class="number">
                            <a href="tel:+971554074525">+971554074525‬</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-header-two">
                    <div class="header-left-area">
                        <div class="logo-area">
                            <a href="{{ url('/') }}" class="loog">
                                <h2 style="margin: 0; font-size: 28px; font-weight: 700; color: #ffffff;">Fadhil Roshan.</h2>
                            </a>
                        </div>
                        <a href="{{ url('/contact') }}" class="rts-btn btn-radious btn-dark">Contact Me</a>
                    </div>
                    <div class="header-nav-area">
                        <nav class="nav-area drop-down-rts">
                            <ul class="navbar-nav-1">
                                <li class="menu-item main-nav-on">
                                    <a href="{{ url('/') }}"><span class="rolling-text">Home</span></a>
                                </li>
                                <li class="menu-item main-nav-on">
                                    <a href="{{ url('/about') }}"><span class="rolling-text">About</span></a>
                                </li>
                                <li class="menu-item main-nav-on">
                                    <a href="{{ url('/services') }}"><span class="rolling-text">Services</span></a>
                                </li>
                                <li class="menu-item main-nav-on">
                                    <a href="{{ url('/contact') }}"><span class="rolling-text">Contact</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <!-- social area start -->
                        <div class="social-transparent-wrapper">
                            <ul>
                                <li><a href="https://wa.me/918943068962" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/fadhil__roshan" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/fadhil-roshan-157819245/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- social area end -->
                        <div class="menu-btn">
                            <div class="rts-offcanvas-wrapper">
                                <div class="container-menu">
                                    <div class="action-menu">
                                        <div class="close-event"></div>
                                        <div class="open-event">
                                            <div class="burger">
                                                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-close" data-v-649bbaab="">
                                                    <line x1="13.788" y1="1.28816" x2="1.06011" y2="14.0161" stroke="currentColor" stroke-width="1.2"></line>
                                                    <line x1="1.06049" y1="1.43963" x2="13.7884" y2="14.1675" stroke="currentColor" stroke-width="1.2"></line>
                                                </svg>
                                                <svg viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-burger" data-v-649bbaab="">
                                                    <line x1="18" y1="0.6" y2="0.6" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                    <line x1="18" y1="5.7167" y2="5.7167" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                    <line x1="18" y1="10.8334" y2="10.8334" stroke="currentColor" stroke-width="1.2" data-v-649bbaab=""></line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-fs-menu">
                                    <div class="rts-fs-container row">
                                        <div class="rts-fs--nav col-12 col-md-6">
                                            <ul id="primary-menu" class="navbar-nav-button">
                                                <li class="menu-item">
                                                    <a href="{{ url('/') }}">Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ url('/about') }}">About</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ url('/services') }}">Services</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ url('/contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rts-fs--contacts col-12 col-md-6">
                                            <div class="contact-inner">
                                                <div class="contact-information">
                                                    <h2 class="heading-title">Contact Me</h2>
                                                        <div class="address">
                                                            <ul>
                                                                <li>
                                                                    <p>Deira,Dubai
</p>
                                                                </li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="contact-information">
                                                        <h2 class="heading-title">Get In Touch</h2>
                                                        <div class="contact">
                                                            <ul>
                                                                <li><a href="fadhilroshan22@gmail.com " class="mail">fadhilroshan22@gmail.com </a></li>
                                                                <li><a href="tel:+971554074525" class="number">+971554074525‬
</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="rts-social-area-one">
                                                            <ul>
                                                                 <li><a href="https://wa.me/918943068962" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/fadhil__roshan" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/fadhil-roshan-157819245/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header area two end -->

    <!-- Scripts style two End -->


    <!-- portfolio title area and large img area -->
    <div class="portfolio-large-img-and-top-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ptb--140 ptb_md--80 ptb_sm--60">
                    <div class="title-areas-wrapper-pd pt--120 pt_md--60 pt_sm--50">
                        <div class="left-area">
                            <h1 class="title rts_hero__title">Business Development <br>
                                Proposal</h1>
                            <div class="bottom-area">
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Company</p>
                                    <span>Remex International</span>
                                </div>
                                <!-- single category end-->
                                <!-- single category -->
                                <!-- <div class="single-categoiry">
                                    <p class="light">Year</p>
                                    <span>Start 2023</span>
                                </div> -->
                                <!-- single category end-->
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Role</p>
                                    <span>Branding</span>
                                </div>
                                <!-- single category end-->
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Location </p>
                                    <span>Calicut</span>
                                </div>
                                <!-- single category end-->
                            </div>
                        </div>
                        <div class="right rts-scroll-down-circle-wrapper-3">
                            <a href="#" class="speen-shape scroll-down-circle-3">
                                <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100" width="140" height="140">
                                    <defs>
                                        <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                        </path>
                                    </defs>
                                    <text font-size="11.75">
                                        <textPath xlink:href="#circle">View My Case Studies • Case Studies • </textPath>
                                    </text>
                                </svg>
                                <i class="fa-solid fa-star-sharp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-fullwidth pb--120">

           
            <div class="large-img grow">
                <img src="assets/images/z2.jpg" alt="product">
            </div>
            <br><br>
            
           
            
            
            
            
            
            <div class="large-img grow">
                <img src="assets/images/z9.jpg" alt="product">
            </div><br><br>
        
            <div class="large-img grow">
                <img src="assets/images/z13.jpg" alt="product">
            </div><br><br>
            <div class="large-img grow">
                <img src="assets/images/z14.jpg" alt="product">
            </div><br><br>
            
        </div>
    </div>
    <!-- portfolio title area and large img area end -->

<!-- portfolio title area and large img area -->
    <div class="portfolio-large-img-and-top-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ptb--140 ptb_md--80 ptb_sm--60">
                    <div class="title-areas-wrapper-pd pt--120 pt_md--60 pt_sm--50">
                        <div class="left-area">
                            <h1 class="title rts_hero__title">Business Development <br>
                                Proposal</h1>
                            <div class="bottom-area">
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Company</p>
                                    <span>Al Bayt Al Samawi</span>
                                </div>
                                <!-- single category end-->
                                <!-- single category -->
                                <!-- <div class="single-categoiry">
                                    <p class="light">Year</p>
                                    <span>Start 2023</span>
                                </div> -->
                                <!-- single category end-->
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Role</p>
                                    <span>Branding</span>
                                </div>
                                <!-- single category end-->
                                <!-- single category -->
                                <div class="single-categoiry">
                                    <p class="light">Location </p>
                                    <span>Calicut</span>
                                </div>
                                <!-- single category end-->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container-140 pb--120">
            <div class="large-img grow">
                <img src="assets/images/m1.jpg" alt="product">
            </div>
            <br><br>
            <div class="large-img grow">
                <img src="assets/images/m2.jpg" alt="product">
            </div>
            <br><br>
            <div class="large-img grow">
                <img src="assets/images/m3.jpg" alt="product">
            </div>
            <br><br>
            <div class="large-img grow">
                <img src="assets/images/m4.jpg" alt="product">
            </div>
            <br><br>
        </div>
    </div>
    <!-- portfolio title area and large img area end -->
    

   <!-- rts footer two area start -->
<div class="rts-footer-two-area bg-footer-2 bg_image">
    <div class="container-n">
        <div class="row">
            <div class="col-lg-12 pt--130 pt_sm--60 pb--100 pb_sm--50">
                <div class="footer-two-wrapper-content">
                   <!-- footer left start -->
<div class="footer-left-two">
    <a href="{{ url('/') }}" class="logo">
        <h2 class="text-logo">Fadhil Roshan.</h2>
    </a>
    <p class="disc">
        A Marketing Proffessional enthusiast with a strong <br>passion for the PR industry, I excel in content creations, <br>particularly in areas such as Editing and Graphic design
    </p>
    <div class="rts-social-area-one">
        <ul>
            <li><a href="https://wa.me/918943068962" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/fadhil__roshan" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/fadhil-roshan-157819245/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
    </div>
</div>
<!-- footer left end -->

                    <!-- footer right area start -->
                    <div class="footer-right-two">
                        <!-- contact info -->
                        <div class="contact-information">
                            <h5 class="title">Contact Info</h5>
                            <a href="#" class="map">Deira,Dubai

                            <a href="#" class="mail">fadhilroshan22@gmail.com </a>
                            <a href="#" class="number">+971554074525‬
</a>
                        </div>
                        <!-- contact info end -->
                        <!-- quick links -->
                        <div class="contact-information input">
                            <h5 class="title">Quick Links</h5>
                            <a href="{{ url('/') }}" class="map">Home</a>
                            <a href="{{ url('/about') }}" class="map">About</a>
                            <a href="{{ url('/services') }}" class="map">Services</a>
                            <a href="{{ url('/contact') }}" class="map">Contact</a>
                        </div>
                        <!-- quick links end -->
                    </div>
                    <!-- footer right area end -->
                </div>
            </div>
            <div class="col-lg-12">
                <!-- copyright-area-start -->
                <div class="copy-right-area-start-two">
                    <p class="left">2025 © FadhilRoshan. All rights reserved.</p>
                    
                </div>
                <!-- copyright-area-end -->
            </div>
        </div>
    </div>
</div>
<!-- rts footer two area end -->


    <!-- Scripts style two -->
    <div class="loading-screen" id="loading-screen">
        <span class="bar top-bar"></span>
        <span class="bar down-bar"></span>
        <span class="progress-line"></span>
        <span class="loading-counter"> </span>
    </div>


    <div class="bg-noise"></div>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->



    <!-- pre loader start -->
    <div class="rts-cursor cursor-outer" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor"></span>
    </div>
    <div class="rts-cursor cursor-inner" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor">
        <span class="fn-left"></span>
        <span class="fn-right"></span>
        </span>
    </div>
    <!-- pre loader end -->



    <!-- dark light switcher start-->
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li class="go-dark-w"><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li class="go-light-w"><span>Light</span><i class="rts-go-light fa-light fa-brightness"></i></li>
        </ul>
    </div>
    <!-- dark light switcher end -->



    <script defer src="assets/js/vendor/jquery.min.js"></script>
    <script defer src="assets/js/plugins/bootstrap.min.js"></script>
    <script defer src="assets/js/plugins/contact.form.js"></script>
    <script defer src="assets/js/vendor/waypoint.js"></script>
    <script defer src="assets/js/plugins/swiper.js"></script>


    <!-- for side bar sticky -->
    <script defer src="assets/js/plugins/resizer-sensor.js"></script>
    <script defer src="assets/js/plugins/sticky-sidebar.js"></script>
    <!-- for side bar sticky end-->

    <script defer src="assets/js/plugins/isotop.js"></script>
    <script defer src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>

    <script defer src="assets/js/plugins/smoothscroll-varticle.js"></script>
    <script defer src="assets/js/vendor/gsap.js"></script>
    <script defer src="assets/js/plugins/scrolltiger.js"></script>
    <script defer src="assets/js/plugins/scrolltoplugin.js"></script>
    <script defer src="assets/js/plugins/splittext.js"></script>
    <script defer src="assets/js/plugins/smoothscroll.js"></script>

    <!-- title opacity scroll magix -->
    <script defer src="assets/js/plugins/scrollmagic.js"></script>
    <script defer src="assets/js/plugins/animate-scrollmagic.js"></script>
    <!-- title opacity scroll magic end -->



    <script defer src="assets/js/plugins/tilt.js"></script>
    <script defer src="assets/js/plugins/counterup.js"></script>

    <script defer src="assets/js/vendor/waw.js"></script>
    <!-- custom javascripts -->
    <script defer src="assets/js/main.js"></script>
    <!-- Scripts style two End -->
</body>

</html>