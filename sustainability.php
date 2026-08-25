<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Sustainability - Our Commitment to Sustainable Agriculture';
$pageDescription = 'LUPER AGRO LIMITED is committed to sustainable agriculture in Nigeria. Environmental protection, soil health, renewable energy, and community development.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Our Commitment to <span class="text-gold">Sustainability</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Building a sustainable agricultural future for Nigeria.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sustainability</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Intro -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?php echo SITE_URL; ?>assets/images/sustainability/sustainability-main.jpg" alt="Sustainability - LUPER AGRO" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6">
                <span class="section-label">Sustainability</span>
                <h2>Our Commitment to a <span class="text-gold">Sustainable Future</span></h2>
                <p>At LUPER AGRO LIMITED, sustainability is at the heart of everything we do. We are committed to agricultural practices that protect the environment, support local communities, and ensure food security for future generations.</p>
                <p>Our sustainability strategy focuses on environmental protection, soil health, responsible resource use, renewable energy, waste reduction, food security, local economic development, and community development.</p>
                <p>We believe that sustainable agriculture is the key to Nigeria's food security and economic development.</p>
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold mt-2">Partner With Us <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Pillars -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Pillars</span>
            <h2>Our Sustainability <span class="text-gold">Pillars</span></h2>
            <p class="section-subtitle">The key areas that guide our sustainability commitment.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper"><i class="fas fa-tree"></i></div>
                    <h4>Environmental Protection</h4>
                    <p>We are dedicated to protecting the environment through sustainable farming practices, conservation, and responsible resource management.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper"><i class="fas fa-earth-africa"></i></div>
                    <h4>Soil Health</h4>
                    <p>We prioritize soil health through organic practices, proper soil management, and natural fertilizer solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper"><i class="fas fa-water"></i></div>
                    <h4>Responsible Resource Use</h4>
                    <p>We use resources responsibly, minimizing waste and maximizing efficiency in all our operations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper"><i class="fas fa-solar-panel"></i></div>
                    <h4>Renewable Energy</h4>
                    <p>We promote renewable energy solutions and energy efficiency in agricultural operations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="icon-wrapper"><i class="fas fa-recycle"></i></div>
                    <h4>Waste Reduction</h4>
                    <p>We implement waste reduction strategies and promote circular economy principles in agriculture.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="icon-wrapper"><i class="fas fa-people-group"></i></div>
                    <h4>Community Development</h4>
                    <p>We support local communities through training, employment, and economic development initiatives.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Food Security & Development -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-bowl-food"></i></div>
                    <div>
                        <h5>Food Security</h5>
                        <p>We contribute to food security through sustainable crop production, responsible livestock management, and agricultural innovation. Our goal is to help ensure that Nigerian communities have access to nutritious, sustainably produced food.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <div>
                        <h5>Local Economic Development</h5>
                        <p>We support local economic development through job creation, partnerships with local farmers, and investments in agricultural infrastructure. We believe that sustainable agriculture drives economic growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding bg-dark">
    <div class="container">
        <div class="text-center">
            <span class="section-label light">Join Us</span>
            <h2 style="color: var(--white);">Building a Sustainable <span class="text-gold">Agricultural Future</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Partner with LUPER AGRO to promote sustainability in Nigerian agriculture.</p>
            <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>