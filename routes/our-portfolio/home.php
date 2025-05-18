<?php
$webSites = [];
$graphics = [];
$links = [];
$web_sites = scandir('public/web-sites');
unset($web_sites[0]);
unset($web_sites[1]);
foreach($web_sites as $item) {
    $links[] = [
        'type' => 'website',
        'link' => base_url('public/web-sites/'.$item),
        'portfolio' => base_url('our-portfolio/web-development-services'),
    ];
    $webSites[] = [
        'type' => 'website',
        'link' => base_url('public/web-sites/'.$item),
        'portfolio' => base_url('our-portfolio/web-development-services'),
    ];
}
$graphics_items = scandir('public/graphics');
unset($graphics_items[0]);
unset($graphics_items[1]);
foreach($graphics_items as $item) {
    $links[] = [
        'type' => 'graphics',
        'link' => base_url('public/graphics/'.$item),
        'portfolio' => base_url('our-portfolio/social-media-handling-services'),
    ];
    $graphics[] = [
        'type' => 'graphics',
        'link' => base_url('public/graphics/'.$item),
        'portfolio' => base_url('our-portfolio/social-media-handling-services'),
    ];
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'layout/head.php' ?>
</head>
<body class="tt-magic-cursor digital-agency">
    <?php require_once 'layout/navbar.php' ?>
    <div class="breadcrumb-section mb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h1>Our Portfolio</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="<?=base_url()?>">Home</a></li>
                            <li>
                                <svg width="25" height="6" viewBox="0 0 25 6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM20 3.5L25 5.88675V0.113249L20 2.5V3.5ZM4.5 3.5H20.5V2.5H4.5V3.5Z"/>
                                </svg>
                                Our Portfolio
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-page mb-130">
        <div class="container">
            <div class="row justify-content-center mb-70 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                <div class="col-xl-8 col-lg-10 d-flex justify-content-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-graphics-tab" data-bs-toggle="pill" data-bs-target="#pills-graphics" type="button" role="tab" aria-controls="pills-graphics" aria-selected="false">Graphics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-development-tab" data-bs-toggle="pill" data-bs-target="#pills-development" type="button" role="tab" aria-controls="pills-development" aria-selected="false">Website</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row gy-5 mb-70">
                        <?php $set = array_rand([1,2,3])+1; $count=0; foreach($links as $item): ?>
                            <?php if($set == 1 && $count == 0): ?>
                                <div class="col-lg-5 col-md-5 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 1 && $count == 1): ?>
                                <div class="col-lg-7 col-md-7">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 2): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 0): ?>
                                <div class="col-lg-7 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 1): ?>
                                <div class="col-lg-5">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php $count++; if($set == 1 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==2 && $count == 3){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==3 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-graphics" role="tabpanel" aria-labelledby="pills-graphics-tab">
                    <div class="row gy-5 mb-70">
                        <?php $set = array_rand([1,2,3])+1; $count=0; foreach($graphics as $item): ?>
                            <?php if($set == 1 && $count == 0): ?>
                                <div class="col-lg-5 col-md-5 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 1 && $count == 1): ?>
                                <div class="col-lg-7 col-md-7">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 2): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 0): ?>
                                <div class="col-lg-7 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 1): ?>
                                <div class="col-lg-5">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php $count++; if($set == 1 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==2 && $count == 3){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==3 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-development" role="tabpanel" aria-labelledby="pills-development-tab">
                    <div class="row gy-5 mb-70">
                        <?php $set = array_rand([1,2,3])+1; $count=0; foreach($webSites as $item): ?>
                            <?php if($set == 1 && $count == 0): ?>
                                <div class="col-lg-5 col-md-5">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 1 && $count == 1): ?>
                                <div class="col-lg-7 col-md-7">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 2): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 0): ?>
                                <div class="col-lg-7 col-md-6">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php ;elseif($set == 3 && $count == 1): ?>
                                <div class="col-lg-5">
                                    <div class="portfolio-card2 two magnetic-item">
                                        <div class="portfolio-img">
                                            <img src="<?=$item['link']?>" alt="">
                                            <div class="details-btn-wrap">
                                                <a href="<?=$item['portfolio']?>" class="details-btn">
                                                    View More
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="icon">
                                                    <i class="bi bi-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php $count++; if($set == 1 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==2 && $count == 3){$count = 0; $set = array_rand([1,2,3])+1; }else if($set==3 && $count == 2){$count = 0; $set = array_rand([1,2,3])+1; }?>
                        <?php endforeach; ?>
                    </div>
                </div>
              </div>
        </div>
    </div> 
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
</body>
</html>