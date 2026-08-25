<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Animal Production - Responsible Livestock Farming';
$pageDescription = 'LUPER AGRO LIMITED practices responsible animal production in Nigeria. Learn about our livestock management, animal welfare, and sustainable farming.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Animal <span class="text-gold">Production</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Responsible livestock production for sustainable agriculture.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Animal Production</li>
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
                <!-- Your Animal/Livestock Image -->
                <?php 
                // Try multiple image paths
                $imagePaths = [
                    'assets/images/livestock/livestock-main.jpg',
                    'assets/images/livestock/animal-production.jpg',
                    'assets/images/livestock/animals.jpg',
                    'assets/images/livestock/cattle.jpg',
                    'assets/images/livestock/poultry.jpg',
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
                    $livestockDir = __DIR__ . '/assets/images/livestock/';
                    if (is_dir($livestockDir)) {
                        $files = scandir($livestockDir);
                        foreach ($files as $file) {
                            if ($file != '.' && $file != '..') {
                                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                                    $imageUrl = SITE_URL . 'assets/images/livestock/' . $file;
                                    $foundImage = true;
                                    break;
                                }
                            }
                        }
                    }
                }
                ?>
                
                <img src="<?php echo $imageUrl; ?>" 
                     alt="LUPER AGRO - Animal Production & Livestock Management" 
                     class="img-fluid rounded-4 shadow-lg" 
                     style="width:100%; height: 420px; object-fit: cover; background: var(--agro-green-pale);">
                
                <div class="mt-3 text-center">
                    <span class="badge-crop" style="background: var(--agro-green-primary);">
                        <i class="fas fa-cow me-2"></i>Responsible Animal Production
                    </span>
                </div>
                
                <?php if (!$foundImage): ?>
                <div class="mt-2 text-center">
                    <small class="text-muted">
                        <i class="fas fa-info-circle me-1"></i> 
                        Add your animal image to: <strong>assets/images/livestock/</strong>
                    </small>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="col-lg-6">
                <span class="section-label">Animal Production</span>
                <h2>Responsible <span class="text-gold">Livestock Management</span></h2>
                <p>LUPER AGRO LIMITED is committed to responsible livestock production and management with a strong focus on animal welfare, sustainable practices, and quality production.</p>
                <p>We understand that healthy animals are essential for sustainable agriculture. Our approach combines traditional livestock management with modern practices to ensure animal health, productivity, and welfare.</p>
                
                <div class="crop-features-grid">
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-heart"></i></div>
                        <div>
                            <h6>Animal Welfare</h6>
                            <p>Humane livestock care</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-leaf"></i></div>
                        <div>
                            <h6>Sustainable</h6>
                            <p>Environmentally responsible</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-bowl-food"></i></div>
                        <div>
                            <h6>Quality Feeding</h6>
                            <p>Balanced nutrition</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h6>Health Management</h6>
                            <p>Proactive animal health</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold">Partner With Us <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20learn%20more%20about%20your%20animal%20production%20services" class="btn btn-outline-primary ms-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Inquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Livestock Categories -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Focus</span>
            <h2>Livestock <span class="text-gold">Categories</span></h2>
            <p class="section-subtitle">We are committed to sustainable management across various livestock categories.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="service-card text-center animate-on-scroll">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-dog"></i></div>
                    <h4>Poultry</h4>
                    <p>Sustainable poultry management with focus on health, nutrition, and welfare.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-cow"></i></div>
                    <h4>Cattle</h4>
                    <p>Responsible cattle management for meat and dairy production.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-goat"></i></div>
                    <h4>Goats</h4>
                    <p>Sustainable goat farming with focus on health and productivity.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card text-center animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper mx-auto"><i class="fas fa-sheep"></i></div>
                    <h4>Sheep</h4>
                    <p>Responsible sheep management for sustainable production.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Practices -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Practices</span>
            <h2>Principles of <span class="text-gold">Animal Production</span></h2>
            <p class="section-subtitle">Guiding principles that define our approach to livestock management.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-heart"></i></div>
                    <div>
                        <h5>Animal Welfare</h5>
                        <p>Ensuring humane treatment, proper nutrition, and healthy living conditions for all livestock.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-bowl-food"></i></div>
                    <div>
                        <h5>Feeding & Nutrition</h5>
                        <p>Providing balanced nutrition through quality feed and proper feeding practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="feature-icon"><i class="fas fa-house-chimney"></i></div>
                    <div>
                        <h5>Farm Management</h5>
                        <p>Professional farm management practices ensuring operational efficiency and animal health.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="feature-icon"><i class="fas fa-hand-sparkles"></i></div>
                    <div>
                        <h5>Hygiene & Health</h5>
                        <p>Maintaining high hygiene standards and proactive health management for all livestock.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="feature-icon"><i class="fas fa-chart-simple"></i></div>
                    <div>
                        <h5>Productivity</h5>
                        <p>Optimizing productivity through sustainable practices and continuous improvement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <div>
                        <h5>Sustainability</h5>
                        <p>Ensuring environmental responsibility in all livestock operations.</p>
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
            <span class="section-label light">Work With Us</span>
            <h2 style="color: var(--white);">Sustainable Animal <span class="text-gold">Production</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Partner with LUPER AGRO for responsible and sustainable livestock production.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20partner%20with%20you%20on%20animal%20production" class="btn btn-outline-light btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>