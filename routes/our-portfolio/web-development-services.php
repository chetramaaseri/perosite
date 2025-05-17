<?php
$webSites = scandir('public/web-sites');
unset($webSites[0]);
unset($webSites[1]);
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'layout/head.php' ?>
</head>
<body class="tt-magic-cursor digital-agency">
    <?php require_once 'layout/navbar.php' ?>
    <div class="portfolio-vertiical-slider-page" style="background: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%), url('<?=base_url("public/web-sites/".$site)?>');">
        <?php foreach($webSites as $site): ?>
        <section>
            <div class="outer">
              <div class="inner">
                <div class="bg one" style="background: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%), url('<?=base_url("public/web-sites/".$site)?>');">
                    <div class="portfolio-slider-content">
                        <div class="social-area">
                            <a href="<?=base_url('contact-us')?>">Contact Us Now
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
    
     
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
</body>
</html>