<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KrishiAmrut Global - Organic Moringa Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Carousel -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('./assets/img/Moringa_Powder.webp');">
                <div class="carousel-caption" data-aos="fade-up">
                    <h1>Premium Organic Moringa Products</h1>
                    <p>Pure, Natural & Nutrient-Rich Superfoods from Nature</p>
                    <a href="#products" class="hero-btn">Explore Products</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/Moringa_Seeds.avif');">
                <div class="carousel-caption" data-aos="fade-up">
                    <h1>Export Quality Moringa</h1>
                    <p>Trusted by Global Markets for Excellence</p>
                    <a href="#contact" class="hero-btn">Contact Us</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/Dried_Moringa_Leaves.jpg');">
                <div class="carousel-caption" data-aos="fade-up">
                    <h1>Sustainable & Organic</h1>
                    <p>Committed to Quality and Environmental Responsibility</p>
                    <a href="#about" class="hero-btn">Learn More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>About KrishiAmrut Global</h2>
                <p class="lead">Your Trusted Partner in Organic Moringa Excellence</p>
            </div>
            <div class="about-content">
                <div class="about-image" data-aos="fade-right">
                    <img src="assets/img/Moringa_Powder.webp" alt="About Us">
                </div>
                <div class="about-text" data-aos="fade-left">
                    <h3>Leading Exporter & Supplier of Premium Moringa Products</h3>
                    <p>KrishiAmrut Global, based in Wadgaon, Kolhapur, Maharashtra, is a distinguished name in the
                        organic moringa industry. Led by our visionary owner Aditya Bhopale, we are committed to
                        delivering the highest quality moringa products to global markets.</p>
                    <p>Our mission is to promote health and wellness through nature's most potent superfood - Moringa.
                        We take pride in our organic cultivation methods, rigorous quality control, and sustainable
                        practices that ensure every product meets international standards.</p>
                    <div class="about-features">
                        <div class="feature-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="fas fa-leaf"></i>
                            <h5>100% Organic</h5>
                            <p>Pure and natural products</p>
                        </div>
                        <div class="feature-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fas fa-globe"></i>
                            <h5>Export Quality</h5>
                            <p>International standards</p>
                        </div>
                        <div class="feature-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="fas fa-certificate"></i>
                            <h5>Quality Assured</h5>
                            <p>Rigorous testing process</p>
                        </div>
                        <div class="feature-box" data-aos="zoom-in" data-aos-delay="400">
                            <i class="fas fa-users"></i>
                            <h5>Customer Focused</h5>
                            <p>Dedicated support team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Our Premium Products</h2>
                <p class="lead">Discover the Power of Organic Moringa</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Moringa_Powder.webp" alt="">
                            <span class="product-badge">Best Seller</span>
                        </div>
                        <div class="product-info">
                            <h4>Moringa Powder</h4>
                            <p>Premium quality finely ground moringa powder, packed with essential nutrients and
                                antioxidants. Perfect for smoothies, teas, and health supplements.</p>
                            <a href="Moringa_Powder.php"><button class="btn btn-sm btn-outline-success">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Dried_Moringa_Leaves.jpg" alt="">
                            <span class="product-badge">Organic</span>
                        </div>
                        <div class="product-info">
                            <h4>Dried Moringa Leaves</h4>
                            <p>Carefully dried moringa leaves retaining maximum nutritional value. Ideal for brewing
                                nutritious teas and culinary applications.</p>
                            <a href="Dried_Moringa_Leaves.php"><button class="btn btn-sm btn-outline-success">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Moringa_Oil.jpg" alt="">
                            <span class="product-badge">Premium</span>
                        </div>
                        <div class="product-info">
                            <h4>Moringa Oil</h4>
                            <p>Cold-pressed pure moringa oil for cosmetic and therapeutic use. Rich in antioxidants and
                                beneficial for skin and hair care.</p>
                            <a href="Moringa_Oil.php"><button class="btn btn-sm btn-outline-success">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Moringa_Seeds.avif" alt="">
                            <span class="product-badge">Natural</span>
                        </div>
                        <div class="product-info">
                            <h4>Moringa Seeds</h4>
                            <p>High-quality moringa seeds for cultivation and oil extraction. Sourced from the finest
                                organic farms with excellent germination rates.</p>
                            <a href="Moringa_Seeds.php"><button class="btn btn-sm btn-outline-success">View
                                    Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Our Services</h2>
                <p class="lead">Comprehensive Solutions for Your Moringa Needs</p>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="flip-left">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4>Export Services</h4>
                        <p>We export premium quality moringa products to international markets with complete
                            documentation and compliance support.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Bulk Supply</h4>
                        <p>Large-scale supply solutions for distributors, retailers, and manufacturers with competitive
                            pricing and timely delivery.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4>Custom Packaging</h4>
                        <p>Flexible packaging options tailored to your brand requirements with private labeling services
                            available.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4>Quality Testing</h4>
                        <p>Comprehensive quality control and laboratory testing to ensure products meet international
                            quality standards.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Customer Support</h4>
                        <p>Dedicated customer service team to assist with orders, queries, and after-sales support
                            throughout your journey.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-left" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>B2B Partnerships</h4>
                        <p>Long-term partnership opportunities for businesses looking for reliable and consistent
                            moringa product suppliers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Our Gallery</h2>
                <p class="lead">Glimpse into Our World of Moringa</p>
            </div>
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="assets/img/Dried_Moringa_Leaves.jpg" alt="Moringa Farm">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="assets/img/Moringa_Oil.jpg" alt="Moringa Powder">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="assets/img/Moringa_Powder.webp" alt="Processing">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="assets/img/Moringa_Seeds.avif" alt="Packaging">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Latest News & Insights</h2>
                <p class="lead">Stay Updated with Moringa Industry Trends</p>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/Dried_Moringa_Leaves.jpg" height="300px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> Dec 15, 2024</span>
                                <span><i class="far fa-user"></i> Admin</span>
                            </div>
                            <h4>Health Benefits of Moringa</h4>
                            <p>Discover the amazing nutritional properties and health benefits of incorporating moringa
                                into your daily diet...</p>
                            <a href="contact.php" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/Moringa_Oil.jpg" height="300px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> Dec 10, 2024</span>
                                <span><i class="far fa-user"></i> Admin</span>
                            </div>
                            <h4>Organic Farming Practices</h4>
                            <p>Learn about our sustainable and organic farming methods that ensure the highest quality
                                moringa products...</p>
                            <a href="contact.php" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/Moringa_Seeds.avif" height="300px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> Dec 5, 2024</span>
                                <span><i class="far fa-user"></i> Admin</span>
                            </div>
                            <h4>Global Moringa Market Trends</h4>
                            <p>Insights into the growing global demand for moringa products and emerging market
                                opportunities...</p>
                            <a href="contact.php" class="btn btn-sm btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Get In Touch</h2>
                <p class="lead">We'd Love to Hear From You</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h6>Address</h6>
                                <p>Makote Galli, Wadgaon<br>Kolhapur, Maharashtra, India</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h6>Phone</h6>
                                <p>7028959536<br>7759910010</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h6>Email</h6>
                                <p>info@krishiamrutglobal.in</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-id-card"></i>
                            <div>
                                <h6>GST Number</h6>
                                <p>27HZGPB1204P1ZB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form">
                        <h4 class="mb-4">Send Us a Message</h4>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="submit-btn">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.750786752577!2d74.42519347510861!3d16.68934982253885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0e30018827cf7%3A0xa5ac98e91787880c!2sMalage%20galli!5e0!3m2!1sen!2sin!4v1767006018475!5m2!1sen!2sin"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" style="border-radius: 20px;"></iframe>
            </div>

        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="zoom-in">
                <div>
                    <h3><i class="fas fa-envelope-open-text"></i> Subscribe to Our Newsletter</h3>
                    <p>Get the latest updates on products, offers, and health tips</p>
                </div>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email address">
                    <button><i class="fas fa-paper-plane"></i> Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <?php include('footer.php') ?>