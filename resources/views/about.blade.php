<!DOCTYPE html>
<html lang="en">

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
    <style>
        /* Brand logo styling for about page */
.brand-logo-about {
    transition: all 0.4s ease;
    /* Convert to grayscale/monochrome like the example image */
    filter: grayscale(100%) brightness(0%) contrast(100%);
    opacity: 0.9;
    max-height: 130px;
    width: auto;
    object-fit: contain;
}

/* Hover effect - show original colors */
.single-brand:hover .brand-logo-about {
    filter: grayscale(0%) brightness(100%) contrast(100%);
    opacity: 1;
    transform: scale(1.1);
}

/* Ensure smooth transition for the link wrapper */
.single-brand {
    display: inline-block;
    transition: transform 0.4s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .brand-logo-about {
        max-height: 50px;
    }
}

@media (max-width: 576px) {
    .brand-logo-about {
        max-height: 40px;
    }
}

/* Optional: Add spacing between rows if needed */
.brand-main-wrapper-about {
    margin-bottom: 20px;
}
       .footer-right-two .contact-information.input {
    margin-top: 80px; !important;
    padding-top: 0 !important;
}

.footer-right-two .contact-information.input .title {
    margin-top: 0 !important;
}
.footer-left-two .logo .text-logo {
    font-size: 36px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    font-family: inherit;
}

.footer-left-two .logo {
    display: inline-block;
}
/* Center the navigation menu */
.main-header-two {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header-nav-area {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.navbar-nav-1 {
    display: flex;
    gap: 40px;
    list-style: none;
    margin: 0;
    padding: 0;
    align-items: center;
}

/* Alternative approach if the above doesn't work */
.header-left-area {
    flex: 0 0 auto;
}

.header-right {
    flex: 0 0 auto;
}

/* Responsive - hide centered menu on mobile, show hamburger */
@media (max-width: 991px) {
    .header-nav-area {
        display: none;
    }
}

/* Make sure the menu items are properly styled */
.navbar-nav-1 .menu-item {
    margin: 0;
}

.navbar-nav-1 .menu-item a {
    text-decoration: none;
    color: #ffffff;
    font-weight: 500;
    transition: all 0.3s ease;
}

.navbar-nav-1 .menu-item a:hover {
    opacity: 0.7;
}
/* Video Section Styling */
.rts-video-area-about {
    position: relative;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.video-content-wrapper {
    position: relative;
    z-index: 2;
}

/* Play Button Styling */
.video-play-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    color: #ffffff;
    font-size: 32px;
    transition: all 0.4s ease;
    margin-bottom: 50px;
    position: relative;
}

.video-play-btn::before {
    content: '';
    position: absolute;
    width: 120px;
    height: 120px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: pulse 2s infinite;
}

.video-play-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
    color: #ffffff;
}

.video-play-btn i {
    margin-left: 5px;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.3);
        opacity: 0;
    }
}

/* Text Content Styling */
.video-text-content {
    color: #ffffff;
}

.extras-title {
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 2px;
    margin-bottom: 15px;
    text-transform: lowercase;
    opacity: 0.8;
}

.spec-ad-title {
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 8px;
    margin-bottom: 30px;
    text-transform: uppercase;
}

.video-details p {
    font-size: 16px;
    letter-spacing: 4px;
    margin-bottom: 10px;
    opacity: 0.9;
}

.brand-info,
.topical-info {
    font-weight: 300;
}

/* Responsive Design */
@media (max-width: 768px) {
    .rts-video-area-about {
        min-height: 500px;
    }
    
    .video-play-btn {
        width: 80px;
        height: 80px;
        font-size: 24px;
        margin-bottom: 30px;
    }
    
    .video-play-btn::before {
        width: 100px;
        height: 100px;
    }
    
    .spec-ad-title {
        font-size: 32px;
        letter-spacing: 4px;
    }
    
    .video-details p {
        font-size: 14px;
        letter-spacing: 2px;
    }
}

@media (max-width: 576px) {
    .rts-video-area-about {
        min-height: 400px;
    }
    
    .video-play-btn {
        width: 70px;
        height: 70px;
        font-size: 20px;
    }
    
    .extras-title {
        font-size: 16px;
    }
    
    .spec-ad-title {
        font-size: 24px;
        letter-spacing: 3px;
        margin-bottom: 20px;
    }
    
    .video-details p {
        font-size: 12px;
        letter-spacing: 1px;
    }
}
/* Remove blank space under footer */
.rts-footer-two-area {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.copy-right-area-start-two {
    margin-bottom: 0 !important;
    padding-bottom: 30px !important;
}

/* Remove extra spacing from brand area */
.rtes-brand-area {
    margin-bottom: 0 !important;
    padding-bottom: 80px !important;
}

/* Ensure body has no extra margin/padding */
body {
    margin: 0;
    padding: 0;
}

/* Remove any extra spacing after footer */
.rts-footer-two-area::after,
.copy-right-area-start-two::after {
    content: none !important;
}

/* Fix for progress bar wrapper */
.progress-team-area {
    padding-bottom: 80px !important;
}

/* Remove the excessive br tags effect - target the area before FAQ */
.progress-team-area + br {
    display: none !important;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .rtes-brand-area {
        padding-bottom: 60px !important;
    }
    
    .progress-team-area {
        padding-bottom: 60px !important;
    }
}
      </style>
</head>

<body class="inner-page about">


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


    <!-- Scripts style two -->
    <!-- rts bread crumba rea start -->
    <div class="rts-breadcrumb-area bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="baread-crumb-main-wrapper pt--100">
                        <div class="inner">
                            <span class="works">More About Me</span>
                            <h1 class="title rts_hero__title">About</h1>
                            <span class="bg-text">About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts bread crumba rea end -->
    <!-- Scripts style two End -->


    

    <!-- our approch area start -->
    <div class="our-approch-area-style-one rts-section-gap bg-dark-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid-lines-wrapper">
                        <div class="grid-lines">
                            <div class="grid-line"></div>
                            <div class="grid-line"></div>
                            <div class="grid-line"></div>
                            <div class="grid-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-6 rts-slide-right-gsap">
                    <!-- approach area left start -->
                    <div class="approch-area-left">
                        <div class="title-area-left-wrapper">
                            <span class="pre-title">My Approach</span>
                            <h2 class="title quote">A Refined Creative Process<br> Built Around Your Brand</h2>
                        </div>
                        <p class="disc rts-text-anim">
                            My workflow focuses on clarity, creativity, and brand alignment. <br>By understanding your objectives first, I craft designs and content<br> that reflect your story and support real engagement.
                        </p>
                        
                    </div>
                    <!-- approach area left end -->
                </div>
                <div class="col-lg-5 col-md-6 rts-slide-left-gsap mt_sm--30">
                    <!-- single approch area start -->
                    <div class="single-approach-area-start">
                        <div class="left-area">
                            <h3 class="title">INSIGHT & BRAND ANALYSIS</h3>
                            <p class="disc rts-text-anim">Deep dive into the brand’s voice, values, and<br> communication style to build strong foundations.</p>
                        </div>
                    </div>
                    <!-- single approch area end -->
                    <!-- single approch area start -->
                    <div class="single-approach-area-start two">
                        <div class="left-area">
                            <h3 class="title">CREATIVE DEVELOPMENT</h3>
                            <p class="disc rts-text-anim">Crafting compelling visuals, edits, and content <br>concepts tailored to audience interaction.</p>
                        </div>
                    </div>
                    <!-- single approch area end -->
                    <!-- single approch area start -->
                    <div class="single-approach-area-start three mb--0">
                        <div class="left-area">
                            <h3 class="title">EXECUTION & REFINEMENT</h3>
                            <p class="disc rts-text-anim">Polishing the final outputs with precision, ensuring <br>consistency, clarity, and high visual impact.</p>
                        </div>
                    </div>
                    <!-- single approch area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- our approch area end -->

    <!-- progress-team aarea -->
    <div class="progress-team-area rts-team__area rts-section-gap bg-dark-1 rts_jump_counter__animation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="progress-ciurcle-wrapper-one">
                        <div class="counter_animation">
                            <!-- single progress -->
                            <div class="single-progress-circle counter__anim">
                                <svg class="radial-progress" data-countervalue="75" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="56%" transform="matrix(0, 1, -1, 0, 80, 0)">90</text>
                                </svg>
                                <span class="small-text">
                                    Content Creation
                                </span>
                            </div>
                            <!-- single progress end -->
                        </div>
                        <div class="counter_animation">
                            <!-- single progress -->
                            <div class="single-progress-circle counter__anim">
                                <svg class="radial-progress" data-countervalue="95" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="56%" transform="matrix(0, 1, -1, 0, 80, 0)">95</text>
                                </svg>
                                <span class="small-text">
                                    Branding Plans
                                </span>
                            </div>
                            <!-- single progress end -->
                        </div>

                        <div class="counter_animation">
                            <!-- single progress -->
                            <div class="single-progress-circle counter__anim">
                                <svg class="radial-progress" data-countervalue="60" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="56%" transform="matrix(0, 1, -1, 0, 80, 0)">90</text>
                                </svg>
                                <span class="small-text">
                                    Online Marketing
                                </span>
                            </div>
                            <!-- single progress end -->
                        </div>

                        <div class="counter_animation">
                            <!-- single progress -->
                            <div class="single-progress-circle counter__anim">
                                <svg class="radial-progress" data-countervalue="85" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="56%" transform="matrix(0, 1, -1, 0, 80, 0)">85</text>
                                </svg>
                                <span class="small-text">
                                    Graphic Design
                                </span>
                            </div>
                            <!-- single progress end -->
                        </div>

                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br>
       


    <!-- rts faq area start  -->
    <div class="rts-faq-section-area rts-section-gapBottom">
        <div class="container mb--50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-faq-4">
                        <span class="pre">FAQ</span>
                        <h2 class="title quote">Frequently ask question?</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-140 mt--100">
            <div class="row">
                <div class="col-lg-4 rts-slide-left-gsap">
                    <!-- faq- thumbnail -->
                    <img src="assets/images/faq/02.png" alt="faq">
                    <!-- faq- thumbnail end -->
                </div>
                <div class="col-lg-8 pr--140 pl--50 pl_md--15 pl_sm--15 pr_md--15 pr_sm--15">
                    <div class="four-accordion-area-faq">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item rts-slide-up-gsap">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What does your Creative Content & Social Media portfolio include?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>This section highlights my work in content creation, copywriting, and social media strategy.
It showcases posts, captions, layouts, and creative concepts designed to strengthen brand identity and improve audience engagement across platforms.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rts-slide-up-gsap">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What can be found in your Visual Design & Brand Identity portfolio?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Here, you’ll find my graphic design projects such as posters, branding elements, promotional creatives, and visual concepts.
Each design reflects my clean, modern style and my ability to communicate a brand’s message through thoughtful visual storytelling.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item rts-slide-up-gsap">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What type of work is featured in your Editing & Digital Media portfolio?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>This section focuses on my video and photo editing projects.
It includes reels, promotional edits, color grading, transitions, and other creative enhancements that transform raw content into polished and engaging digital media.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area start  -->

<!-- rts video area start -->
<div class="rts-video-area-about rts-section-gap bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-content-wrapper text-center">
                    <!-- Play Button -->
                    <a href="assets/videos/kitkat.mp4" class="video-play-btn popup-video">
                        <i class="fa-solid fa-play"></i>
                    </a>
                    
                    <!-- Text Content -->
                    <div class="video-text-content">
                        <h3 class="extras-title">EXTRAS</h3>
                        <h2 class="spec-ad-title">SPEC AD FILM</h2>
                        <div class="video-details">
                            <p class="brand-info">Brand : KitKat India</p>
                            <p class="topical-info">Topical : New Year</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts video area end -->

    


    <!-- rts brand area start -->
<div class="rtes-brand-area rts-section-gapBottom"><br><br><br><br><br>
    <div class="container plr--60">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="title-faq-4">
                    <span class="pre">INTERNATIONAL BRANDS</span>
                    <h2 class="title quote">We are happy to work with global <br>
                        largest brands</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container plr--60">
        <div class="row rts-slide-left-gsap">
            <div class="col-lg-12">
                <!-- brand main wrapper  -->
                <div class="brand-main-wrapper-about">
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/ee.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/i.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/o.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/p.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/r.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/t.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                </div>
                <!-- brand main wrapper end -->
                
                <!-- brand main wrapper  -->
                <div class="brand-main-wrapper-about mt--40">
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/m.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/n.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/b.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/v.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/c.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                    <!-- single brand -->
                    <a href="#" class="single-brand">
                        <img src="assets/images/x.png" alt="brand" class="brand-logo-about">
                    </a>
                    <!-- single brand end -->
                </div>
                <!-- brand main wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- rts brand area end -->

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

    <!-- Footer style two End -->


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