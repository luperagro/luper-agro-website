<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Projects - Agricultural Projects in Nigeria';
$pageDescription = 'Explore LUPER AGRO LIMITED\'s agricultural projects in Nigeria. Organic fertilizer, crop production, renewable energy, and community development projects.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Our <span class="text-gold">Projects</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Building a sustainable agricultural future through innovative projects.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Projects Filter -->
<section class="section-padding-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <a href="#" class="btn btn-gold btn-sm active">All Projects</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Agriculture</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Fertilizer</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Renewable Energy</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Livestock</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Community</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Sustainability</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Project 1: Organic Fertilizer Production Initiative -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-fertilizer.jpg" 
                             alt="Organic Fertilizer Production Initiative - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-success">Completed</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=fertilizer">Organic Fertilizer Production Initiative</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Fertilizer</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">A project focused on producing high-quality organic fertilizer for local farmers, improving soil health and crop yields.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=fertilizer" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2: Sustainable Crop Production Program -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-crop.jpg" 
                             alt="Sustainable Crop Production Program - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-warning">Ongoing</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=crop">Sustainable Crop Production Program</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Agriculture</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">A program promoting sustainable crop cultivation practices among local farmers in Benue State.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=crop" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3: Renewable Energy for Farms -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-solar.jpg" 
                             alt="Renewable Energy for Farms - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-warning">Ongoing</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=solar">Renewable Energy for Farms</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Renewable Energy</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">Installing solar energy systems to power farm operations and reduce environmental impact.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=solar" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4: Animal Production Initiative -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll" style="animation-delay: 0.3s;">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-livestock.jpg" 
                             alt="Animal Production Initiative - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-info">Planned</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=livestock">Animal Production Initiative</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Livestock</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">A responsible livestock production program focusing on animal welfare and sustainable farming.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=livestock" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5: Community Farming Program -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll" style="animation-delay: 0.4s;">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-community.jpg" 
                             alt="Community Farming Program - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-warning">Ongoing</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=community">Community Farming Program</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Community</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">Supporting local communities with training, resources, and sustainable farming practices.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=community" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6: Sustainability Initiative -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card animate-on-scroll" style="animation-delay: 0.5s;">
                    <div class="project-image">
                        <img src="<?php echo SITE_URL; ?>assets/images/projects/project-sustainability.jpg" 
                             alt="Sustainability Initiative - LUPER AGRO" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                        <span class="project-badge bg-info">Planned</span>
                    </div>
                    <div class="project-body">
                        <h5><a href="<?php echo SITE_URL; ?>project-detail.php?project=sustainability">Sustainability Initiative</a></h5>
                        <div class="project-meta">
                            <span><i class="fas fa-tag"></i> Sustainability</span>
                            <span><i class="fas fa-map-marker-alt"></i> Benue State</span>
                        </div>
                        <p class="mt-2">Promoting sustainable agriculture practices and environmental conservation.</p>
                        <a href="<?php echo SITE_URL; ?>project-detail.php?project=sustainability" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
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
            <span class="section-label light">Get Involved</span>
            <h2 style="color: var(--white);">Partner on Our <span class="text-gold">Projects</span></h2>
            <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 2rem;">Interested in collaborating with us on agricultural projects? Contact us today.</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold btn-lg">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%2C%20I%20want%20to%20partner%20on%20your%20projects" class="btn btn-outline-light btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>