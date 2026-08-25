<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Renewable Energy - Sustainable Farm Power Solutions';
$pageDescription = 'LUPER AGRO LIMITED provides renewable energy solutions for agriculture in Nigeria. Solar energy, sustainable farm power, and energy efficiency.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Renewable <span class="text-gold">Energy</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Sustainable energy solutions for modern agriculture.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Renewable Energy</li>
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
                <!-- Your Renewable Energy Image -->
                <?php 
                // Try multiple image paths
                $imagePaths = [
                    'assets/images/renewable-energy/renewable-main.jpg',
                    'assets/images/renewable-energy/solar.jpg',
                    'assets/images/renewable-energy/energy.jpg',
                    'assets/images/renewable-energy/solar-panel.jpg',
                    'assets/images/general/placeholder.jpg'
                ];
                
                $foundImage = false;
                $imageUrl = SITE_URL . 'assets/images/general/placeholder.jpg';
                
                foreach ($imagePaths as $path) {
                    $fullPath = __DIR__ . '/' . $path;
                    if (file_exists($fullPath)) {
                        $foundImage = true;
                        $imageUrl = SITE_URL . $path;
                        break;
                    }
                }
                
                // If still not found, check folder
                if (!$foundImage) {
                    $renewableDir = __DIR__ . '/assets/images/renewable-energy/';
                    if (is_dir($renewableDir)) {
                        $files = scandir($renewableDir);
                        foreach ($files as $file) {
                            if ($file != '.' && $file != '..') {
                                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                                    $imageUrl = SITE_URL . 'assets/images/renewable-energy/' . $file;
                                    $foundImage = true;
                                    break;
                                }
                            }
                        }
                    }
                }
                ?>
                
                <img src="<?php echo $imageUrl; ?>" 
                     alt="LUPER AGRO - Renewable Energy for Sustainable Agriculture" 
                     class="img-fluid rounded-4 shadow-lg" 
                     style="width:100%; height: 420px; object-fit: cover; background: var(--agro-green-pale);">
                
                <div class="mt-3 text-center">
                    <span class="badge-crop" style="background: var(--gold-primary);">
                        <i class="fas fa-solar-panel me-2"></i>Powering Agriculture Sustainably
                    </span>
                </div>
                
                <?php if (!$foundImage): ?>
                <div class="mt-2 text-center">
                    <small class="text-muted">
                        <i class="fas fa-info-circle me-1"></i> 
                        Add your renewable energy image to: <strong>assets/images/renewable-energy/</strong>
                    </small>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="col-lg-6">
                <span class="section-label">Renewable Energy</span>
                <h2>Powering Agriculture <span class="text-gold">Sustainably</span></h2>
                <p>LUPER AGRO LIMITED recognizes the critical role of renewable energy in sustainable agriculture. We provide innovative energy solutions that reduce environmental impact while supporting agricultural operations.</p>
                <p>From solar energy systems to sustainable farm power solutions, we help farmers and agribusinesses reduce their carbon footprint and improve operational efficiency through clean energy.</p>
                
                <div class="crop-features-grid">
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-sun"></i></div>
                        <div>
                            <h6>Solar Energy</h6>
                            <p>Clean solar power solutions</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-leaf"></i></div>
                        <div>
                            <h6>Sustainable</h6>
                            <p>Environmentally friendly power</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-bolt"></i></div>
                        <div>
                            <h6>Energy Efficiency</h6>
                            <p>Optimized power usage</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-recycle"></i></div>
                        <div>
                            <h6>Green Energy</h6>
                            <p>Reduced carbon footprint</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20learn%20more%20about%20your%20renewable%20energy%20solutions" class="btn btn-outline-primary ms-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Inquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Energy Solutions -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Solutions</span>
            <h2>Energy Solutions for <span class="text-gold">Modern Agriculture</span></h2>
            <p class="section-subtitle">Clean, sustainable energy solutions designed for agricultural operations.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper"><i class="fas fa-solar-panel"></i></div>
                    <h4>Solar Energy Systems</h4>
                    <p>Solar power solutions for agricultural operations including water pumping, lighting, and equipment power.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Solar water pumping</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Farm lighting systems</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Equipment charging</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper"><i class="fas fa-bolt"></i></div>
                    <h4>Agricultural Energy Systems</h4>
                    <p>Comprehensive energy solutions tailored for agricultural operations and processing.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Energy efficiency systems</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Processing plant power</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Sustainable power solutions</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper"><i class="fas fa-leaf"></i></div>
                    <h4>Sustainable Farm Power</h4>
                    <p>Integrated renewable energy solutions for sustainable farm operations.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Green energy integration</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Carbon footprint reduction</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Sustainable operations</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper"><i class="fas fa-gauge-high"></i></div>
                    <h4>Energy Efficiency</h4>
                    <p>Optimizing energy use through efficient systems and sustainable practices.</p>
                    <ul class="mt-2" style="list-style: none; padding: 0;">
                        <li><i class="fas fa-check text-gold me-2"></i> Energy audits</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Efficiency improvements</li>
                        <li><i class="fas fa-check text-gold me-2"></i> Cost reduction</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Benefits</span>
            <h2>Why Choose <span class="text-gold">Renewable Energy</span></h2>
            <p class="section-subtitle">Renewable energy offers significant benefits for agriculture and the environment.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-globe-africa"></i></div>
                    <div>
                        <h5>Environmental Protection</h5>
                        <p>Reduce carbon emissions and protect the environment through clean energy solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h5>Cost Reduction</h5>
                        <p>Lower operational costs through energy efficiency and sustainable power solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="feature-icon"><i class="fas fa-arrows-rotate"></i></div>
                    <div>
                        <h5>Sustainable Operations</h5>
                        <p>Support sustainable agricultural practices through renewable energy integration.</p>
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
            <span class="section-label light">Go Green</span>
            <h2 style="color: var(--white);">Power Your Farm with <span class="text-gold">Clean Energy</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Contact us to learn more about our renewable energy solutions and how we can help your farm go green.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20learn%20more%20about%20your%20renewable%20energy%20solutions" class="btn btn-outline-light btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>