<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = '404 - Page Not Found';
$pageDescription = 'The page you are looking for could not be found.';

include_once __DIR__ . '/includes/header.php';
?>

<section class="section-padding" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div style="font-size: 6rem; font-weight: 900; color: var(--primary-green);">404</div>
                <h1 class="display-4 mb-3">Page Not Found</h1>
                <p class="lead mb-4">Oops! The page you are looking for doesn't exist or has been moved.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="<?php echo SITE_URL; ?>" class="btn btn-primary"><i class="fas fa-home me-2"></i>Go Home</a>
                    <a href="<?php echo SITE_URL; ?>contact.php" class="btn btn-outline-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>