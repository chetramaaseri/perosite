<?php
$mobileSites = scandir('public/mobile-sites');
unset($mobileSites[0]);
unset($mobileSites[1]);
?>
<div id="magic-cursor">
    <div id="ball"></div>
</div>

<div class="tt-style-switch index-dark">
    <i class="bi bi-brightness-low-fill"></i>
</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
    <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
        <g>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.03516 0.416666L7.03516 15H8.28516L8.28516 0.416666H7.03516Z" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 31.6667; stroke-dashoffset: 31.6667;"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.28516 1.04115C8.28516 3.98115 5.70016 6.38281 2.94349 6.38281H2.31849V5.13281H2.94349C5.03599 5.13281 7.03516 3.26448 7.03516 1.04115V0.416979H8.28516V1.04115Z"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.03333 1.04115C7.03333 3.98115 9.61833 6.38281 12.375 6.38281H13V5.13281H12.375C10.2817 5.13281 8.28333 3.26448 8.28333 1.04115V0.416979H7.03333V1.04115Z"></path>
        </g>
    </svg>
</div>

<div class="right-sidebar-menu">
    <div class="sidebar-logo-area d-flex justify-content-between align-items-center">
        <div class="sidebar-logo-wrap">
            <a href="<?=base_url()?>">
                <img alt="image" src="<?=base_url()?>assets/img/right-sidebar-sm-logo.svg" class="light">
                <img alt="image" src="<?=base_url()?>assets/img/right-sidebar-sm-logo-white.svg" class="dark">
            </a>
        </div>
        <div class="right-sidebar-close-btn">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.6694 3.0106C14.8839 2.78848 15.0026 2.49099 15 2.18219C14.9973 1.8734 14.8734 1.57801 14.6551 1.35966C14.4367 1.1413 14.1413 1.01744 13.8325 1.01475C13.5237 1.01207 13.2262 1.13078 13.0041 1.34531L8.00706 6.34236L3.01119 1.34531C2.90184 1.23589 2.77202 1.14907 2.62912 1.08983C2.48623 1.03058 2.33306 1.00005 2.17837 1C2.02368 0.999945 1.87049 1.03036 1.72756 1.08951C1.58462 1.14865 1.45473 1.23538 1.34531 1.34472C1.23589 1.45407 1.14907 1.58389 1.08983 1.72679C1.03058 1.86968 1.00005 2.02285 1 2.17754C0.999945 2.33223 1.03036 2.48542 1.08951 2.62835C1.14865 2.77129 1.23538 2.90118 1.34472 3.0106L6.34177 8.00765L1.34472 13.0047C1.12389 13.2257 0.99989 13.5253 1 13.8378C1.00011 14.1502 1.12432 14.4497 1.34531 14.6706C1.5663 14.8914 1.86596 15.0154 2.17837 15.0153C2.49078 15.0152 2.79036 14.891 3.01119 14.67L8.00706 9.67294L13.0041 14.67C13.2262 14.8845 13.5237 15.0032 13.8325 15.0005C14.1413 14.9979 14.4367 14.874 14.6551 14.6556C14.8734 14.4373 14.9973 14.1419 15 13.8331C15.0026 13.5243 14.8839 13.2268 14.6694 13.0047L9.67235 8.00765L14.6694 3.0106Z"/>
            </svg>
        </div>
    </div>
    <div class="sidebar-content-wrap">
        <div class="sidebar-content">
            <h3>Empowering Brands with Innovative Digital Solutions</h3>
            <ul class="contact-area">
                <li class="single-contact">
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/home1/icon/contact-mail-icon.svg" alt="">
                    </div>
                    <div class="content">
                        <span>Email Us</span>
                        <h6><a href="mailto:info@perosite.com">info@perosite.com</a></h6>
                    </div>
                </li>
                <li class="single-contact">
                    <div class="icon">
                        <img src="<?=base_url()?>assets/img/home1/icon/contact-call-icon.svg" alt="">
                    </div>
                    <div class="content">
                        <span>Call Anytime</span>
                        <h6>
                            <a href="tel:<?=$_ENV['CONTACTNO1']?>"><?=$_ENV['CONTACTNO1']?></a><br>
                            <a href="tel:<?=$_ENV['CONTACTNO2']?>"><?=$_ENV['CONTACTNO2']?></a>
                        </h6>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-bottom-area">
            <div class="subscribe-area">
                <h5>Stay Updated With Our Latest Digital Solutions</h5>
                <form class="subscribe-form-wrap">
                    <div class="subscribe-form">
                        <input type="email" placeholder="Enter your email address">
                        <button type="submit">
                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9647 0.685806C16.0011 0.594942 16.01 0.495402 15.9904 0.399526C15.9707 0.303649 15.9233 0.215653 15.8541 0.146447C15.7849 0.0772403 15.6969 0.0298668 15.601 0.0101994C15.5052 -0.0094681 15.4056 -0.000564594 15.3147 0.0358061L0.76775 5.85481H0.76675L0.31475 6.03481C0.22914 6.06895 0.154635 6.1261 0.0994654 6.19994C0.0442956 6.27377 0.0106078 6.36142 0.00212322 6.4532C-0.00636132 6.54497 0.0106876 6.63731 0.0513867 6.72001C0.0920859 6.8027 0.154851 6.87254 0.23275 6.92181L0.64275 7.18181L0.64375 7.18381L5.63875 10.3618L8.81675 15.3568L8.81875 15.3588L9.07875 15.7688C9.12817 15.8464 9.19805 15.9089 9.28068 15.9493C9.36332 15.9897 9.45551 16.0066 9.54711 15.998C9.63871 15.9894 9.72617 15.9558 9.79985 15.9007C9.87354 15.8456 9.9306 15.7712 9.96475 15.6858L15.9647 0.685806ZM14.1317 2.57581L6.63775 10.0698L6.42275 9.73181C6.38336 9.66978 6.33078 9.6172 6.26875 9.57781L5.93075 9.36281L13.4247 1.86881L14.6027 1.39781L14.1327 2.57581H14.1317Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="form-inner2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="contactCheck">
                            <label class="form-check-label" for="contactCheck">
                                I agree to the <strong>Privacy Policy</strong> by subscribing.
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="social-list">
                <li><a href="<?=$_ENV['SOCIAL_FACEBOOK']?>"><i class="bx bxl-facebook"></i></a></li>
                <li><a href="<?=$_ENV['SOCIAL_LINKEDIN']?>"><i class="bx bxl-linkedin"></i></a></li>
                <li><a href="<?=$_ENV['SOCIAL_INSTAGRAM']?>"><i class="bx bxl-instagram-alt"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<?php $absolutePages = ['','our-portfolio/social-media-handling-services','our-portfolio/logo-design-services']; ?>
<header class="header-area style-3 <?=in_array(get_route(),$absolutePages) ? 'position-absolute' : ''?>">
    <div class="container-fluid d-flex flex-nowrap align-items-center justify-content-between">
        <div class="company-logo">
            <a href="<?=base_url()?>" class="logo-dark"><img alt="image" class="img-fluid" src="<?=base_url()?>assets/img/header-logo.svg"></a>
            <a href="<?=base_url()?>" class="logo-light"><img alt="image" class="img-fluid" src="<?=base_url()?>assets/img/header-logo-white.svg"></a>
        </div>
        <div class="menu-wrap">
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="<?=base_url()?>" class="mobile-logo-wrap">
                        <img alt="image" class="img-fluid light" src="<?=base_url()?>assets/img/header-logo.svg">
                        <img alt="image" class="img-fluid dark" src="<?=base_url()?>assets/img/header-logo-white.svg">
                    </a>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li class="<?=base_url() == get_url() ? 'active' : ''?>"><a href="<?=base_url()?>" style="padding-right: 10px;">Home</a></li>
                    <li class="<?=base_url('about-us') == get_url() ? 'active' : ''?>"><a href="<?=base_url('about-us')?>" style="padding-right: 10px;">About Us</a></li>
                    <li class="menu-item-has-children position-inherit">
                        <a href="<?=base_url('our-services')?>" class="drop-down">Services
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <div class="mega-menu2">
                            <div class="container">
                                <div class="row align-items-lg-end justify-content-between">
                                    <div class="col-xl-7 col-lg-8">
                                        <div class="title-area">
                                            <h2>Services We Provide</h2>
                                            <div class="icon">
                                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <ul class="menu-row">
                                            <li class="menu-single-item">
                                                <div class="menu-title">
                                                    <h6>
                                                        <svg width="17" height="12" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="6" cy="6" r="5.5"/>
                                                            <circle cx="11" cy="6" r="5.5"/>
                                                        </svg>
                                                        Web Development Services
                                                    </h6>
                                                </div>
                                                <ul>
                                                    <li><a href="<?=base_url()?>responsive-website-design">Responsive Website Design</a></li>
                                                    <li><a href="<?=base_url()?>custom-website-development">Custom Website Development</a></li>
                                                    <li><a href="<?=base_url()?>ecommerce-website-development">E-Commerce Website Development</a></li>
                                                    <li><a href="<?=base_url()?>progressive-web-app-development">Progressive Web App Development</a></li>
                                                    <li><a href="<?=base_url()?>mobile-app-development">Mobile App Development (iOS & Android)</a></li>
                                                    <li><a href="<?=base_url()?>admin-dashboard-development">Admin Dashboard Development</a></li>
                                                    <li><a href="<?=base_url()?>landing-page-design">Landing Page Design for Ads</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-single-item">
                                                <div class="menu-title">
                                                    <h6>
                                                        <svg width="17" height="12" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="6" cy="6" r="5.5"/>
                                                            <circle cx="11" cy="6" r="5.5"/>
                                                        </svg>
                                                        Marketing & Branding Services
                                                    </h6>
                                                </div>
                                                <ul>
                                                    <li><a href="<?=base_url()?>google-ads-ppc-management">Google Ads & PPC Management</a></li>
                                                    <li><a href="<?=base_url()?>social-media-management">Social Media Management Services</a></li>
                                                    <li><a href="<?=base_url()?>facebook-instagram-ads">Facebook & Instagram Ads</a></li>
                                                    <li><a href="<?=base_url()?>professional-logo-design">Professional Logo Design</a></li>
                                                    <li><a href="<?=base_url()?>seo-performance-ranking">SEO Performance & Ranking Services</a></li>
                                                    <li><a href="<?=base_url()?>google-business-profile-setup">Google Business Profile Setup</a></li>
                                                    <li><a href="<?=base_url()?>business-email-setup">Business Email Setup (Domain Email)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="solution-menu-banner">
                                            <div class="banner-content">
                                                <h3>Our Expert Team is Ready to Tackle Your Challenges Head-On.</h3>
                                                <a href="<?=base_url('contact-us')?>" class="primary-btn1">
                                                    <span>Get In Touch
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                    </span>
                                                    <span>Get In Touch
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="banner-img">
                                                <img src="<?=base_url()?>assets/img/home1/solution-menu-banner-img.png" alt="Team collaborating to solve business challenges">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="menu-item-has-children position-inherit">
                        <a href="#" class="drop-down">Resources
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <div class="mega-menu2 two">
                            <div class="container">
                                <div class="row align-items-lg-end justify-content-between">
                                    <div class="col-xl-6 col-lg-7 d-lg-block d-none">
                                        <div class="title-area">
                                            <h2>Innovative Thinking</h2>
                                            <div class="icon">
                                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="menu-blog-card">
                                                    <a href="news-insight-details.html" class="blog-img">
                                                        <img src="<?=base_url()?>assets/img/home1/menu-blog-img1.jpg" alt="">
                                                    </a>
                                                    <div class="blog-content">
                                                        <ul class="blog-meta">
                                                            <li>
                                                                <a href="news-insight-grid.html">
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                                                        <g>
                                                                            <path d="M0.800781 8V0L7.20078 4L0.800781 8Z"/>
                                                                        </g>
                                                                    </svg>
                                                                    IT Strategy
                                                                </a>
                                                            </li>
                                                            <li class="blog-date">
                                                                <a href="news-insight-grid.html">
                                                                    03 Nov, 2024
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <h5><a href="news-insight-details.html">Revamping Brand Identity Success Story.</a></h5>
                                                        <a href="news-insight-details.html" class="read-more-btn">
                                                            Read More
                                                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="menu-blog-card">
                                                    <a href="news-insight-details.html" class="blog-img">
                                                        <img src="<?=base_url()?>assets/img/home1/menu-blog-img2.jpg" alt="">
                                                    </a>
                                                    <div class="blog-content">
                                                        <ul class="blog-meta">
                                                            <li>
                                                                <a href="news-insight-grid.html">
                                                                    <svg width="8" height="8" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                                                        <g>
                                                                            <path d="M0.800781 8V0L7.20078 4L0.800781 8Z"/>
                                                                        </g>
                                                                    </svg>
                                                                    Design Trends
                                                                </a>
                                                            </li>
                                                            <li class="blog-date">
                                                                <a href="news-insight-grid.html">
                                                                    15 Nov, 2024
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <h5><a href="news-insight-details.html">Cloud Infrastructure for Rapid Growth.</a></h5>
                                                        <a href="news-insight-details.html" class="read-more-btn">
                                                            Read More
                                                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="menu-row">
                                            <li class="menu-single-item">
                                                <div class="menu-title">
                                                    <h6>
                                                        <svg width="17" height="12" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="6" cy="6" r="5.5"/>
                                                            <circle cx="11" cy="6" r="5.5"/>
                                                        </svg>
                                                        Innovative Case
                                                    </h6>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="news-insight-grid.html">
                                                            <span>
                                                                <svg width="19" height="14" viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.5 1C1.5 0.723858 1.27614 0.5 1 0.5C0.723858 0.5 0.5 0.723858 0.5 1H1.5ZM19 11L14 8.11325V13.8868L19 11ZM0.5 1V6H1.5V1H0.5ZM6 11.5H14.5V10.5H6V11.5ZM0.5 6C0.5 9.03757 2.96243 11.5 6 11.5V10.5C3.51472 10.5 1.5 8.48528 1.5 6H0.5Z"/>
                                                                </svg>
                                                                News & Insight
                                                            </span>
                                                            <div class="arrow">
                                                                <svg width="7" height="9" viewBox="0 0 7 9" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 7.29015V1.70985C0 0.945021 0.823658 0.463308 1.49026 0.838272L6.45053 3.62842C7.13018 4.01073 7.13018 4.98927 6.45053 5.37158L1.49026 8.16173C0.823657 8.53669 0 8.05498 0 7.29015Z"/>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="case-study.html">
                                                            <span>
                                                                <svg width="19" height="14" viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.5 1C1.5 0.723858 1.27614 0.5 1 0.5C0.723858 0.5 0.5 0.723858 0.5 1H1.5ZM19 11L14 8.11325V13.8868L19 11ZM0.5 1V6H1.5V1H0.5ZM6 11.5H14.5V10.5H6V11.5ZM0.5 6C0.5 9.03757 2.96243 11.5 6 11.5V10.5C3.51472 10.5 1.5 8.48528 1.5 6H0.5Z"/>
                                                                </svg>
                                                                Case Study
                                                            </span>
                                                            <div class="arrow">
                                                                <svg width="7" height="9" viewBox="0 0 7 9" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 7.29015V1.70985C0 0.945021 0.823658 0.463308 1.49026 0.838272L6.45053 3.62842C7.13018 4.01073 7.13018 4.98927 6.45053 5.37158L1.49026 8.16173C0.823657 8.53669 0 8.05498 0 7.29015Z"/>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="19" height="14" viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.5 1C1.5 0.723858 1.27614 0.5 1 0.5C0.723858 0.5 0.5 0.723858 0.5 1H1.5ZM19 11L14 8.11325V13.8868L19 11ZM0.5 1V6H1.5V1H0.5ZM6 11.5H14.5V10.5H6V11.5ZM0.5 6C0.5 9.03757 2.96243 11.5 6 11.5V10.5C3.51472 10.5 1.5 8.48528 1.5 6H0.5Z"/>
                                                                </svg>
                                                                Webinars & Events
                                                            </span>
                                                            <div class="arrow">
                                                                <svg width="7" height="9" viewBox="0 0 7 9" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 7.29015V1.70985C0 0.945021 0.823658 0.463308 1.49026 0.838272L6.45053 3.62842C7.13018 4.01073 7.13018 4.98927 6.45053 5.37158L1.49026 8.16173C0.823657 8.53669 0 8.05498 0 7.29015Z"/>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>
                                                                <svg width="19" height="14" viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.5 1C1.5 0.723858 1.27614 0.5 1 0.5C0.723858 0.5 0.5 0.723858 0.5 1H1.5ZM19 11L14 8.11325V13.8868L19 11ZM0.5 1V6H1.5V1H0.5ZM6 11.5H14.5V10.5H6V11.5ZM0.5 6C0.5 9.03757 2.96243 11.5 6 11.5V10.5C3.51472 10.5 1.5 8.48528 1.5 6H0.5Z"/>
                                                                </svg>
                                                                Documentation
                                                            </span>
                                                            <div class="arrow">
                                                                <svg width="7" height="9" viewBox="0 0 7 9" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 7.29015V1.70985C0 0.945021 0.823658 0.463308 1.49026 0.838272L6.45053 3.62842C7.13018 4.01073 7.13018 4.98927 6.45053 5.37158L1.49026 8.16173C0.823657 8.53669 0 8.05498 0 7.29015Z"/>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <a href="#" class="conference-btn">
                                            Conference Summit - 2024
                                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li class="menu-item-has-children position-inherit">
                        <a href="<?=base_url()?>" class="drop-down">Portfolio</a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu d-lg-none">
                            <li class=""><a href="<?=base_url('our-portfolio/web-development-services')?>" style="padding-right: 10px;">Website Designs</a></li>
                            <li class=""><a href="<?=base_url('our-portfolio/social-media-handling-services')?>" style="padding-right: 10px;">Social Media Creatives</a></li>
                            <!-- <li class=""><a href="<?=base_url('our-portfolio/logo-design-services')?>" style="padding-right: 10px;">Logo Designs</a></li> -->
                        </ul>
                        <div class="mega-menu">
                            <div class="container">
                                <div class="row gy-5">
                                    <?php foreach($mobileSites as $site): ?>
                                    <div class="col-lg-3">
                                        <div class="single-menu-item">
                                            <div class="home-img">
                                                <img height="300" src="<?=base_url("public/mobile-sites/".$site)?>" alt="">
                                                <div class="home-version">
                                                    <ul>
                                                        <li>
                                                            <a href="<?=base_url('our-portfolio/web-development-services')?>" class="light">
                                                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <path
                                                                            d="M7 2.13828C7.22652 2.13828 7.41016 1.95464 7.41016 1.72812V0.410156C7.41016 0.183641 7.22652 0 7 0C6.77348 0 6.58984 0.183641 6.58984 0.410156V1.72812C6.58984 1.95464 6.77348 2.13828 7 2.13828ZM2.98225 3.56229C3.14243 3.72247 3.40211 3.72247 3.56229 3.56229C3.72247 3.40211 3.72247 3.14243 3.56229 2.98225L2.63036 2.05029C2.47018 1.89011 2.2105 1.89011 2.05032 2.05029C1.89014 2.21047 1.89014 2.47015 2.05032 2.63033L2.98225 3.56229ZM2.98208 10.4379L2.05015 11.3698C1.88997 11.53 1.88997 11.7897 2.05015 11.9498C2.21033 12.11 2.47002 12.11 2.6302 11.9498L3.56215 11.0179C3.72233 10.8577 3.72233 10.598 3.56215 10.4378C3.40197 10.2777 3.14226 10.2777 2.98208 10.4379ZM7 11.8617C6.77348 11.8617 6.58984 12.0454 6.58984 12.2719V13.5898C6.58984 13.8164 6.77348 14 7 14C7.22652 14 7.41016 13.8164 7.41016 13.5898V12.2719C7.41016 12.0454 7.22652 11.8617 7 11.8617ZM2.13828 7C2.13828 6.77348 1.95464 6.58984 1.72812 6.58984H0.410156C0.183641 6.58984 0 6.77348 0 7C0 7.22652 0.183641 7.41016 0.410156 7.41016H1.72812C1.95464 7.41016 2.13828 7.22652 2.13828 7ZM7 3.51457C5.07814 3.51457 3.51457 5.07814 3.51457 7C3.51457 8.92186 5.07814 10.4854 7 10.4854C8.92186 10.4854 10.4854 8.92186 10.4854 7C10.4854 5.07814 8.92186 3.51457 7 3.51457ZM11.0179 3.56213L11.9499 2.63017C12.1101 2.46999 12.1101 2.2103 11.9499 2.05012C11.7897 1.88995 11.53 1.88995 11.3698 2.05012L10.4379 2.98208C10.2777 3.14226 10.2777 3.40195 10.4379 3.56213C10.5981 3.7223 10.8577 3.7223 11.0179 3.56213ZM11.0178 10.4377C10.8576 10.2775 10.5979 10.2775 10.4377 10.4377C10.2775 10.5979 10.2775 10.8576 10.4377 11.0178L11.3697 11.9497C11.5298 12.1099 11.7895 12.1099 11.9497 11.9497C12.1099 11.7895 12.1099 11.5298 11.9497 11.3697L11.0178 10.4377ZM13.5898 6.58984H12.2719C12.0454 6.58984 11.8617 6.77348 11.8617 7C11.8617 7.22652 12.0454 7.41016 12.2719 7.41016H13.5898C13.8164 7.41016 14 7.22652 14 7C14 6.77348 13.8164 6.58984 13.5898 6.58984Z"/>
                                                                    </g>
                                                                </svg>
                                                                View
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <div class="col-lg-3">
                                        <div class="single-menu-item">
                                            <a href="<?=base_url('our-portfolio/web-development-services')?>" class="home-img">
                                                <img src="<?=base_url()?>assets/img/home3/explore-more.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn-and-contact-area d-lg-none d-block">
                    <a href="<?=base_url('contact-us')?>" class="primary-btn3 btn-hover">
                        Let’s Talk
                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="nav-right">
                <div class="right-sidebar-button">
                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M4.61426 0.138589C3.82642 -0.0461965 3.00651 -0.0461965 2.21867 0.138589C1.7127 0.257268 1.2499 0.514858 0.88241 0.882348C0.514919 1.24984 0.257329 1.71263 0.13865 2.21861C-0.0461354 3.00645 -0.0461354 3.82636 0.13865 4.6142C0.257329 5.12017 0.514919 5.58297 0.88241 5.95046C1.2499 6.31795 1.7127 6.57554 2.21867 6.69422C3.00651 6.87904 3.82642 6.87904 4.61426 6.69422C5.12024 6.57554 5.58303 6.31795 5.95052 5.95046C6.31801 5.58297 6.5756 5.12017 6.69428 4.6142C6.8791 3.82636 6.8791 3.00645 6.69428 2.21861C6.5756 1.71263 6.31801 1.24984 5.95052 0.882348C5.58303 0.514858 5.12024 0.257268 4.61426 0.138589ZM4.61426 9.3058C3.82642 9.12099 3.00651 9.12099 2.21867 9.3058C1.7127 9.42448 1.2499 9.68207 0.88241 10.0496C0.514919 10.4171 0.257329 10.8798 0.13865 11.3858C-0.0461354 12.1737 -0.0461354 12.9936 0.13865 13.7814C0.257329 14.2874 0.514919 14.7502 0.88241 15.1177C1.2499 15.4852 1.7127 15.7428 2.21867 15.8614C3.00651 16.0462 3.82642 16.0462 4.61426 15.8614C5.12024 15.7428 5.58303 15.4852 5.95052 15.1177C6.31801 14.7502 6.5756 14.2874 6.69428 13.7814C6.8791 12.9936 6.8791 12.1737 6.69428 11.3858C6.5756 10.8798 6.31801 10.4171 5.95052 10.0496C5.58303 9.68207 5.12024 9.42448 4.61426 9.3058ZM13.7815 0.138589C12.9936 -0.0461965 12.1737 -0.0461965 11.3859 0.138589C10.8799 0.257268 10.4171 0.514858 10.0496 0.882348C9.68213 1.24984 9.42454 1.71263 9.30587 2.21861C9.12105 3.00645 9.12105 3.82636 9.30587 4.6142C9.42454 5.12017 9.68213 5.58297 10.0496 5.95046C10.4171 6.31795 10.8799 6.57554 11.3859 6.69422C12.1737 6.87904 12.9936 6.87904 13.7815 6.69422C14.2875 6.57554 14.7502 6.31795 15.1177 5.95046C15.4852 5.58297 15.7428 5.12017 15.8615 4.6142C16.0462 3.82635 16.0462 3.00645 15.8615 2.21861C15.7428 1.71263 15.4852 1.24984 15.1177 0.882348C14.7502 0.514858 14.2875 0.257268 13.7815 0.138589ZM13.7815 9.3058C12.9936 9.12099 12.1737 9.12099 11.3859 9.3058C10.8799 9.42448 10.4171 9.68207 10.0496 10.0496C9.68213 10.4171 9.42454 10.8798 9.30587 11.3858C9.12105 12.1737 9.12105 12.9936 9.30587 13.7814C9.42454 14.2874 9.68213 14.7502 10.0496 15.1177C10.4171 15.4852 10.8799 15.7428 11.3859 15.8614C12.1737 16.0462 12.9936 16.0462 13.7815 15.8614C14.2875 15.7428 14.7502 15.4852 15.1177 15.1177C15.4852 14.7502 15.7428 14.2874 15.8615 13.7814C16.0462 12.9936 16.0462 12.1737 15.8615 11.3858C15.7428 10.8798 15.4852 10.4171 15.1177 10.0496C14.7502 9.68207 14.2875 9.42448 13.7815 9.3058Z"/>
                        </g>
                    </svg>
                </div>
                <a href="<?=base_url('contact-us')?>" class="primary-btn3 btn-hover d-lg-flex d-none">
                    Let’s Talk
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span></span>
                </a>
                <div class="sidebar-button mobile-menu-btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                        <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                        <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>