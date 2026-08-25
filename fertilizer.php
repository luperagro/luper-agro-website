<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Organic Fertilizer - Sustainable Soil Solutions';
$pageDescription = 'LUPER AGRO LIMITED produces high-quality organic fertilizer for sustainable agriculture in Nigeria. Improve soil health and crop yields naturally.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Organic <span class="text-gold">Fertilizer</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Better Soil. Healthier Crops. Sustainable Growth.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Organic Fertilizer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <!-- Your Organic Fertilizer Image -->
                <img src="<?php echo SITE_URL; ?>assets/images/fertilizer/IMG_20250613_211104_709.jpg" alt="LUPER AGRO Organic Fertilizer - Bio Organic Fertilizer" class="img-fluid rounded-4 shadow-lg" style="width:100%;">
                <div class="mt-3 text-center">
                    <span class="badge bg-gold" style="background: var(--gold-primary); color: white; padding: 0.5rem 1.5rem; font-size: 0.9rem;">
                        <i class="fas fa-certificate me-2"></i>100% Bio Organic Fertilizer
                    </span>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-label">Organic Fertilizer</span>
                <h2>Natural Solutions for <span class="text-gold">Healthier Soils</span></h2>
                <p>Organic fertilizer is revolutionizing agriculture by providing natural, sustainable alternatives to synthetic inputs. At LUPER AGRO LIMITED, we produce and promote organic soil-enhancing solutions that work with nature, not against it.</p>
                <p>Our organic fertilizers improve soil structure, enhance nutrient availability, and support the natural biological processes that are essential for healthy plant growth.</p>
                
                <!-- Company Details from Image -->
                <div class="row mt-4 g-3">
                    <div class="col-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                            <div>
                                <h6>100% Natural</h6>
                                <p style="font-size: 0.85rem;">Pure organic ingredients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                            <div>
                                <h6>Sustainable</h6>
                                <p style="font-size: 0.85rem;">Environmentally responsible</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                            <div>
                                <h6>Bio Organic</h6>
                                <p style="font-size: 0.85rem;">100% organic composition</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                            <div>
                                <h6>Quality Assured</h6>
                                <p style="font-size: 0.85rem;">Premium quality fertilizer</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold">Order Now <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20order%20your%20organic%20fertilizer" class="btn btn-outline-primary ms-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Order on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Benefits</span>
            <h2>Why Choose <span class="text-gold">Organic Fertilizer</span></h2>
            <p class="section-subtitle">Organic fertilizer offers numerous benefits for farmers, the environment, and agricultural sustainability.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-heart"></i></div>
                    <div>
                        <h5>Improved Soil Health</h5>
                        <p>Enhances soil structure, water retention, and biological activity for long-term soil fertility.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-arrows-spin"></i></div>
                    <div>
                        <h5>Nutrient Availability</h5>
                        <p>Provides essential nutrients in a form that plants can readily absorb for optimal growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <div>
                        <h5>Sustainable Agriculture</h5>
                        <p>Supports long-term agricultural productivity without harming the environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="feature-icon"><i class="fas fa-recycle"></i></div>
                    <div>
                        <h5>Reduced Synthetic Inputs</h5>
                        <p>Decreases dependence on synthetic fertilizers and harmful agricultural chemicals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="feature-icon"><i class="fas fa-earth-africa"></i></div>
                    <div>
                        <h5>Environmental Benefits</h5>
                        <p>Reduces soil degradation, water pollution, and greenhouse gas emissions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="feature-icon"><i class="fas fa-crop-simple"></i></div>
                    <div>
                        <h5>Improved Soil Structure</h5>
                        <p>Enhances soil aeration, water infiltration, and root development for better crop growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Process</span>
            <h2>How We Produce <span class="text-gold">Organic Fertilizer</span></h2>
            <p class="section-subtitle">Our commitment to quality ensures the highest standards in organic fertilizer production.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper mx-auto" style="font-size: 2rem;">🌱</div>
                    <h5>Raw Materials</h5>
                    <p style="font-size: 0.9rem;">Natural, organic materials sourced sustainably from local farms.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper mx-auto" style="font-size: 2rem;">♻️</div>
                    <h5>Processing</h5>
                    <p style="font-size: 0.9rem;">Natural decomposition and processing methods that preserve nutrients.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper mx-auto" style="font-size: 2rem;">🔬</div>
                    <h5>Quality Control</h5>
                    <p style="font-size: 0.9rem;">Rigorous testing for purity, nutrient content, and quality assurance.</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper mx-auto" style="font-size: 2rem;">📦</div>
                    <h5>Ready for Use</h5>
                    <p style="font-size: 0.9rem;">Packaged and prepared for farmers across Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Products</span>
            <h2>Organic Fertilizer <span class="text-gold">Products</span></h2>
            <p class="section-subtitle">We offer high-quality bio organic fertilizer for all your farming needs.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center animate-on-scroll">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-seedling"></i></div>
                    <h4>Bio Organic Fertilizer</h4>
                    <p>100% natural organic fertilizer for all crop types. Improves soil health and crop yield.</p>
                    <ul class="text-start mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Suitable for all crops</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Environmentally friendly</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Improves soil structure</li>
                    </ul>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20order%20Bio%20Organic%20Fertilizer" class="btn btn-gold mt-3" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Order Now
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-truck"></i></div>
                    <h4>Agro Chemicals</h4>
                    <p>Dealers in all kinds of agro chemicals and general contractor services.</p>
                    <ul class="text-start mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Quality agro chemicals</li>
                        <li><i class="fas fa-check text-gold me-2"></i> General contractor services</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Professional support</li>
                    </ul>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-primary mt-3">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About the Company -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="section-label">About LUPER AGRO</span>
                <h2>Dealers in All Kinds of <span class="text-gold">Agro Chemicals</span></h2>
                <p><strong>LUPER AGRO LIMITED</strong> is a trusted dealer in all kinds of agro chemicals and general contractor services. We are committed to providing high-quality agricultural inputs and services to farmers across Nigeria.</p>
                <p>Our expertise includes:</p>
                <ul class="mt-2" style="list-style: none; padding: 0;">
                    <li><i class="fas fa-check-circle text-gold me-2"></i> Bio Organic Fertilizer Production</li>
                    <li><i class="fas fa-check-circle text-gold me-2"></i> Agro Chemicals Supply</li>
                    <li><i class="fas fa-check-circle text-gold me-2"></i> General Contractor Services</li>
                    <li><i class="fas fa-check-circle text-gold me-2"></i> Agricultural Consultancy</li>
                </ul>
                <div class="mt-3">
                    <a href="<?php echo SITE_URL; ?>about.php" class="btn btn-outline-primary">Learn About Us <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="bg-dark p-4 rounded-4 text-white" style="background: var(--agro-green-dark) !important;">
                    <div class="d-flex align-items-start gap-3">
                        <i class="fas fa-map-marker-alt text-gold" style="font-size: 1.5rem; margin-top: 0.2rem;"></i>
                        <div>
                            <h5 class="text-white">Visit Our Location</h5>
                            <p style="color: rgba(255,255,255,0.8);">
                                <?php echo COMPANY_ADDRESS; ?>
                            </p>
                            <p style="color: rgba(255,255,255,0.8);">
                                <i class="fas fa-phone text-gold me-2"></i> <?php echo COMPANY_PHONE; ?>
                            </p>
                            <p style="color: rgba(255,255,255,0.8);">
                                <i class="fas fa-envelope text-gold me-2"></i> <?php echo COMPANY_EMAIL; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-dark">
    <div class="container">
        <div class="text-center">
            <span class="section-label light">Ready to Grow</span>
            <h2 style="color: var(--white);">Enhance Your Soil with <span class="text-gold">Organic Fertilizer</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Contact us to learn more about our organic fertilizer solutions or place your order today.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20order%20your%20organic%20fertilizer" class="btn btn-outline-light btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Order on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>