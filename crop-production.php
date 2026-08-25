<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Crop Production - Sustainable Farming in Nigeria';
$pageDescription = 'LUPER AGRO LIMITED practices sustainable crop production in Nigeria.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Crop <span class="text-gold">Production</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Sustainable cultivation for food security and environmental protection.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Crop Production</li>
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
                <!-- Try multiple image paths to find your image -->
                <?php 
                // List all possible image locations
                $imagePaths = [
                    // Crops folder
                    'assets/images/crops/crops-main.jpg',
                    'assets/images/crops/crops-main.webp',
                    'assets/images/crops/crop-main.jpg',
                    'assets/images/crops/main.jpg',
                    'assets/images/crops/crop-farm.jpg',
                    'assets/images/crops/farm.jpg',
                    'assets/images/crops/field.jpg',
                    // General folder
                    'assets/images/general/crops-main.jpg',
                    'assets/images/general/crop-farm.jpg',
                    // Fertilizer folder (if image is there)
                    'assets/images/fertilizer/crops-main.jpg',
                    'assets/images/fertilizer/IMG_20250613_211104_709.jpg',
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
                
                // If still not found, check if folder exists and list files
                if (!$foundImage) {
                    $cropsDir = __DIR__ . '/assets/images/crops/';
                    if (is_dir($cropsDir)) {
                        $files = scandir($cropsDir);
                        foreach ($files as $file) {
                            if ($file != '.' && $file != '..') {
                                // Try any image file in the crops folder
                                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                                    $imageUrl = SITE_URL . 'assets/images/crops/' . $file;
                                    $foundImage = true;
                                    break;
                                }
                            }
                        }
                    }
                }
                ?>
                
                <img src="<?php echo $imageUrl; ?>" 
                     alt="LUPER AGRO - Sustainable Crop Production" 
                     class="img-fluid rounded-4 shadow-lg" 
                     style="width:100%; height: 420px; object-fit: cover; background: var(--agro-green-pale);"
                     onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg';">
                
                <div class="mt-3 text-center">
                    <span class="badge-crop">
                        <i class="fas fa-wheat-awn me-2"></i>Sustainable Crop Cultivation
                    </span>
                </div>
            </div>
            
            <div class="col-lg-6">
                <span class="section-label">Crop Production</span>
                <h2>Sustainable <span class="text-gold">Crop Cultivation</span></h2>
                <p>At LUPER AGRO LIMITED, we practice sustainable crop cultivation using responsible agricultural methods that protect the environment while ensuring food security. Our approach combines traditional farming knowledge with modern agricultural techniques.</p>
                <p>We focus on soil health, water conservation, and biodiversity preservation to produce high-quality crops that contribute to Nigeria's food security and economic development.</p>
                
                <div class="crop-features-grid">
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-seedling"></i></div>
                        <div>
                            <h6>Soil Management</h6>
                            <p>Responsible soil practices</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-water"></i></div>
                        <div>
                            <h6>Water Conservation</h6>
                            <p>Efficient water usage</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-tree"></i></div>
                        <div>
                            <h6>Biodiversity</h6>
                            <p>Preserving natural ecosystems</p>
                        </div>
                    </div>
                    <div class="crop-feature-item">
                        <div class="crop-feature-icon"><i class="fas fa-star"></i></div>
                        <div>
                            <h6>Quality Harvest</h6>
                            <p>High-quality crop production</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold">Partner With Us <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20learn%20more%20about%20your%20crop%20production%20services" class="btn btn-outline-primary ms-2" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Inquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Crop Process Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Process</span>
            <h2>From Soil to <span class="text-gold">Harvest</span></h2>
            <p class="section-subtitle">Our systematic approach to crop production ensures quality and sustainability at every stage.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll">
                    <div class="icon-wrapper"><i class="fas fa-tractor"></i></div>
                    <h4>Soil Preparation</h4>
                    <p>We begin with thorough soil preparation, including testing, tilling, and organic enrichment to create optimal growing conditions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="icon-wrapper"><i class="fas fa-seedling"></i></div>
                    <h4>Planting</h4>
                    <p>Using high-quality seeds and proper planting techniques to ensure strong germination and healthy crop establishment.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="icon-wrapper"><i class="fas fa-water"></i></div>
                    <h4>Crop Management</h4>
                    <p>Ongoing care including irrigation, nutrient management, pest control, and monitoring for optimal crop development.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="icon-wrapper"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>Harvest</h4>
                    <p>Careful harvesting at the right time to ensure maximum quality and minimal waste of our agricultural produce.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="icon-wrapper"><i class="fas fa-boxes"></i></div>
                    <h4>Post-Harvest Handling</h4>
                    <p>Professional handling, storage, and processing to maintain crop quality and reduce post-harvest losses.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="icon-wrapper"><i class="fas fa-chart-line"></i></div>
                    <h4>Market Distribution</h4>
                    <p>Connecting our quality produce with markets, ensuring food reaches communities across Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Practices -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Key Practices</span>
            <h2>Our Agricultural <span class="text-gold">Principles</span></h2>
            <p class="section-subtitle">Guiding principles that define our approach to sustainable crop production.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll">
                    <div class="feature-icon"><i class="fas fa-recycle"></i></div>
                    <div>
                        <h5>Responsible Farming</h5>
                        <p>Using methods that protect soil health, conserve water, and maintain biodiversity for future generations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="feature-icon"><i class="fas fa-star"></i></div>
                    <div>
                        <h5>Crop Quality</h5>
                        <p>Maintaining high standards for all crops through careful management, monitoring, and quality control.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="feature-icon"><i class="fas fa-rocket"></i></div>
                    <div>
                        <h5>Farm Productivity</h5>
                        <p>Continuous improvement in farming practices to increase productivity while protecting the environment.</p>
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
            <span class="section-label light">Support Local Agriculture</span>
            <h2 style="color: var(--white);">Partner with <span class="text-gold">LUPER AGRO</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Work with us to promote sustainable crop production in Nigeria and contribute to food security.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20partner%20with%20you%20on%20crop%20production" class="btn btn-outline-light btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>