<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Our Services - Agricultural Solutions in Nigeria';
$pageDescription = 'LUPER AGRO LIMITED offers comprehensive agricultural services including organic fertilizer, crop production, animal production, renewable energy, and consultancy.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Our <span class="text-gold">Services</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Comprehensive agricultural solutions for a sustainable future.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">What We Offer</span>
            <h2>Agricultural Solutions for <span class="text-gold">Every Need</span></h2>
            <p class="section-subtitle">LUPER AGRO LIMITED delivers expert agricultural services across the entire value chain.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper"><i class="fas fa-seedling"></i></div>
                    <h4>Organic Fertilizer Production</h4>
                    <p>Production and promotion of organic soil-enhancing solutions that improve soil health, structure, and nutrient availability for sustainable agriculture.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-green me-2"></i> Improved soil health</li>
                        <li><i class="fas fa-check text-green me-2"></i> Enhanced nutrient availability</li>
                        <li><i class="fas fa-check text-green me-2"></i> Reduced synthetic inputs</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>fertilizer.php" class="card-link mt-2">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper"><i class="fas fa-wheat-awn"></i></div>
                    <h4>Crop Production</h4>
                    <p>Sustainable cultivation of crops using responsible agricultural practices that ensure food security and environmental protection.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-green me-2"></i> Sustainable cultivation</li>
                        <li><i class="fas fa-check text-green me-2"></i> Soil management</li>
                        <li><i class="fas fa-check text-green me-2"></i> Quality harvest</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>crop-production.php" class="card-link mt-2">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper"><i class="fas fa-cow"></i></div>
                    <h4>Animal Production</h4>
                    <p>Responsible livestock production and management with a strong focus on animal welfare, health, and sustainable practices.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-green me-2"></i> Animal welfare</li>
                        <li><i class="fas fa-check text-green me-2"></i> Sustainable management</li>
                        <li><i class="fas fa-check text-green me-2"></i> Quality production</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>animal-production.php" class="card-link mt-2">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper"><i class="fas fa-solar-panel"></i></div>
                    <h4>Renewable Energy</h4>
                    <p>Agricultural and renewable-energy solutions that support sustainable operations and reduce environmental impact.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-green me-2"></i> Solar energy systems</li>
                        <li><i class="fas fa-check text-green me-2"></i> Sustainable farm power</li>
                        <li><i class="fas fa-check text-green me-2"></i> Energy efficiency</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>renewable-energy.php" class="card-link mt-2">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="icon-wrapper"><i class="fas fa-handshake"></i></div>
                    <h4>Agricultural Consultancy</h4>
                    <p>Expert agricultural consultancy services for farmers, agribusinesses, and organizations seeking to improve their operations and sustainability.</p>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="card-link mt-2">Request Consultation <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="icon-wrapper"><i class="fas fa-leaf"></i></div>
                    <h4>Sustainable Farming</h4>
                    <p>Promoting sustainable farming practices that protect the environment while ensuring agricultural productivity and food security.</p>
                    <a href="<?php echo SITE_URL; ?>sustainability.php" class="card-link mt-2">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.6s;">
                    <div class="icon-wrapper"><i class="fas fa-chart-line"></i></div>
                    <h4>Agribusiness Development</h4>
                    <p>Supporting the development of agribusiness and agricultural value chains through training, support, and strategic partnerships.</p>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="card-link mt-2">Partner With Us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.7s;">
                    <div class="icon-wrapper"><i class="fas fa-truck"></i></div>
                    <h4>Agricultural Supply & Support</h4>
                    <p>Providing agricultural supplies and support services to farmers, helping them access quality inputs and improve their farming operations.</p>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="card-link mt-2">Get Support <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-dark-green">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="section-label" style="background: rgba(255,255,255,0.15); color: var(--warm-gold);">Need Help?</span>
                <h2 style="color: var(--white);">Let's Discuss Your <span class="text-gold">Agricultural Needs</span></h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Get expert advice and solutions from our agricultural team.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>