<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Basic SEO -->
<title><?=PeroMeta::get('title','PERO SITE - Web Development, SEO & Digital Marketing Services')?></title>
<meta name="description" content="<?=PeroMeta::get('description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta name="keywords" content="<?=PeroMeta::get('keywords','web development, SEO, digital marketing, mobile app development, website design, ecommerce development, online services')?>">
<meta name="author" content="PERO SITE">
<link rel="manifest" href="<?=base_url()?>manifest.json">
<link type="text/plain" rel="author" href="<?=base_url()?>humans.txt" />
<link rel="canonical" href="<?=get_url()?>">
<meta property="og:locale" content="en_IN">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">

<!-- Open Graph (for Facebook & LinkedIn) -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?=PeroMeta::get('title','PERO SITE - Web Development, SEO & Digital Marketing Services')?>">
<meta property="og:description" content="<?=PeroMeta::get('description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta property="og:url" content="<?=get_url()?>">
<meta property="og:site_name" content="PERO SITE">
<meta property="og:image" content="<?=base_url()?>assets/img/og-banner.png">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?=PeroMeta::get('title','PERO SITE - Web Development, SEO & Digital Marketing Services')?>">
<meta name="twitter:description" content="<?=PeroMeta::get('description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta name="twitter:image" content="<?=base_url()?>assets/img/og-banner.png">

<!-- Favicon -->
<link rel="icon" href="<?=base_url()?>assets/img/icons/fav-icon.svg" type="image/svg+xml" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/img/icons/favicon-16x16.png">
<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url()?>assets/img/icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>assets/img/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/icons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>assets/img/icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>assets/img/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url()?>assets/img/icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url()?>assets/img/icons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/img/icons/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon" href="<?=base_url()?>assets/img/icons/apple-touch-icon.png">

<!-- Preconnect & Preload (Performance Boost) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="<?=base_url()?>assets/css/style.css" as="style">

<!-- Stylesheets -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/jquery-ui.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/bootstrap-icons.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/slick.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/slick-theme.css">
<link href="<?=base_url()?>assets/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
<!-- Schema.org JSON-LD Structured Data -->
<?php
$schema = PeroMeta::get('schema', '{ "@context": "https://schema.org", "@type": "WebSite", "name": "PERO SITE", "url": "https://perosite.com/", "description": "Expert web development, SEO, mobile app, and digital marketing services to grow your business.", "publisher": { "@type": "Organization", "name": "PERO SITE", "url": "https://perosite.com/" }}');
echo '<script type="application/ld+json">';
echo $schema;
echo '</script>';
?>