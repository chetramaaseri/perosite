<?php
$graphics = scandir('public/graphics');
unset($graphics[0]);
unset($graphics[1]);
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'layout/head.php' ?>
</head>
<body class="tt-magic-cursor digital-agency">
    <?php require_once 'layout/navbar.php' ?>

    <div class="portfolio-carousel-slider-page">
        <div class="container-fluid">
            <div class="portfolio-carousel-slider-wrap">
                <div class="swiper portfolio-carousel-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($graphics as $index => $item): ?>
                        <div class="swiper-slide">
                            <div class="portfolio-carousel-slider-item">
                                <div class="row gy-md-5 gy-4 align-items-center justify-content-between">
                                    <div class="col-xxl-5 col-lg-6">
                                        <div class="portfolio-slider-content">
                                            <div class="title-area">
                                                <ul>
                                                    <li><a href="<?=base_url('our-portfolio')?>">Branding & Graphics</a></li>
                                                    <li><a href="<?=base_url('our-portfolio')?>"><?=date('Y')?></a></li>
                                                </ul>
                                                <h1><a href="<?=base_url('our-portfolio')?>">Graphic Creatives</a></h1>
                                            </div>
                                            <div class="social-area d-lg-block d-none">
                                                <a href="<?=base_url('our-portfolio')?>">Visit More Portfolio
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <ul class="social-list">
                                                    <li><a href="<?=$_ENV['SOCIAL_FACEBOOK']?>"><i class="bx bxl-facebook"></i></a></li>
                                                    <li><a href="<?=$_ENV['SOCIAL_LINKEDIN']?>"><i class="bx bxl-linkedin"></i></a></li>
                                                    <li><a href="<?=$_ENV['SOCIAL_INSTAGRAM']?>"><i class="bx bxl-instagram-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="portfolio-slider-img">
                                            <img src="<?=base_url('public/graphics/'.$item)?>" alt="">
                                            <span></span>
                                            <strong><?=$index+1?></strong>
                                        </div>
                                        <div class="social-area d-lg-none d-block">
                                            <a href="<?=base_url('our-portfolio')?>">Visit More Portfolio
                                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                            <ul class="social-list">
                                                <li><a href="<?=$_ENV['SOCIAL_FACEBOOK']?>"><i class="bx bxl-facebook"></i></a></li>
                                                <li><a href="<?=$_ENV['SOCIAL_LINKEDIN']?>"><i class="bx bxl-linkedin"></i></a></li>
                                                <li><a href="<?=$_ENV['SOCIAL_INSTAGRAM']?>"><i class="bx bxl-instagram-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="slider-btn-grp three">
                    <div class="slider-btn portfolio-carousel-slider-prev">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1 11C3.5 10 6 5 7 2C8 5 9.5 9.5 13 11" stroke-width="1.5" stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="swiper-pagination1"></div>
                    <div class="slider-btn portfolio-carousel-slider-next">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1 3C3.5 4 6 9 7 12C8 9 9.5 4.5 13 3" stroke-width="1.5" stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
</body>
</html>