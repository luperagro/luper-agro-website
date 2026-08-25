<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Sustainable Agriculture & Agribusiness in Nigeria';
$pageDescription = 'LUPER AGRO LIMITED - Leading agricultural company in Nigeria specializing in organic fertilizer, crop production, animal production, and renewable energy.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Badge -->
                <div class="hero-badge">
                    <span class="badge-agriculture">
                        <i class="fas fa-tractor me-2"></i>Nigerian Agriculture Since 2020
                    </span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="hero-title">
                    Growing Today.<br>
                    <span class="highlight">Sustaining Tomorrow.</span>
                </h1>
                
                <!-- Description -->
                <p class="hero-description">
                    LUPER AGRO LIMITED is committed to advancing sustainable agriculture through innovative farming, organic fertilizer production, renewable energy and responsible livestock development.
                </p>
                
                <!-- Buttons -->
                <div class="hero-buttons">
                    <a href="<?php echo SITE_URL; ?>services.php" class="btn btn-gold btn-lg">
                        Explore Our Services <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-outline-light btn-lg">
                        Contact LUPER AGRO
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Sustainable Agriculture</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Organic Solutions</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Community Impact</span>
                    </div>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="hero-image-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/hero/hero-main.jpg" 
                         alt="LUPER AGRO - Sustainable Agriculture in Nigeria" 
                         class="hero-image">
                    
                    <!-- Floating Badge -->
                    <div class="floating-badge">
                        <div class="badge-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="badge-content">
                            <span class="badge-title">Agriculture in Nigeria</span>
                            <span class="badge-subtitle">Since 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="section-label">About LUPER AGRO</span>
                <h2 class="section-title">Driving Agricultural <br><span class="text-gold">Excellence in Nigeria</span></h2>
                <p>LUPER AGRO LIMITED is a modern agricultural company dedicated to transforming Nigeria's agricultural landscape through sustainable practices, innovation, and a deep commitment to environmental responsibility.</p>
                <p>From organic fertilizer production to renewable energy solutions, we work alongside farmers, communities, and partners to build a more sustainable and food-secure future.</p>
                <a href="<?php echo SITE_URL; ?>about.php" class="btn btn-primary mt-2">Discover Our Story <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-item animate-on-scroll">
                            <div class="feature-icon"><i class="fas fa-seedling"></i></div>
                            <div>
                                <h5>Sustainable Agriculture</h5>
                                <p>Eco-friendly farming practices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                            <div class="feature-icon"><i class="fas fa-flask"></i></div>
                            <div>
                                <h5>Organic Solutions</h5>
                                <p>Natural fertilizer production</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                            <div class="feature-icon"><i class="fas fa-solar-panel"></i></div>
                            <div>
                                <h5>Renewable Energy</h5>
                                <p>Sustainable farm power</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item animate-on-scroll" style="animation-delay: 0.3s;">
                            <div class="feature-icon"><i class="fas fa-handshake"></i></div>
                            <div>
                                <h5>Community Impact</h5>
                                <p>Supporting local farmers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Services</span>
            <h2 class="section-title">What We <span class="text-gold">Do</span></h2>
            <p class="section-subtitle">LUPER AGRO LIMITED delivers comprehensive agricultural solutions across the entire value chain.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper"><i class="fas fa-seedling"></i></div>
                    <h4>Organic Fertilizer</h4>
                    <p>Production and promotion of organic soil-enhancing solutions for sustainable agriculture.</p>
                    <a href="<?php echo SITE_URL; ?>fertilizer.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper"><i class="fas fa-wheat-awn"></i></div>
                    <h4>Crop Production</h4>
                    <p>Sustainable cultivation of crops using responsible agricultural practices.</p>
                    <a href="<?php echo SITE_URL; ?>crop-production.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper"><i class="fas fa-cow"></i></div>
                    <h4>Animal Production</h4>
                    <p>Responsible livestock production and management with focus on animal welfare.</p>
                    <a href="<?php echo SITE_URL; ?>animal-production.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper"><i class="fas fa-solar-panel"></i></div>
                    <h4>Renewable Energy</h4>
                    <p>Agricultural and renewable-energy solutions that support sustainable operations.</p>
                    <a href="<?php echo SITE_URL; ?>renewable-energy.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo SITE_URL; ?>services.php" class="btn btn-gold">View All Services <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Why Choose Us</span>
            <h2 class="section-title">Why Partner With <span class="text-gold">LUPER AGRO</span></h2>
            <p class="section-subtitle">We bring together sustainability, innovation, and local expertise to deliver exceptional agricultural solutions.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <div>
                        <h5>Sustainable Agriculture</h5>
                        <p>Committed to environmentally responsible farming practices that protect our land for future generations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-award"></i></div>
                    <div>
                        <h5>Quality Driven</h5>
                        <p>We maintain the highest standards in everything we do, from production to customer service.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                    <div>
                        <h5>Innovative Solutions</h5>
                        <p>Embracing modern agricultural techniques and technologies to solve farming challenges.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="feature-icon"><i class="fas fa-globe-africa"></i></div>
                    <div>
                        <h5>Local Agricultural Knowledge</h5>
                        <p>Deep understanding of Nigerian agricultural conditions, challenges, and opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="feature-icon"><i class="fas fa-handshake"></i></div>
                    <div>
                        <h5>Long-Term Partnerships</h5>
                        <p>We build lasting relationships with our clients, partners, and communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h5>Environmental Responsibility</h5>
                        <p>Dedicated to reducing environmental impact and promoting ecological balance.</p>
                    </div>
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

<!-- CTA Section -->
<section class="section-padding bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="section-label light">Partner With Us</span>
                <h2 style="color: var(--white);">Ready to Grow <span class="text-gold">Together?</span></h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; max-width: 600px;">Join us in building a sustainable agricultural future for Nigeria. We're here to support your farming and agribusiness needs.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>