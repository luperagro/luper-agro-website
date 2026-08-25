<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'About Us - Sustainable Agriculture in Nigeria';
$pageDescription = 'Learn about LUPER AGRO LIMITED - a leading agricultural company in Nigeria committed to sustainable farming, organic fertilizer, and agricultural innovation.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>About <span class="text-gold">LUPER AGRO</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Building a sustainable agricultural future for Nigeria.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?php echo SITE_URL; ?>assets/images/about/about-main.jpg" alt="LUPER AGRO - About Us" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6">
                <span class="section-label">About Us</span>
                <h2>Who We <span class="text-gold">Are</span></h2>
                <p>LUPER AGRO LIMITED is a modern agricultural company with a strong focus on sustainability, food production, agricultural innovation, and environmental responsibility. We are based in Makurdi, Benue State, Nigeria—the heart of the country's agricultural belt.</p>
                <p>Our mission is to advance sustainable agriculture through innovative farming practices, organic fertilizer production, renewable energy solutions, and responsible livestock development. We work alongside farmers, communities, and partners to build a more food-secure and environmentally sustainable future.</p>
                <p>At LUPER AGRO, we believe that agriculture is the foundation of economic development. By combining local agricultural knowledge with modern techniques and sustainable practices, we are helping to transform Nigeria's agricultural sector.</p>
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold mt-2">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Values</span>
            <h2>What Drives <span class="text-gold">Us</span></h2>
            <p class="section-subtitle">Our core values guide everything we do at LUPER AGRO LIMITED.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center animate-on-scroll">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-seedling"></i></div>
                    <h4>Sustainability</h4>
                    <p>We prioritize environmental stewardship and sustainable practices in all our operations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-star"></i></div>
                    <h4>Excellence</h4>
                    <p>We strive for the highest quality in everything we produce and every service we provide.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>Community</h4>
                    <p>We are committed to supporting local communities and empowering Nigerian farmers.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-arrows-rotate"></i></div>
                    <h4>Innovation</h4>
                    <p>We embrace new technologies and approaches to solve agricultural challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding bg-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <span class="stat-number" data-target="100">100+</span>
                    <span class="stat-label">Sustainable Agriculture</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <span class="stat-number" data-target="100">100+</span>
                    <span class="stat-label">Organic Solutions</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <span class="stat-number" data-target="100">100+</span>
                    <span class="stat-label">Modern Farming</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <span class="stat-number" data-target="100">100+</span>
                    <span class="stat-label">Community Impact</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>