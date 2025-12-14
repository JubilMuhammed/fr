<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/tlogo.png">
    <title>FFFadhil-Roshan | Portfolio</title>
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
  .thumbnail-img-banner-three {
    position: relative !important;
    overflow: visible !important;
}

/* Desktop – your original design stays the same */
.rts-reveal-image-one {
    position: absolute !important;
    top: -90px !important;
    right: -80px !important;
    width: 50% !important;
    height: auto !important;
}

/* Tablet (992px and down) – reduce floating and adjust size */
@media (max-width: 992px) {
    .rts-reveal-image-one {
        top: -40px !important;
        right: -20px !important;
        width: 55% !important;
    }
}

/* Mobile – keep centered, smaller & clean placement */
@media (max-width: 576px) {
    .rts-reveal-image-one {
        position: absolute !important;
        top: -40px !important;       /* adjust higher/lower */
        right: -10px !important;     /* closer to edge */
        width: 35% !important;       /* smaller size */
        height: auto !important;
        transform: none !important;  /* remove centering */
        left: auto !important;
    }
}

@media (max-width: 576px) {
    .thumbnail-img-banner-three {
        overflow: visible !important;
    }
}

/* Brand wrapper container */
.brand-wrapper-container {
    overflow: hidden;
    position: relative;
    width: 100%;
}

/* Brand wrapper with scroll animation */
.brand-wrapper {
    display: flex;
    align-items: center;
    gap: 60px;
    width: fit-content;
}

.brand-scroll {
    animation: scroll-logos 30s linear infinite;
}

/* Pause animation on hover */
.brand-wrapper-container:hover .brand-scroll {
    animation-play-state: paused;
}

/* Scroll animation keyframes */
@keyframes scroll-logos {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Logo styling */
.brand-logo {
    height: 130px;
    width: auto;
    max-width: 150px;
    object-fit: contain;
    transition: all 0.3s ease;
    
    /* White filter applied by default */
    filter: brightness(0) invert(1);
    opacity: 0.7;
}

/* Hover effect - show original colors */
.brand-logo:hover {
    filter: none;
    opacity: 1;
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .brand-logo {
        height: 40px;
        max-width: 120px;
    }
    
    .brand-wrapper {
        gap: 40px;
    }
    
    @keyframes scroll-logos {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
}

@media (max-width: 576px) {
    .brand-logo {
        height: 35px;
        max-width: 100px;
    }
    
    .brand-wrapper {
        gap: 30px;
    }
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

/* Marketing Professional Text Styling */
.rts_hero__title span {
    display: inline-block;
    margin-left: -90px; /* Moves text to the right */
    font-size: 0.75em; /* Reduces size to 75% of parent */
    position: relative;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .rts_hero__title span {
        margin-left: 25px;
        font-size: 0.7em;
    }
}

@media (max-width: 576px) {
    .rts_hero__title span {
        margin-left: 15px;
        font-size: 0.65em;
    }
}
/* Blog Image Overlay Styling */
.single-blog-area .thumbnail {
    position: relative;
    display: block;
    overflow: hidden;
}

.single-blog-area .image-box-blog {
    position: relative;
}

/* Black overlay */
.single-blog-area .thumbnail::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
    transition: all 0.4s ease;
}

/* Hover effect - darken more on hover */
.single-blog-area .thumbnail:hover::before {
    background: rgba(0, 0, 0, 0.6);
}

/* Image zoom on hover */
.single-blog-area .thumbnail:hover img {
    transform: scale(1.1);
}

.single-blog-area .image-box-blog img {
    transition: transform 0.4s ease;
}

/* Make sure content is above overlay */
.single-blog-area .inner-content {
    position: relative;
    z-index: 2;
}
/* Skills Animation - One by One from Top to Bottom */
.skill-area-h3 {
    overflow: hidden;
}

.skill-area-h3 .single {
    opacity: 0;
    transform: translateY(30px);
    animation: slideInDown 0.6s ease forwards;
}

/* Delay each item */
.skill-area-h3:nth-of-type(1) .single:nth-child(1) {
    animation-delay: 0.2s;
}

.skill-area-h3:nth-of-type(1) .single:nth-child(2) {
    animation-delay: 0.4s;
}

.skill-area-h3:nth-of-type(2) .single:nth-child(1) {
    animation-delay: 0.6s;
}

.skill-area-h3:nth-of-type(2) .single:nth-child(2) {
    animation-delay: 0.8s;
}

/* Alternative selector if the above doesn't work */
.skill-area-h3:first-child .single:first-child {
    animation-delay: 0.2s;
}

.skill-area-h3:first-child .single:last-child {
    animation-delay: 0.4s;
}

.skill-area-h3.mt--30 .single:first-child {
    animation-delay: 0.6s;
}

.skill-area-h3.mt--30 .single:last-child {
    animation-delay: 0.8s;
}

@keyframes slideInDown {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Trigger animation when element is in viewport */
@media (prefers-reduced-motion: no-preference) {
    .skill-area-h3 .single {
        animation-play-state: paused;
    }
    
    .skill-area-h3.in-view .single {
        animation-play-state: running;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    @keyframes slideInDown {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
}
.single-case-main-wrapper .inner-content {
    opacity: 1 !important;
    visibility: visible !important;
}

.single-case-main-wrapper .inner-content span,
.single-case-main-wrapper .inner-content a {
    opacity: 1 !important;
    visibility: visible !important;
}
/* Hide mobile hero image by default */
.hero-mobile-img {
    display: none;
}

/* Hide desktop floating image on mobile */
@media (max-width: 768px) {
    .rts-reveal-image-one {
        display: none !important;
    }

    .hero-mobile-img {
        display: block;
        width: 80%;
        margin: 20px auto 0;
        border-radius: 12px;
        height: auto;
    }
}

/* Even smaller screens */
@media (max-width: 480px) {
    .hero-mobile-img {
        width: 90%;
        margin-top: 15px;
    }
}
@media (max-width: 576px) {
    .click-down-bottom {
        display: none !important;
    }
}

      </style>
</head>

<body class="tt-transition tt-boxed tt-smooth-scroll index-three">

    <!-- header area srtart -->
    <div class="header-three">
        <div class="header-three-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <a href="{{ url('/') }}" class="loog">
                                <h2 style="margin: 0; font-size: 28px; font-weight: 700; color: #ffffff;">Fadhil Roshan.</h2>
                            </a>
                        <a href="index.html" class="logo-area-white">
                            <img src="assets/images/logo/02.svg" alt="logo-area">
                        </a>
                        <div class="header-right">
                            <div class="menu-btn">
                                <span>Menu</span>
                            </div>
                            <div class="menu-btn">

                                <div class="rts-offcanvas-wrapper">
                                    <div class="container-menu">
                                        <div class="action-menu">
                                            <div class="close-event"></div>
                                            <div class="open-event">
                                                <!-- <div class="text">
                        <span>Menu</span>
                        <span>Close</span>
                    </div> -->
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
    <!-- header area end -->

    <!-- banner area start -->
    <div class="rts-banner-area-three-start rts-scroll-down-circle-wrapper-2 rts-scroll-down-circle-wrapper">
        <!-- banner shape area -->
        <div class="banner-shape-area">
            <img src="assets/images/banner/11.png" alt="banner">
        </div>
        <div class="small-shape">
            <img src="assets/images/banner/12.png" alt="banner_shape">
        </div>
        <a href="#" class="speen-shape scroll-down-circle-2">
            <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin" viewBox="0 0 100 100" width="120" height="120">
                <defs>
                    <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                    </path>
                </defs>
                <text font-size="11.75">
                    <textPath xlink:href="#circle">Fadhil Roshan • Portfolio •</textPath>
                </text>
            </svg>
            <i class="fa-solid fa-star-sharp"></i>
        </a>
        <!-- banner shape area end -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="banner-content-wrapper-three">
                        <h2 class="title rts_hero__title">Fadhil <br>
                            
                            Roshan
                        </h2>
                        <p class="disc hero__sub-title">
                            A Marketing Proffessional enthusiast with a strong passion for <br>the PR industry, I excel in content creations, particularly <br>in areas such as Editing and Graphic design
                        </p>
                        <!-- Mobile Hero Image -->
<img src="assets/images/banner/10.png" class="hero-mobile-img" alt="Fadhil Roshan">

                        <a href="#about" class="click-down-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="41" viewBox="0 0 14 41" fill="none">
                                <g clip-path="url(#clip0_353_1191)">
                                    <path d="M7.13756 39.8898V39.871C7.99995 35.5997 10.4954 31.9306 13.9082 29.5974V29.3528C10.6055 31.5731 8.14674 34.9976 7.13756 39.0242L7.13756 0.0939941L6.95407 0.0939941L6.95407 38.9866C6.91738 38.8737 6.89903 38.742 6.86233 38.6291C5.85316 34.6025 3.39444 31.178 0.0916901 28.9577V29.1835C3.52288 31.5355 5.99995 35.1858 6.86233 39.457V39.4758C6.89903 39.6264 6.91738 39.7769 6.93573 39.9274C6.97242 40.0779 6.99077 40.2473 7.00912 40.3978C7.06417 40.2285 7.10086 40.0591 7.13756 39.8898Z" fill="white" stroke="white" stroke-miterlimit="10" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_353_1191">
                                        <rect width="41" height="14" fill="white" transform="matrix(0 1 -1 0 14 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1 pt--140">
                    <div class="thumbnail-img-banner-three rts-reveal-one">
                        <img class="rts-reveal-image-one" src="assets/images/banner/10.png" alt="banner_images">
                    </div>
                </div>
            </div>
        </div>
        <!-- social share banner left three -->
        <div class="social-share-horizental scroll-down-circle">
            <ul>
                 <li><a href="https://wa.me/918943068962" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href="https://www.instagram.com/fadhil__roshan" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/fadhil-roshan-157819245/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
            <p>Follow Me</p>
        </div>
        <!-- social share banner left three end -->
    </div>
    <!-- banner area end -->

    <!-- rts about area three -->
    <div class="rts-about-area parallax-about  rts-section-gap about-three-bg" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <a href="about.html" class="pli-image-link">
                        <div class="pli-image-holder">
                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pli-info-overlay" is enabled on "portfolio-list". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                            <figure class="pli-image">
                                <img class="anim-image-parallax tt-lazy" src="assets/images/abt.png" data-src="assets/images/abt.png" alt="image">
                            </figure> <!-- /.pli-image -->
                        </div> <!-- /.pli-image-holder -->

                    </a> <!-- /.pli-image-link -->
                </div>
                <div class="col-lg-6">
                    <div class="about-three-right-content">
                        <div class="title-area-left-three">
                            <span>About</span>
                            <h2 class="title quote">I Drive Growth & Define Brands.</h2>
                        </div>
                        <p class="disc rts-text-anim">
                            My work is rooted in understanding how brands communicate, how people connect, and how ideas influence perception.
By combining strategic thinking, creative design, and strong content development, I help brands craft their identity and express it across digital and social platforms.
From shaping the message to designing the visuals, I focus on creating work that not only captures attention but also builds trust, strengthens relationships, and drives meaningful long-term growth.
                        </p>
                        <div class="skill-area-h3 rts-slide-up-gsap">
                            <!-- single -->
                            <div class="single">
                                <i class="fa-solid fa-arrow-right"></i>
                                <p>Integrated Marketing Strategy</p>
                            </div>
                            <!-- single end -->
                            <!-- single -->
                            <div class="single">
                                <i class="fa-solid fa-arrow-right"></i>
                                <p>PR Campaigns</p>
                            </div>
                            <!-- single end -->
                        </div>
                        <div class="skill-area-h3 rts-slide-up-gsap mt--30">
                            <div class="single">
                                <i class="fa-solid fa-arrow-right"></i>
                                <p>Communication & Stakeholder Mgmt</p>
                            </div>
                            <!-- single end -->
                            <!-- single -->
                            <div class="single">
                                <i class="fa-solid fa-arrow-right"></i>
                                <p>Brand Development</p>
                            </div>
                            <!-- single end -->
                        </div>
                        <a href="{{ url('/about') }}" class="learn-more-btn">More About Me<i
                                class="fa-solid fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts service area starrt -->
    <div class="rts-service-area three rts-section-gap bg-dark-2 service__area-3 rts-service-revel-pro">
        <div class="shape">
            <img src="assets/images/service/shape-1.png" alt="shape-image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left-three-large">
                        <span>Experience</span>
                        <h2 class="title quote">My Experience</h2>
                        <p class="left-m-para rts-text-anim">
                            My professional experience reflects a thoughtful mix of creative production and strategic communication.<br> From designing visuals and editing multimedia content to crafting brand stories and <br>supporting PR initiatives, I’ve built a strong understanding of how to communicate<br> effectively in today’s digital landscape. Each experience has helped me sharpen my skills, <br>adapt to new tools, and approach every project with clarity, creativity, and purpose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-service-1">
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap mt--80">
                            <div class="number-area">
                                <span>01</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    Business Development <br> Executive
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    August 2024 - Present <br>
                                    
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Loudimc </p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Calicut,Kerala</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg" ></div>
                        </div>
                        <!-- ingle service area end -->
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap">
                            <div class="number-area">
                                <span>02</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    Social <br>Media<br> Executive
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    July 2023 - November 2023 <br>
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Football Geek</p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Navi, Mumbai</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg" ></div>
                        </div>
                        <!-- ingle service area end -->
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap">
                            <div class="number-area">
                                <span>03</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    Assistant <br>Event <BR>Manager
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    February 2021 - July 2021 
                                    
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Ajfan Catering</p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Calicut, Kerala</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg" ></div>
                        </div>
                        <!-- ingle service area end -->

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->
    <!-- rts about area three end -->

     <!-- case studies start -->
    <div class="rts-case-studies-three rts-section-gap case-three-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left-three-large">
                        <span>Expertised in</span>
                        <h2 class="title quote">Case Studies</h2>
                        <p class="left-m-para rts-text-anim">
                            Showcasing a range of creative and strategic services designed to help <br>brands communicate effectively and stand out in today's <br>digital landscape.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-24 align-items-center mt--90 mt_md--50 mt_sm--0">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                   
                    <!-- wrapper case inner -->
                    <div class="single-case-main-wrapper">
                        <a href="portfolio-details.html" class="pli-image-link">
                            <div class="pli-image-holder">
                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pli-info-overlay" is enabled on "portfolio-list". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                <figure class="pli-image">
                                    <img class="anim-image-parallax tt-lazy" src="assets/images/bd.jpg" data-src="assets/images/product/75.jpg" alt="image">
                                </figure> <!-- /.pli-image -->
                            </div> <!-- /.pli-image-holder -->

                        </a> <!-- /.pli-image-link -->
                        <div class="inner-content">
                            <span>Develop</span>
                            <a href="{{ url('/developing') }}">Business Developing </a>
                        </div>
                    </div>
                    <!-- wrapper case inner start -->
                    <!-- wrapper case inner -->
                    <div class="single-case-main-wrapper">
                        <a href="portfolio-details.html" class="pli-image-link">
                            <div class="pli-image-holder">
                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pli-info-overlay" is enabled on "portfolio-list". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                <figure class="pli-image">
                                    <img class="anim-image-parallax tt-lazy" src="assets/images/brand.jpg" data-src="assets/images/product/76.jpg" alt="image">
                                </figure> <!-- /.pli-image -->
                            </div> <!-- /.pli-image-holder -->

                        </a> <!-- /.pli-image-link -->
                        <div class="inner-content">
                            <span>Develop</span>
                            <a href="{{ url('/branding') }}">Branding</a>
                        </div>
                    </div>

                    <!-- wrapper case inner start -->

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <!-- wrapper case inner -->
                   <div class="single-case-main-wrapper">
                        <a href="portfolio-details.html" class="pli-image-link">
                            <div class="pli-image-holder">
                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pli-info-overlay" is enabled on "portfolio-list". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                <figure class="pli-image">
                                    <img class="anim-image-parallax tt-lazy" src="assets/images/pr.jpg" data-src="assets/images/product/77.jpg" alt="image">
                                </figure> <!-- /.pli-image -->
                            </div> <!-- /.pli-image-holder -->

                        </a> <!-- /.pli-image-link -->
                        <div class="inner-content">
                            <span>Develop</span>
                            <a href="{{ url('/pr') }}">PR Campaigns</a>
                        </div>
                    </div>

                    <!-- wrapper case inner start -->
                    <!-- wrapper case inner -->
                    <div class="single-case-main-wrapper">
                        <a href="portfolio-details.html" class="pli-image-link">
                            <div class="pli-image-holder">
                                <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pli-info-overlay" is enabled on "portfolio-list". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                <figure class="pli-image">
                                    <img class="anim-image-parallax tt-lazy" src="assets/images/content.jpg" data-src="assets/images/product/78.jpg" alt="image">
                                </figure> <!-- /.pli-image -->
                            </div> <!-- /.pli-image-holder -->

                        </a> <!-- /.pli-image-link -->
                        <div class="inner-content">
                            <span>Strategy</span>
                            <a href="{{ url('/content') }}">Content Strategy</a>
                        </div>
                    </div>
                    <!-- wrapper case inner start -->

                </div>
                <a href="{{ url('/services') }}" class="learn-more-btn text-center">View More <i
                        class="fa-solid fa-arrow-up-right"></i></a>

            </div>
        </div>
    </div>
    <!-- case studies end -->

    <!-- rts service area starrt -->
    <div class="rts-service-area three rts-section-gap bg-dark-2 service__area-3 rts-service-revel-pro">
        <div class="shape">
            <img src="assets/images/service/shape-1.png" alt="shape-image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left-three-large">
                        <span>Education</span>
                        <h2 class="title quote">My Education</h2>
                        <p class="left-m-para rts-text-anim">
                            Grounded in marketing and communication studies, my education has helped me master<br> the fundamentals of brand identity, PR strategy, and creative execution—allowing <br>me to bring clarity and direction to my work.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-service-1">
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap mt--80">
                            <div class="number-area">
                                <span>01</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    MA-Advertising and <br>Public
Relations
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    2022-2024 <br>
                                    
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Amity University 
 </p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                       <i class="fa-solid fa-arrow-right"></i>
                                        <p>Mumbai</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg" ></div>
                        </div>
                        <!-- ingle service area end -->
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap">
                            <div class="number-area">
                                <span>02</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    BA <br>(JMC)
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    2019 - 2022 <br>
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>ST. Joseph's College</p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Devagiri, Calicut</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg"></div>
                        </div>
                        <!-- ingle service area end -->
                        <!-- ingle service area start -->
                        <div class="single-service-area-start rts-service-item-1 rts-service-animation rts-skew-up-gsap">
                            <div class="number-area">
                                <span>03</span>
                            </div>
                            <a href="{{ url('/about') }}" class="title-area">
                                <h3 class="title">
                                    Higher Secondary <br>Education
                                </h3>
                            </a>
                            <div class="discription-area">
                                <p class="disc">
                                    2019
                                    
                                </p>
                                <!-- sm service area start -->
                                <div class="sm-service-area-wrapper">
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                       <i class="fa-solid fa-arrow-right"></i>
                                        <p>Thiruvangoor HSS</p>
                                    </div>
                                    <!-- sm-service end -->
                                    <!-- sm-service -->
                                    <div class="sm-service">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <p>Kozhikode, Kerala</p>
                                    </div>
                                    <!-- sm-service end -->
                                </div>
                                <!-- sm service area end -->
                            </div>
                            <div class="end-arrow discription-area">
                                <a href="{{ url('/about') }}">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="rts-service-hover-bg" ></div>
                        </div>
                        <!-- ingle service area end -->

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    

    <div class="rts-marquree-area-start marque-2">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-split-wrap-about scrolltext-wrapper">
                        <div class="text-split scrollingText-two">
                            <h2 class="title">
                                Turning Ideas Into Impact.
                                Turning Ideas Into Impact.
                                <span>Turning Ideas Into Impact.</span>
                                Turning Ideas Into Impact.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-marquree-area-start-bottom pb--50 bg-dark-1">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-split-wrap-about scrolltext-wrapper">
                        <div class="text-split scrollingText-four">
                            <h2 class="title">
                                Building Brands With Purpose.
                                Building Brands With Purpose.
                                Building Brands With Purpose.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts News area start -->
    <div class="rts-news-area-three-start rts-section-gapBottom case-three-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left-three-large">
                        <span>Social Media</span>
                        <h2 class="title quote">Social Media Works</h2>
                        <p class="left-m-para rts-text-anim">
                           From strategy to design, I create social media content that’s creative, consistent,<br> and crafted to engage. Whether it’s posts, stories, reels, or campaigns—I focus on <br>telling the brand story in a way that resonates.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-24 mt--50 rts-slide-left-gsap">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area">
                        <a href="blog-details.html" class="thumbnail">
                            <div class="image-box-blog">
                                <img src="assets/images/a1.png" alt="blog-image">
                                <img src="assets/images/a1.png" alt="blog-image">
                            </div>
                        </a>
                        <div class="inner-content">
                            <div class="top">
                                <div class="meta">
                                   
                                </div>
                                <div class="time">
                                   
                                </div>
                            </div>
                            <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A73405477&keywords=footballgeek&origin=RICH_QUERY_SUGGESTION&position=0&searchId=51eb51c0-05c2-4968-aa40-bb25d53b250c&sid=.Rh&spellCorrectionEnabled=false" class="title-text">
                                <h5 class="title">
                                    Creating Modern Digital <br>Experiences
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area">
                        <a href="blog-details.html" class="thumbnail">
                            <div class="image-box-blog">
                                <img src="assets/images/a2.png" alt="blog-image">
                                <img src="assets/images/a2.png" alt="blog-image">
                            </div>
                        </a>
                        <div class="inner-content">
                            <div class="top">
                                <div class="meta">
                                    
                                </div>
                                <div class="time">
                                    
                                </div>
                            </div>
                            <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A73405477&keywords=footballgeek&origin=RICH_QUERY_SUGGESTION&position=0&searchId=51eb51c0-05c2-4968-aa40-bb25d53b250c&sid=.Rh&spellCorrectionEnabled=false" class="title-text">
                                <h5 class="title">
                                    Crafting Engaging Visual <br>Stories
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-area">
                        <a href="blog-details.html" class="thumbnail">
                            <div class="image-box-blog">
                                <img src="assets/images/a3.png" alt="blog-image">
                                <img src="assets/images/a3.png" alt="blog-image">
                            </div>
                        </a>
                        <div class="inner-content">
                            <div class="top">
                                <div class="meta">
                                    
                                </div>
                                <div class="time">
                                    
                                </div>
                            </div>
                            <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A73405477&keywords=footballgeek&origin=RICH_QUERY_SUGGESTION&position=0&searchId=51eb51c0-05c2-4968-aa40-bb25d53b250c&sid=.Rh&spellCorrectionEnabled=false" class="title-text">
                                <h5 class="title">
                                    Transforming Ideas Into <br>Impactful Content
                                </h5>
                            </a>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts News area end -->

   <!-- rts brand area start -->
<div class="rts-brand-area rts-section-gapBottom bg-dark-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-style-one">
                    <p class="title-brand">HAPPILY WORKED WITH</p>
                    <div class="brand-wrapper-container">
                        <div class="brand-wrapper brand-scroll">
                            <a href="#"><img src="assets/images/ee.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/i.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/o.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/p.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/r.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/t.png" alt="brand" class="brand-logo"></a>
                            <!-- Duplicate logos for seamless loop -->
                            <a href="#"><img src="assets/images/m.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/n.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/b.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/v.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/c.png" alt="brand" class="brand-logo"></a>
                            <a href="#"><img src="assets/images/x.png" alt="brand" class="brand-logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts brand area end -->

    

   <div class="rts-service-area three rts-section-gap bg-dark-2 service__area-3 rts-service-revel-pro">
    
    <div class="container mb--50">
        <div class="row">
            <div class="col-lg-12">
                <!-- Updated heading style to match Experience section -->
                <div class="title-area-left-three-large">
                    <span>Frequently Asked Questions</span>
                    <h2 class="title quote">FAQ's?</h2>
                    <p class="left-m-para rts-text-anim">
                        Find answers to common questions about my services, workflow, and creative approach.<br> If you have any other questions, feel free to reach out directly.
                    </p>
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
                                    <p>Here, you'll find my graphic design projects such as posters, branding elements, promotional creatives, and visual concepts.
Each design reflects my clean, modern style and my ability to communicate a brand's message through thoughtful visual storytelling.</p>
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
<!-- cta area -->
    <div class="rts-cta-4-area bg_image rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-wrapper">
                        <div class="title-wrap-cta-4">
                            <h2 class="title quote">
                                GOT A PROJECT <br>
                            </h2>
                            <h2 class="title quote">
                                IN MIND?
                            </h2>
                        </div>

                        <a href="{{ url('/contact') }}" class="cta-border-button">Let’s Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-wrapper -->
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
    <script>
        // Skills Animation - Trigger on Scroll
document.addEventListener('DOMContentLoaded', function() {
    const skillSections = document.querySelectorAll('.skill-area-h3');
    
    // Intersection Observer for scroll animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });
    
    // Observe each skill section
    skillSections.forEach(section => {
        observer.observe(section);
    });
});

// Alternative: Trigger animation immediately on page load
window.addEventListener('load', function() {
    const skillSections = document.querySelectorAll('.skill-area-h3');
    setTimeout(() => {
        skillSections.forEach(section => {
            section.classList.add('in-view');
        });
    }, 300);
});
        </script>
    <!-- Scripts style two End -->
</body>

</html>
