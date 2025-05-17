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
                        <h1>Let’s Build <br> Flexible Project</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="https://demo-egenslab.b-cdn.net/">Home</a></li>
                            <li>
                                <svg width="25" height="6" viewBox="0 0 25 6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM20 3.5L25 5.88675V0.113249L20 2.5V3.5ZM4.5 3.5H20.5V2.5H4.5V3.5Z"/>
                                </svg>
                                Contact Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page-top mb-80">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="row row-gap-4">
                        <div class="col-12">
                            <div class="single-contact">
                                <h4>Pero Site</h4>
                                <a href="https://www.google.com/maps">#1105, Street No. 15, Field Ganj, Ludhiana</a>
                                <ul class="contact-list">
                                    <li>
                                        <div class="icon">
                                            <img src="<?=base_url()?>assets/img/home1/icon/contact-call-icon.svg" alt="">
                                        </div>
                                        <div class="content">
                                            <span>Call 24/7 Hours</span>
                                            <h6><a href="tel:<?=$_ENV['CONTACTNO1']?>"><?=$_ENV['CONTACTNO1']?></a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="<?=base_url()?>assets/img/home1/icon/contact-call-icon.svg" alt="">
                                        </div>
                                        <div class="content">
                                            <span>Call 24/7 Hours</span>
                                            <h6><a href="tel:<?=$_ENV['CONTACTNO2']?>"><?=$_ENV['CONTACTNO2']?></a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="<?=base_url()?>assets/img/home1/icon/contact-mail-icon.svg" alt="">
                                        </div>
                                        <div class="content">
                                            <span>Send Us Mail</span>
                                            <h6><a href="mailto:<?=$_ENV['EMAIL']?>"><span class="__cf_email__" data-cfemail="c5acaba3aa85a0bda4a8b5a9a0eba6aaa8"><?=$_ENV['EMAIL']?></span></a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-map-section">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.34355997699!2d75.85667325000001!3d30.900345199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21195e54f0b00cdb%3A0x7fe719884fbb1d8b!2sPero%20Site%20%7C%20Website%20Developer%20Ludhiana!5e0!3m2!1sen!2sin!4v1746821836417!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="contact-form-wrap style-2">
                        <div class="section-title three text-center">
                            <h2>Let’s Build Something Great Together!</h2>
                            <p>Reach out to discuss your business goals, marketing needs, or digital challenges. We're here to help your brand grow online.</p>
                        </div>
                        <svg class="divider" height="6" viewBox="0 0 696 6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM691 3.5L696 5.88675V0.113249L691 2.5V3.5ZM4.5 3.5H691.5V2.5H4.5V3.5Z"/>
                        </svg>
                        <form>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Business / Brand</label>
                                        <input type="text" placeholder="Your Company">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Email</label>
                                        <input type="email" placeholder="you@example.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>Phone</label>
                                        <input type="text" placeholder="+91 **********">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner2">
                                        <label>Which Services Are You Interested In?</label>
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="webDevelopment">
                                                    <label class="form-check-label" for="webDevelopment">
                                                        Web Development
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="googleAds">
                                                    <label class="form-check-label" for="googleAds">
                                                        Google Ads Management
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="socialMedia">
                                                    <label class="form-check-label" for="socialMedia">
                                                        Social Media Marketing
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="branding">
                                                    <label class="form-check-label" for="branding">
                                                        Branding & Content Strategy
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="marketingAutomation">
                                                    <label class="form-check-label" for="marketingAutomation">
                                                        Marketing Automation
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Your Message</label>
                                        <textarea placeholder="Tell us about your project or query..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inner2 two">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyCheck">
                                    <label class="form-check-label" for="privacyCheck">
                                        By submitting, you agree to our <a href="<?= base_url('policy-terms-conditions') ?>">Privacy Policy & Terms.</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="primary-btn3 btn-hover">
                                Submit Now
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <span></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'layout/cta_text.php' ?>
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
</body>
</html>