<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Terms of Service - LUPER AGRO LIMITED';
$pageDescription = 'Read LUPER AGRO LIMITED\'s terms of service. Understand the terms and conditions for using our website and services.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Terms of <span class="text-gold">Service</span></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terms of Service</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="content">
                    <p><strong>Last Updated:</strong> <?php echo date('F d, Y'); ?></p>
                    
                    <h2>Introduction</h2>
                    <p>Welcome to LUPER AGRO LIMITED. By using our website and services, you agree to comply with and be bound by the following terms and conditions. Please read these Terms of Service carefully before using our website.</p>
                    
                    <h2>Acceptance of Terms</h2>
                    <p>By accessing this website, you accept these terms and conditions in full. If you do not agree with any part of these terms, please do not use our website.</p>
                    
                    <h2>Use of Website</h2>
                    <p>You agree to use our website only for lawful purposes and in a way that does not infringe the rights of others or restrict their use of the website.</p>
                    
                    <h2>Intellectual Property</h2>
                    <p>All content on this website, including text, graphics, logos, and images, is the property of LUPER AGRO LIMITED and is protected by copyright laws. You may not reproduce, distribute, or modify any content without our prior written consent.</p>
                    
                    <h2>User Content</h2>
                    <p>If you submit content to our website, you grant us a non-exclusive, royalty-free license to use, reproduce, and distribute that content. You warrant that you have the right to grant this license.</p>
                    
                    <h2>Disclaimer of Warranties</h2>
                    <p>Our website and services are provided "as is" without any warranties, express or implied. We do not guarantee that our website will be error-free or uninterrupted.</p>
                    
                    <h2>Limitation of Liability</h2>
                    <p>LUPER AGRO LIMITED shall not be liable for any direct, indirect, incidental, or consequential damages arising from your use of our website or services.</p>
                    
                    <h2>Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites. We are not responsible for the content or practices of these websites.</p>
                    
                    <h2>Governing Law</h2>
                    <p>These terms shall be governed by and construed in accordance with the laws of Nigeria. Any disputes shall be subject to the exclusive jurisdiction of the courts of Nigeria.</p>
                    
                    <h2>Changes to Terms</h2>
                    <p>We reserve the right to update these Terms of Service at any time. Changes will be posted on this page with an updated date.</p>
                    
                    <h2>Contact Us</h2>
                    <p>If you have any questions about these Terms of Service, please contact us at:</p>
                    <p>
                        <strong>LUPER AGRO LIMITED</strong><br>
                        <?php echo COMPANY_ADDRESS; ?><br>
                        Email: <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a><br>
                        Phone: <a href="tel:<?php echo COMPANY_PHONE; ?>"><?php echo COMPANY_PHONE; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>