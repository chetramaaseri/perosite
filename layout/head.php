<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3F2G9D9JS4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3F2G9D9JS4');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCG62G7S');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Basic SEO -->
<title><?=PeroMeta::get('title','PERO SITE - Web Designing, Development, SEO & Digital Marketing Services')?></title>
<meta name="description"
    content="<?=PeroMeta::get('description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta name="keywords"
    content="<?=PeroMeta::get('keywords','web development, SEO, digital marketing, mobile app development, website design, ecommerce development, online services')?>">
<meta name="author" content="PERO SITE">
<!-- <link rel="manifest" href="<?=base_url()?>manifest.json"> -->
<link type="text/plain" rel="author" href="<?=base_url()?>humans.txt" />
<link rel="canonical" href="<?=get_url()?>">
<meta property="og:locale" content="en_IN">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">

<!-- Open Graph (for Facebook & LinkedIn) -->
<meta property="og:type" content="website">
<meta property="og:title"
    content="<?=PeroMeta::get('og_title','PERO SITE - Web Designing, Development, SEO & Digital Marketing Services')?>">
<meta property="og:description"
    content="<?=PeroMeta::get('og_description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta property="og:url" content="<?=get_url()?>">
<meta property="og:site_name" content="PERO SITE">
<meta property="og:image" content="<?=base_url()?>assets/img/og-banner.png">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title"
    content="<?=PeroMeta::get('og_title','PERO SITE - Web Designing, Development, SEO & Digital Marketing Services')?>">
<meta name="twitter:description"
    content="<?=PeroMeta::get('og_description','PERO SITE offers expert web development, SEO, digital marketing services, mobile app development, and more to help you grow your online business.')?>">
<meta name="twitter:image" content="<?=base_url()?>assets/img/og-banner.png">

<!-- Favicon -->
<link rel="icon" href="<?=base_url()?>assets/img/fav-icon.svg" type="image/svg+xml" sizes="any">
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
$values = PeroMeta::get('schema', [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "url" => get_url(),
    "name" => 'Best Website Designing & Development Company in Ludhiana | PERO SITE',
    "description"=> 'PERO SITE is a leading web development company in Ludhiana, offering top-notch website design and development services to help businesses thrive online.',
    "keywords" => [
      "website development Ludhiana",
      "web design Ludhiana",
      "website developer in Ludhiana",
      "Ludhiana web development company",
      "professional website design",
      "SEO website Ludhiana",
      "web agency Ludhiana"
    ],
    "image" => base_url('assets/img/header-logo.svg'),
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "#1105,Street No. 15, Field Ganj, Ludhiana.",
        "addressLocality" =>  "Ludhiana",
        "addressRegion"=> "Punjab",
        "postalCode"=> "141001",
        "addressCountry"=> "IN"
    ],
    "telephone" => "+91-99887-71817",
    "priceRange" => "₹4999-₹22999",
    "openingHours" => "Mo-Su 08:00-22:00",
    "sameAs" => [
      "https://www.facebook.com/people/Pero-Site-Web-Developer-Ludhiana/61575577936074/",
      "https://www.instagram.com/pero.site/",
      "https://maps.app.goo.gl/cRq33jtBgJrLHHuG8"
    ],
    "publisher"=> [
        "@type"=> "Organization",
        "name"=> "PERO SITE",
        "url"=> "https://perosite.com/"
    ],
    "mainEntityOfPage" => [
      "@type" => "WebPage",
      "@id" => get_url()
    ],
]);
$schema = [
    "@context" => "https://schema.org",
    "@type" => $values['@type'],
    "url" => get_url(),
    "name" => $values['name'],
    "description"=> $values['description'],
    "keywords" => [
      "website development Ludhiana",
      "web design Ludhiana",
      "website developer in Ludhiana",
      "Ludhiana web development company",
      "professional website design",
      "SEO website Ludhiana",
      "web agency Ludhiana"
    ],
    "image" => base_url('assets/img/header-logo.svg'),
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "#1105,Street No. 15, Field Ganj, Ludhiana.",
        "addressLocality" =>  "Ludhiana",
        "addressRegion"=> "Punjab",
        "postalCode"=> "141001",
        "addressCountry"=> "IN"
    ],
    "telephone" => "+91-99887-71817",
    "priceRange" => "₹4999-₹22999",
    "openingHours" => "Mo-Su 08:00-22:00",
    "sameAs" => [
      "https://www.facebook.com/people/Pero-Site-Web-Developer-Ludhiana/61575577936074/",
      "https://www.instagram.com/pero.site/",
      "https://maps.app.goo.gl/cRq33jtBgJrLHHuG8"
    ],
    "publisher"=> [
        "@type"=> "Organization",
        "name"=> "PERO SITE",
        "url"=> "https://perosite.com/"
    ],
    "mainEntityOfPage" => [
      "@type" => "WebPage",
      "@id" => get_url()
    ]
];
echo '<script type="application/ld+json">';
echo json_encode($schema);
echo '</script>';
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCG62G7S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->