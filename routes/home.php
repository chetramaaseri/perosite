<!doctype html>
<html lang="en">
<head>
    <?php require_once 'layout/head.php' ?>
</head>
<body class="tt-magic-cursor digital-agency">
    <?php require_once 'layout/navbar.php' ?>
     
    <div class="home3-banner-section">
        <div class="container-fluid">
            <div class="row gy-5 flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="home3-video-wrapper">
                        <div class="video-area">
                            <video autoplay loop muted playsinline src="assets/home.mp4"></video>
                            <img src="<?=base_url()?>assets/img/home3/banner-video-shape.png" alt="Digital Agency Services Overview" class="banner-vector">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-content-wrap">
                        <div class="banner-content">
                            <span>#Best Web Designing And Development Company in Ludhiana, Punjab</span>
                            <h1>Pioneering <span>Pro</span> Digital Solutions.</h1>
                            <p>We provide top-tier web development, marketing, and branding services to clients in Ludhiana, Punjab, and beyond.</p>
                            <div class="btn-and-counter-area">
                                <a href="<?=base_url('contact-us')?>" class="primary-btn3 two btn-hover">
                                    Start The Journey
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="banner-vector">
                            <svg width="697" height="477" viewBox="0 0 697 477" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="687" cy="10" r="10" fill-opacity="0.933333" />
                                <path d="M677 10H21C9.95429 10 1 18.9543 1 30V477"/>
                                <defs>
                                    <linearGradient id="paint0_linear_1535_150995" x1="336" y1="9.99999" x2="478.478" y2="449.744" gradientUnits="userSpaceOnUse">
                                        <stop class="gradient-start" offset="0"/>
                                        <stop class="gradient-end" offset="1"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Innovative Solutions, <br>Powerful Impact.</span>
                        </div>
                        <ul class="social-list">
                            <li><a href="<?=$_ENV['SOCIAL_FACEBOOK']?>"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="<?=$_ENV['SOCIAL_LINKEDIN']?>"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="<?=$_ENV['SOCIAL_INSTAGRAM']?>"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <svg class="vector" width="50" height="48" viewBox="0 0 50 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25 48C38.8071 48 50 36.8071 50 23H0C0 36.8071 11.1929 48 25 48Z"/>
            <path d="M26 0C35.9411 0 44 8.05888 44 18H26V0Z"/>
        </svg>
    </div>

    <div class="partner-area three four mb-130">
        <div class="container">
            <div class="partner-title-area wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                <h6>Our Globally <span>3K+</span> Clients.</h6>
                <h6>Our Happy Cleints <span>90%+</span></h6>
            </div>
            <div class="partner-wrap">
                <?php 
                $logos = scandir('public/clients');
                unset($logos[0]);
                unset($logos[1]);
                ?>
                <div class="marquee light">
                    <div class="marquee__group">
                        <?php foreach ($logos as $logo): ?>
                            <img style="max-height:60px" src="<?=base_url('public/clients/'.$logo)?>" alt="">
                        <?php endforeach ?>
                    </div>
                    <div aria-hidden="true" class="marquee__group">
                        <?php foreach ($logos as $logo): ?>
                            <img style="max-height:60px" src="<?=base_url('public/clients/'.$logo)?>" alt="">
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="marquee dark">
                    <div class="marquee__group">
                        <?php foreach ($logos as $logo): ?>
                            <img style="max-height:60px" src="<?=base_url('public/clients/'.$logo)?>" alt="">
                        <?php endforeach ?>
                    </div>
                    <div aria-hidden="true" class="marquee__group">
                        <?php foreach ($logos as $logo): ?>
                            <img style="max-height:60px" src="<?=base_url('public/clients/'.$logo)?>" alt="">
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home3-about-section mb-130" id="about-section">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between mb-60">
                <div class="col-lg-7 wow animate fadeInLeft" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="section-title three">
                        <span>About Us</span>
                        <h2>Empowering Brands in the Digital Age.</h2>
                        <p>We offer a comprehensive range of solutions to support Enterprises, Institutions, & individuals in excelling in the online world.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow animate fadeInRight" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="achievment-area">
                        <div class="icon">
                            <svg width="106" height="78" viewBox="0 0 106 78" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.333333 28C0.333333 29.4728 1.52724 30.6667 3 30.6667C4.47276 30.6667 5.66667 29.4728 5.66667 28C5.66667 26.5272 4.47276 25.3333 3 25.3333C1.52724 25.3333 0.333333 26.5272 0.333333 28ZM102.99 78L105.699 72.9015L99.9292 73.1047L102.99 78ZM2.55625 28.2304C9.19406 41.0143 18.6039 47.0915 29.0259 49.7921C39.4124 52.4835 50.7986 51.8181 61.3856 51.1694C66.6923 50.8443 71.7956 50.5229 76.5065 50.6173C81.2178 50.7118 85.5015 51.2223 89.1697 52.5433C92.8276 53.8605 95.8727 55.983 98.1246 59.3148C100.381 62.6539 101.867 67.245 102.333 73.5385L103.33 73.4646C102.856 67.0568 101.336 62.281 98.9531 58.7548C96.5649 55.2213 93.3341 52.98 89.5085 51.6024C85.6933 50.2285 81.2859 49.713 76.5266 49.6175C71.7668 49.5221 66.6198 49.8469 61.3245 50.1713C50.7076 50.8218 39.4834 51.4689 29.2768 48.8241C19.1058 46.1886 9.94009 40.2811 3.44375 27.7696L2.55625 28.2304Z"/>
                                <g>
                                    <path
                                        d="M48.7809 2.75954C48.7102 2.71124 48.6318 2.67514 48.5492 2.65272C45.4317 1.15692 42.033 0.337841 38.5765 0.24932C35.1199 0.160798 31.6838 0.804835 28.4939 2.13911C25.304 3.47338 22.4325 5.46767 20.0682 7.99092C17.7039 10.5142 15.9002 13.5093 14.7759 16.7793C14.7362 16.8511 14.7083 16.9287 14.6932 17.0093L14.7006 17.027C13.2073 21.5004 13.0337 26.3093 14.2007 30.8788C15.3676 35.4482 17.8257 39.5849 21.2811 42.7942C24.7365 46.0036 29.043 48.1498 33.6857 48.9763C38.3284 49.8028 43.1108 49.2746 47.4613 47.4549C51.8118 45.6352 55.5463 42.6009 58.2182 38.7149C60.8901 34.8288 62.3865 30.2554 62.5284 25.5414C62.6703 20.8274 61.4517 16.1723 59.0183 12.1326C56.585 8.09282 53.0398 4.83941 48.8066 2.76127L48.7809 2.75954ZM59.9751 31.516C57.9745 31.2499 55.9506 31.2053 53.9401 31.383C53.6096 27.5012 52.6987 23.6909 51.238 20.0793L59.4875 16.6287C61.3051 21.3991 61.4772 26.6401 59.9766 31.5196L59.9751 31.516ZM17.0541 34.3776L25.3037 30.927C26.849 34.5046 28.9223 37.8301 31.4544 40.7925C29.9161 42.0991 28.5266 43.5715 27.311 45.1828C22.7837 42.8247 19.1737 39.0217 17.0541 34.3776ZM16.0039 17.9956C17.993 18.2565 20.0047 18.2991 22.0032 18.1228C22.3266 22.0338 23.2398 25.8734 24.7116 29.5112L16.4621 32.9618C14.6374 28.1653 14.476 22.8949 16.0039 17.9956ZM34.6329 14.8153C37.7234 13.4709 40.6336 11.7451 43.2957 9.67819C45.7435 12.5551 47.7485 15.7811 49.2444 19.2497L38.3866 23.7913L34.6329 14.8153ZM34.0408 13.3996L29.8194 3.30517C33.5753 2.20409 38.1407 4.31161 42.2422 8.55108C39.7172 10.497 36.9628 12.1254 34.0408 13.3996ZM32.6252 13.9917C29.6662 15.1774 26.5727 15.9951 23.4144 16.4263C23.2766 10.5289 24.9824 5.79829 28.4038 3.8973L32.6252 13.9917ZM33.2173 15.4075L36.971 24.3834L26.1273 28.9191C24.7043 25.4208 23.811 21.7298 23.4769 17.9679C26.8177 17.5239 30.0899 16.6638 33.2173 15.4075ZM26.7193 30.3349L37.563 25.7992L41.2842 34.6973C38.1943 36.044 35.2851 37.7722 32.6243 39.8415C30.1981 36.9811 28.2083 33.7776 26.7193 30.3349ZM41.8762 36.113L46.1302 46.2853C42.3587 47.3888 37.7531 45.2648 33.6495 40.9805C36.1812 39.026 38.9443 37.3911 41.8762 36.113ZM43.2918 35.5209C46.2606 34.331 49.3647 33.5117 52.534 33.0815C52.7021 39.012 50.9799 43.7827 47.5458 45.6932L43.2918 35.5209ZM42.6998 34.1052L38.9786 25.2071L49.8223 20.6714C51.2266 24.1481 52.1093 27.8133 52.4416 31.5482C49.1004 31.9908 45.8277 32.8498 42.6998 34.1052ZM50.6459 18.6635C49.0898 15.0609 46.9978 11.7144 44.4408 8.7376C45.9698 7.43857 47.3521 5.97627 48.5633 4.37677C53.1238 6.72938 56.7623 10.5454 58.8955 15.2129L50.6459 18.6635ZM47.1557 3.70549C46.0424 5.12988 44.7856 6.43595 43.405 7.60308C40.6959 4.79396 37.7531 2.84776 34.897 1.98394C39.0637 1.42745 43.3033 2.02283 47.1557 3.70549ZM23.8975 6.58474C22.5023 9.21432 21.8277 12.682 21.9264 16.5871C20.1261 16.7504 18.3138 16.7281 16.518 16.5205C18.0247 12.5969 20.5768 9.16079 23.8975 6.58474ZM28.7236 45.8562C29.8386 44.4202 31.0997 43.1039 32.4866 41.9285C35.2141 44.7715 38.1788 46.7501 41.0491 47.608C36.8577 48.1675 32.5932 47.5613 28.7236 45.8562ZM52.0627 43.0013C53.446 40.3434 54.141 36.8548 54.0325 32.9163C55.8432 32.7543 57.6658 32.7807 59.471 32.9952C57.9653 36.9507 55.3982 40.4145 52.0521 43.0057L52.0627 43.0013Z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <h6>Fastest Service</h6>
                            <p>Recognized for our<span>“Quick and Efficient Solutions”</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-xl-end mb-50">
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="about-feature-card magnetic-item">
                        <div class="card-content">
                            <div class="number">
                                <h2>04</h2>
                            </div>
                            <p>Years of Expertise</p>
                        </div>
                        <svg class="arrow" width="33" height="33" viewBox="0 0 33 33" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 32L31 2M31 2C24.3333 3.25 9.75 5.75 1 2M31 2C29.75 8.25 27.25 22 31 32" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="40ms" data-wow-duration="500ms">
                    <div class="about-feature-card two magnetic-item">
                        <div class="card-content">
                            <div class="number">
                                <h2>99</h2>
                                <span>%</span>
                            </div>
                            <p>Customer Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="500ms">
                    <div class="about-feature-card three magnetic-item">
                        <div class="card-content">
                            <h3>Keep Reading</h3>
                            <a href="<?=base_url('about-us')?>">
                                About Pero
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center wow animate fadeInUp" data-wow-delay="20ms" data-wow-duration="500ms">
                <div class="col-xl-8 col-lg-10">
                    <div class="contact-btn-area two">
                        <h6>Dedicated to Exceptional Client Service.</h6>
                        <a href="<?=base_url('contact-us')?>" class="primary-btn3 btn-hover">
                            Start The Journey
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <svg class="scroll-svg" width="1322" height="654" viewBox="0 0 1322 654" xmlns="http://www.w3.org/2000/svg">
                <path id="route-1"
                    d="M897 1H1301C1312.05 1 1321 9.95431 1321 21V142C1321 153.046 1312.05 162 1301 162H954C942.954 162 934 170.954 934 182V403C934 414.046 925.046 423 914 423H21C9.95429 423 1 431.954 1 443V633C1 644.046 9.95431 653 21 653H283" stroke-width="2" />
            </svg>
        </div>
    </div>

    <div class="home3-portfolio-section">
        <div class="container">
            <div class="row mb-60 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                <div class="col-xl-9 col-lg-10">
                    <div class="title-area">
                        <div class="section-title three white">
                            <h2>Latest Work</h2>
                            <p>We have completed more than about <span>Topnotch 110+ Projects</span> in last year.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 justify-content-between mb-70">
                <div class="col-lg-6 col-md-6 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="portfolio-card magnetic-item">
                        <div class="portfolio-img-wrap">
                            <div class="portfolio-img">
                                <img <?=detectDeviceType() == 1 ? 'style="object-position: -40px;"' : 'style="object-position: -15px;"'?> src="<?=base_url('public/web-sites/financial-website-development.webp')?>" alt="">
                            </div>
                            <div class="details-btn-wrap">
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                                <a href="<?=base_url('our-portfolio')?>" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow animate fadeInDown" data-wow-delay="40ms" data-wow-duration="500ms">
                    <div class="portfolio-card magnetic-item">
                        <div class="portfolio-img-wrap">
                            <div class="portfolio-img">
                                <img <?=detectDeviceType() == 1 ? 'style="object-position: -70px;"' : 'style="object-position: -30px;"'?> src="<?=base_url('public/web-sites/travel-website-development.webp')?>" alt="">
                            </div>
                            <div class="details-btn-wrap">
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                                <a href="<?=base_url('our-portfolio')?>" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="500ms">
                    <div class="portfolio-card magnetic-item">
                        <div class="portfolio-img-wrap">
                            <div class="portfolio-img">
                                <img <?=detectDeviceType() == 1 ? 'style="object-position: -80px;"' : 'style="object-position: -35px;"'?> src="<?=base_url('public/web-sites/donation-website-development.webp')?>" alt="">
                            </div>
                            <div class="details-btn-wrap">
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                                <a href="<?=base_url('our-portfolio')?>" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow animate fadeInDown" data-wow-delay="80ms" data-wow-duration="500ms">
                    <div class="portfolio-card magnetic-item">
                        <div class="portfolio-img-wrap">
                            <div class="portfolio-img">
                                <img <?=detectDeviceType() == 1 ? '' : 'style="object-position: -75px;"'?> src="<?=base_url('public/web-sites/hotel-website-development.webp')?>" alt="">
                            </div>
                            <div class="details-btn-wrap">
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                                <a href="<?=base_url('our-portfolio')?>" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?=base_url('our-portfolio')?>" class="primary-btn3 btn-hover">
                        View All Work
                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home3-service-section pt-130 mb-130">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-60">
                <div class="col-lg-5 col-md-8 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="section-title three">
                        <span>What We Do</span>
                        <h2>Services Offered.</h2>
                        <p>We offer a range of digital solutions tailored for <span>Businesses & Organizations</span> to grow online and streamline operations.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-md-block d-none">
                    <div class="shape">
                        <svg width="95" height="85" viewBox="0 0 95 85" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M16.0501 69.9674C35.5969 88.559 66.5141 87.7847 85.1057 68.238L14.3206 0.911865C-4.27094 20.4586 -3.49663 51.3758 16.0501 69.9674Z"/>
                                <path
                                    d="M79.225 4.61569C92.1355 11.0232 97.4072 26.6836 90.9996 39.5941L44.2466 16.3903C50.6542 3.47983 66.3145 -1.79185 79.225 4.61569Z"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row gy-md-5 gy-4 mb-70">
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="<?=base_url('responsive-website-design')?>">Web <br> Development</a></h4>
                        <ul>
                            <li>+ Business Websites</li>
                            <li>+ Portfolio Websites</li>
                            <li>+ Custom UI/UX</li>
                        </ul>
                        <a href="<?=base_url('responsive-website-design')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="40ms" data-wow-duration="500ms">
                    <div class="service-card3 two magnetic-item">
                        <h4><a href="<?=base_url('mobile-app-development')?>">Mobile App <br> Development</a></h4>
                        <ul>
                            <li>+ Android & Ios App</li>
                            <li>+ React Native & Expo</li>
                            <li>+ UI First Approach</li>
                        </ul>
                        <a href="<?=base_url('mobile-app-development')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="<?=base_url('ecommerce-website-development')?>">E-Commerce <br>Development</a></h4>
                        <ul>
                            <li>+ Online Store Setup</li>
                            <li>+ Payment Integration</li>
                            <li>+ Inventory Management</li>
                        </ul>
                        <a href="<?=base_url('ecommerce-website-development')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="80ms" data-wow-duration="500ms">
                    <div class="service-card3 three magnetic-item">
                        <h4><a href="<?=base_url('custom-website-development')?>">Custom Software<br>Development</a></h4>
                        <ul>
                            <li>+ Business Tools</li>
                            <li>+ ERP Systems</li>
                            <li>+ Admin Panels</li>
                        </ul>
                        <a href="<?=base_url('custom-website-development')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="500ms">
                    <div class="service-card3 magnetic-item">
                        <h4><a href="<?=base_url('seo-optimization')?>">SEO <br> Optimization.</a></h4>
                        <ul>
                            <li>+ On-Page SEO</li>
                            <li>+ Off-Page SEO</li>
                            <li>+ Technical SEO</li>
                        </ul>
                        <a href="<?=base_url('seo-optimization')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="40ms" data-wow-duration="500ms">
                    <div class="service-card3 four magnetic-item">
                        <h4><a href="<?=base_url('social-media-handling')?>">Social Media<br> Handling</a></h4>
                        <ul>
                            <li>+ Account Setup</li>
                            <li>+ Content Creation (reels, posts & stories)</li>
                            <li>+ Engagement Management</li>
                        </ul>
                        <a href="<?=base_url('social-media-handling')?>" class="primary-btn3 three btn-hover">
                            View Details
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <svg class="shape" width="68" height="250" viewBox="0 0 68 250" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M68 0H60V250H68V0ZM48 173H40V250H48V173ZM20 73H28V250H20V73ZM8 134H0V250H8V134Z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center wow animate fadeInUp" data-wow-delay="20ms" data-wow-duration="500ms">
                <div class="col-xl-8 col-lg-10">
                    <div class="contact-btn-area two">
                        <h6>To Make Sure to Best Service Provide Our Clients.</h6>
                        <a href="<?=base_url('contact-us')?>" class="primary-btn3 two btn-hover">
                            Start The Journey
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <svg class="section-vector" width="300" height="372" viewBox="0 0 300 372" xmlns="http://www.w3.org/2000/svg">
            <g>
                <circle cx="320" cy="52" r="270" transform="rotate(180 320 52)" stroke-width="100" />
            </g>
        </svg>
    </div>

    <div class="home3-process-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="process-wrapper">
                        <div class="section-title three white mb-60 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                            <span>Our Process</span>
                            <h2>How We Work.</h2>
                        </div>
                        <div class="process-card-area">
                            <div class="row gy-md-5 gy-4 justify-content-between">
                                <div class="col-xl-5 col-md-6 wow animate fadeInLeft" data-wow-delay="20ms" data-wow-duration="500ms">
                                    <div class="process-card2">
                                        <div class="step-no">
                                            <span>Step</span>
                                            <strong>01</strong>
                                        </div>
                                        <h4>Project <br> Discussion</h4>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6 wow animate fadeInRight" data-wow-delay="40ms" data-wow-duration="500ms">
                                    <div class="process-card2 two">
                                        <h4>Planning & <br> Design</h4>
                                        <div class="step-no">
                                            <span>Step</span>
                                            <strong>02</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6 wow animate fadeInUp" data-wow-delay="20ms" data-wow-duration="500ms">
                                    <div class="process-card2 three">
                                        <h4>Development & <br> Delivery</h4>
                                        <div class="step-no">
                                            <span>Step</span>
                                            <strong>03</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <svg class="vector" width="204" height="650" viewBox="0 0 204 650" xmlns="http://www.w3.org/2000/svg">
                                <path id="theMotionPath11"
                                    d="M0 1H79C90.0457 1 99 9.9543 99 21V280C99 291.046 107.954 300 119 300H183C194.046 300 203 308.954 203 320V629C203 640.046 194.046 649 183 649H110"/>
                                <circle cx="0" cy="0" r="3">
                                    <animateMotion dur="4s" begin="0s" repeatCount="indefinite" rotate="auto">
                                        <mpath href="#theMotionPath11"></mpath>
                                    </animateMotion>
                                </circle>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="founder-area">
                        <svg class="quote" width="136" height="152" viewBox="0 0 136 152" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M99.6484 20.2667C78.5409 20.2667 63.3017 37.5566 63.3017 63.1602C63.4339 100.356 91.6191 126.655 132.281 131.703C136.048 132.175 137.502 126.982 134.032 125.455C118.436 118.57 110.552 109.837 109.535 101.195C108.775 94.7369 112.31 89.0785 116.758 88.0164C128.276 85.2691 135.995 71.0347 135.995 56.3282C135.995 46.7641 132.166 37.5917 125.349 30.8289C118.533 24.066 109.288 20.2667 99.6484 20.2667ZM20.3466 20.2667C-0.760849 20.2667 -16 37.5566 -16 63.1602C-15.8678 100.356 12.3173 126.655 52.9793 131.703C56.7461 132.175 58.2 126.982 54.7305 125.455C39.1345 118.57 31.2506 109.837 30.2329 101.195C29.4729 94.7369 33.0085 89.0785 37.456 88.0164C48.9746 85.2691 56.6933 71.0347 56.6933 56.3282C56.6933 46.7641 52.8639 37.5917 46.0476 30.8289C39.2313 24.066 29.9864 20.2667 20.3466 20.2667Z"/>
                            </g>
                        </svg>
                        <div class="founder-content">
                            <svg width="200" height="6" viewBox="0 0 200 6" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM200 3L195 0.113249V5.88675L200 3ZM4.5 3.5H195.5V2.5H4.5V3.5Z"/>
                                </g>
                            </svg>
                            <p>We specialize in delivering digital solutions that empower businesses to grow, connect with their audience, and thrive in a competitive market.</p>
                            <div class="founder-name-and-desig">
                                <!-- <h5>Er. Chet Ram & Mr. Shubham</h5> -->
                                <span>Founder, Pero Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <?php require_once 'layout/testimonials.php' ?>

    <?php require_once 'layout/latest_blogs.php' ?>

    <?php require_once 'layout/cta_text.php' ?>
     
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
</body>
</html>