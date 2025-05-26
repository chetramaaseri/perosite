<div class="home3-testimonial-section mb-120">
    <div class="container">
        <div class="row g-4 mb-70 wow animate fadeInDown" data-wow-delay="20ms" data-wow-duration="500ms">
            <div class="col-lg-9">
                <div class="section-title three">
                    <span>Customer Feedback</span>
                    <div class="title-and-content">
                        <h2>They Loves Us.</h2>
                        <p>We provides a wide range of services aimed at helping <span>Businesses & Organizations.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-lg-end align-items-lg-end">
                <a href="#" class="rating-area">
                    <div class="review d-flex justify-content-center align-items-center flex-column">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        </svg>
                        <span>Google</span>
                    </div>
                    <div class="rating">
                        <ul class="star">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-half"></i></li>
                        </ul>
                        <span>0 REVIEWS</span>
                        <!-- <span>150 REVIEWS</span> -->
                    </div>
                </a>
            </div>
        </div>
        <?php
        $testimonials = [
            [
                'name' => 'Amit Sharma',
                'organization' => 'Sharma Textiles',
                'rating' => 5,
                'title' => 'Outstanding Website Development',
                'review' => 'We hired Pero Site for our business website, and the result was phenomenal. The design, performance, and SEO were top-notch. Our online presence has improved significantly since then!',
            ],
            [
                'name' => 'Neha Verma',
                'organization' => 'Neha’s Boutique',
                'rating' => 5,
                'title' => 'Amazing E-Commerce Platform',
                'review' => 'Pero Solutions developed an e-commerce store for us that is fast, mobile-friendly, and easy to manage. Our sales have doubled in just 2 months!',
            ],
            [
                'name' => 'Rohit Mehra',
                'organization' => 'Mehra Electronics',
                'rating' => 4,
                'title' => 'Reliable Mobile App Development',
                'review' => 'The mobile app built by Pero Site exceeded our expectations. The UI/UX was smooth, and the backend integration was flawless. Great communication throughout the project.',
            ],
            [
                'name' => 'Simran Kaur',
                'organization' => 'Kaur Fitness Studio',
                'rating' => 5,
                'title' => 'Top-notch Social Media Management',
                'review' => 'Thanks to Pero Site, our fitness studio’s Instagram and Facebook pages are more engaging than ever. They’ve helped us grow our followers and convert leads into customers.',
            ],
            [
                'name' => 'Manpreet Singh',
                'organization' => 'Singh Enterprises',
                'rating' => 5,
                'title' => 'Custom Software That Works!',
                'review' => 'We needed a custom software solution to manage our internal operations. Pero Solutions delivered exactly what we asked for—on time and within budget. Highly recommended!',
            ],
            [
                'name' => 'Preeti Joshi',
                'organization' => 'Joshi’s Boutique',
                'rating' => 5,
                'title' => 'GMB Setup Done Right',
                'review' => 'Pero Site helped us create and optimize our Google My Business profile. We’re now showing up in local searches and getting more walk-in customers daily!',
            ],
            [
                'name' => 'Rajiv Bansal',
                'organization' => 'Bansal Traders',
                'rating' => 4,
                'title' => 'Creative Logo Design',
                'review' => 'Our brand got a new identity thanks to Pero Solutions. The logo design was creative, modern, and perfectly matched our brand’s essence.',
            ],
        ];
        
        ?>
        <div class="row mb-70">
            <div class="col-lg-12">
                <div class="swiper home3-testimonial-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($testimonials as $testimonial): ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card3">
                                <div class="testimonial-content-wrap">
                                    <div class="author-area">
                                        <div class="author-content">
                                            <h5><?=$testimonial['name']?></h5>
                                            <span><?=$testimonial['organization']?></span>
                                        </div>
                                    </div>
                                    <span><?=$testimonial['title']?></span>
                                    <p><?=$testimonial['review']?></p>
                                    <svg class="quote" width="70" height="52" viewBox="0 0 70 52" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M16.7409 0.333496C26.4614 0.333496 33.4795 8.29592 33.4795 20.0871C33.4186 37.2167 20.4386 49.3279 1.71268 51.6529C-0.0220413 51.8703 -0.691584 49.4789 0.906189 48.7753C8.08856 45.6049 11.7193 41.5829 12.188 37.6032C12.538 34.629 10.9098 32.0231 8.86158 31.534C3.55697 30.2688 0.00230554 23.7135 0.00230554 16.9407C0.00230554 12.5362 1.76583 8.31211 4.90492 5.19765C8.04401 2.08318 12.3015 0.333496 16.7409 0.333496ZM53.2614 0.333496C62.982 0.333496 70 8.29592 70 20.0871C69.9391 37.2167 56.9591 49.3279 38.2332 51.6529C36.4985 51.8703 35.829 49.4789 37.4267 48.7753C44.6091 45.6049 48.2398 41.5829 48.7085 37.6032C49.0585 34.629 47.4303 32.0231 45.3821 31.534C40.0775 30.2688 36.5228 23.7135 36.5228 16.9407C36.5228 12.5362 38.2864 8.31211 41.4255 5.19765C44.5645 2.08318 48.8221 0.333496 53.2614 0.333496Z"/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="swiper-pagination1"></div>
            </div>
        </div>
    </div>
</div>