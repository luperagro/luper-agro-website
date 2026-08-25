<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Agricultural Insights - Blog & News';
$pageDescription = 'Stay informed with the latest agricultural insights, news, and updates from LUPER AGRO LIMITED.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Agricultural <span class="text-gold">Insights</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Latest news, insights, and updates from LUPER AGRO LIMITED.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Insights</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Featured Posts -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <span class="section-label">Featured Insights</span>
                <h2 class="section-title">Latest <span class="text-gold">Articles</span></h2>
                <p class="section-subtitle">Stay updated with our latest agricultural insights and news.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Blog Post 1: Organic Fertilizer -->
            <div class="col-lg-6">
                <div class="blog-card animate-on-scroll" style="height: 100%;">
                    <div class="blog-image" style="height: 280px; position: relative; overflow: hidden;">
                        <img src="<?php echo SITE_URL; ?>assets/images/blog/organic-fertilizer.jpg" 
                             alt="The Future of Organic Fertilizer in Nigerian Agriculture" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div class="blog-category-badge" style="position: absolute; top: 15px; left: 15px; background: var(--gold-primary); color: white; padding: 5px 15px; border-radius: 50px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">
                            <i class="fas fa-tag me-1"></i>Agriculture
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt me-1"></i>August 24, 2026</span>
                            <span><i class="far fa-clock me-1"></i>5 min read</span>
                        </div>
                        <h4><a href="<?php echo SITE_URL; ?>article.php?slug=organic-fertilizer-future">The Future of Organic Fertilizer in Nigerian Agriculture</a></h4>
                        <p>Exploring how organic fertilizer is transforming Nigerian agriculture and improving soil health for sustainable food production.</p>
                        <a href="<?php echo SITE_URL; ?>article.php?slug=organic-fertilizer-future" class="card-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2: Sustainable Farming -->
            <div class="col-lg-6">
                <div class="blog-card animate-on-scroll" style="animation-delay: 0.1s; height: 100%;">
                    <div class="blog-image" style="height: 280px; position: relative; overflow: hidden;">
                        <img src="<?php echo SITE_URL; ?>assets/images/blog/sustainable-farming.jpg" 
                             alt="Sustainable Farming Practices for Modern Agriculture" 
                             class="img-fluid"
                             onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div class="blog-category-badge" style="position: absolute; top: 15px; left: 15px; background: var(--agro-green-primary); color: white; padding: 5px 15px; border-radius: 50px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">
                            <i class="fas fa-tag me-1"></i>Sustainability
                        </div>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar-alt me-1"></i>August 24, 2026</span>
                            <span><i class="far fa-clock me-1"></i>4 min read</span>
                        </div>
                        <h4><a href="<?php echo SITE_URL; ?>article.php?slug=sustainable-farming-practices">Sustainable Farming Practices for Modern Agriculture</a></h4>
                        <p>Learn about sustainable farming practices that are shaping the future of agriculture and protecting the environment.</p>
                        <a href="<?php echo SITE_URL; ?>article.php?slug=sustainable-farming-practices" class="card-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <span class="section-label">Categories</span>
                    <h3>Explore by <span class="text-gold">Topic</span></h3>
                </div>
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <a href="#" class="btn btn-gold btn-sm">All</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Agriculture</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Organic Fertilizer</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Renewable Energy</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Livestock</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Sustainability</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Agribusiness</a>
                    <a href="#" class="btn btn-outline-primary btn-sm">Crop Production</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="section-label">Stay Updated</span>
                <h2>Subscribe to Our <span class="text-gold">Newsletter</span></h2>
                <p class="section-subtitle">Get the latest agricultural insights and updates from LUPER AGRO delivered to your inbox.</p>
                <form class="newsletter-form row g-3 justify-content-center mt-4">
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-gold w-100">Subscribe <i class="fas fa-paper-plane ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>