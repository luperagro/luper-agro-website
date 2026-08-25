<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

// Get project from URL
$project = isset($_GET['project']) ? $_GET['project'] : '';

// Project data
$projects = [
    'fertilizer' => [
        'title' => 'Organic Fertilizer Production Initiative',
        'category' => 'Fertilizer',
        'location' => 'Benue State, Nigeria',
        'status' => 'Completed',
        'image' => 'project-fertilizer.jpg',
        'date' => '2024',
        'description' => '
            <h2>Project Overview</h2>
            <p>The Organic Fertilizer Production Initiative is a landmark project focused on producing high-quality organic fertilizer for local farmers in Benue State.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Produce high-quality organic fertilizer</li>
                <li>Improve soil health and crop yields</li>
                <li>Reduce dependence on synthetic fertilizers</li>
                <li>Support sustainable agriculture</li>
            </ul>
            
            <h2>Impact</h2>
            <p>This project has helped local farmers improve their soil health, increase crop yields, and adopt more sustainable farming practices.</p>
            
            <h2>Partners</h2>
            <p>LUPER AGRO LIMITED worked with local farming communities and agricultural organizations to implement this initiative.</p>
        '
    ],
    'crop' => [
        'title' => 'Sustainable Crop Production Program',
        'category' => 'Agriculture',
        'location' => 'Benue State, Nigeria',
        'status' => 'Ongoing',
        'image' => 'project-crop.jpg',
        'date' => '2024 - Present',
        'description' => '
            <h2>Project Overview</h2>
            <p>The Sustainable Crop Production Program promotes sustainable crop cultivation practices among local farmers in Benue State.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Promote sustainable farming practices</li>
                <li>Improve food security</li>
                <li>Support local farmers</li>
                <li>Protect the environment</li>
            </ul>
            
            <h2>Activities</h2>
            <p>The program includes farmer training, demonstration farms, and the provision of improved seeds and inputs.</p>
        '
    ],
    'solar' => [
        'title' => 'Renewable Energy for Farms',
        'category' => 'Renewable Energy',
        'location' => 'Benue State, Nigeria',
        'status' => 'Ongoing',
        'image' => 'project-solar.jpg',
        'date' => '2024 - Present',
        'description' => '
            <h2>Project Overview</h2>
            <p>This project installs solar energy systems to power farm operations and reduce environmental impact.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Provide clean energy for farms</li>
                <li>Reduce carbon emissions</li>
                <li>Lower operational costs</li>
                <li>Promote renewable energy</li>
            </ul>
            
            <h2>Benefits</h2>
            <p>Farmers benefit from reliable, clean energy that powers irrigation, lighting, and equipment.</p>
        '
    ],
    'livestock' => [
        'title' => 'Animal Production Initiative',
        'category' => 'Livestock',
        'location' => 'Benue State, Nigeria',
        'status' => 'Planned',
        'image' => 'project-livestock.jpg',
        'date' => '2025',
        'description' => '
            <h2>Project Overview</h2>
            <p>The Animal Production Initiative focuses on responsible livestock production with emphasis on animal welfare and sustainable farming.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Promote animal welfare</li>
                <li>Improve livestock management</li>
                <li>Support sustainable farming</li>
                <li>Enhance productivity</li>
            </ul>
        '
    ],
    'community' => [
        'title' => 'Community Farming Program',
        'category' => 'Community',
        'location' => 'Benue State, Nigeria',
        'status' => 'Ongoing',
        'image' => 'project-community.jpg',
        'date' => '2024 - Present',
        'description' => '
            <h2>Project Overview</h2>
            <p>The Community Farming Program supports local communities with training, resources, and sustainable farming practices.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Empower local communities</li>
                <li>Provide farming training</li>
                <li>Improve food security</li>
                <li>Build sustainable livelihoods</li>
            </ul>
        '
    ],
    'sustainability' => [
        'title' => 'Sustainability Initiative',
        'category' => 'Sustainability',
        'location' => 'Benue State, Nigeria',
        'status' => 'Planned',
        'image' => 'project-sustainability.jpg',
        'date' => '2025',
        'description' => '
            <h2>Project Overview</h2>
            <p>The Sustainability Initiative promotes sustainable agriculture practices and environmental conservation.</p>
            
            <h2>Objectives</h2>
            <ul>
                <li>Promote sustainable agriculture</li>
                <li>Protect the environment</li>
                <li>Support conservation</li>
                <li>Build climate resilience</li>
            </ul>
        '
    ]
];

// Get the project
$projectData = isset($projects[$project]) ? $projects[$project] : null;

if (!$projectData) {
    header('Location: ' . SITE_URL . 'projects.php');
    exit();
}

$pageTitle = $projectData['title'] . ' - LUPER AGRO Projects';
$pageDescription = 'Learn more about ' . $projectData['title'] . ' by LUPER AGRO LIMITED.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php echo $projectData['title']; ?></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;"><?php echo $projectData['category']; ?> Project in <?php echo $projectData['location']; ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>projects.php">Projects</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $projectData['title']; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Project Detail -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Project Image -->
                <div class="project-detail-image mb-4">
                    <img src="<?php echo SITE_URL; ?>assets/images/projects/<?php echo $projectData['image']; ?>" 
                         alt="<?php echo $projectData['title']; ?>" 
                         class="img-fluid rounded-4 shadow-lg"
                         onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'"
                         style="width:100%; height: 400px; object-fit: cover;">
                </div>
                
                <!-- Project Info -->
                <div class="project-info mb-4">
                    <div class="d-flex flex-wrap gap-3 mb-3">
                        <span class="badge" style="background: var(--gold-primary); color: white; padding: 0.5rem 1.5rem;">
                            <i class="fas fa-tag me-2"></i><?php echo $projectData['category']; ?>
                        </span>
                        <span class="badge" style="background: var(--agro-green-primary); color: white; padding: 0.5rem 1.5rem;">
                            <i class="fas fa-map-marker-alt me-2"></i><?php echo $projectData['location']; ?>
                        </span>
                        <span class="badge" style="background: <?php echo $projectData['status'] == 'Completed' ? '#198754' : ($projectData['status'] == 'Ongoing' ? '#ffc107' : '#0dcaf0'); ?>; color: <?php echo $projectData['status'] == 'Ongoing' ? '#000' : '#fff'; ?>; padding: 0.5rem 1.5rem;">
                            <i class="fas fa-circle me-2"></i><?php echo $projectData['status']; ?>
                        </span>
                        <span class="badge" style="background: var(--gray-medium); color: white; padding: 0.5rem 1.5rem;">
                            <i class="far fa-calendar-alt me-2"></i><?php echo $projectData['date']; ?>
                        </span>
                    </div>
                </div>
                
                <!-- Project Description -->
                <div class="project-description">
                    <?php echo $projectData['description']; ?>
                </div>
                
                <!-- Back Button -->
                <div class="mt-5">
                    <a href="<?php echo SITE_URL; ?>projects.php" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i>Back to Projects
                    </a>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-gold ms-2">
                        <i class="fas fa-envelope me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Related</span>
            <h2>Other <span class="text-gold">Projects</span></h2>
        </div>
        <div class="row g-4">
            <?php foreach ($projects as $key => $p): ?>
                <?php if ($key != $project): ?>
                <div class="col-md-4">
                    <div class="project-card">
                        <div class="project-image" style="height: 180px;">
                            <img src="<?php echo SITE_URL; ?>assets/images/projects/<?php echo $p['image']; ?>" 
                                 alt="<?php echo $p['title']; ?>" 
                                 class="img-fluid"
                                 onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'"
                                 style="width:100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="project-body">
                            <h6><a href="<?php echo SITE_URL; ?>project-detail.php?project=<?php echo $key; ?>"><?php echo $p['title']; ?></a></h6>
                            <div class="project-meta">
                                <span><i class="fas fa-tag"></i> <?php echo $p['category']; ?></span>
                            </div>
                            <a href="<?php echo SITE_URL; ?>project-detail.php?project=<?php echo $key; ?>" class="card-link">View Project <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>