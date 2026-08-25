<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Privacy Policy - LUPER AGRO LIMITED';
$pageDescription = 'Read LUPER AGRO LIMITED\'s privacy policy. Learn how we collect, use, and protect your personal information.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Privacy <span class="text-gold">Policy</span></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
                    <p>LUPER AGRO LIMITED ("we", "our", "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information when you visit our website or interact with us.</p>
                    
                    <h2>Information We Collect</h2>
                    <p>We may collect the following types of information:</p>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, email address, phone number, and other contact details you provide through our contact forms.</li>
                        <li><strong>Usage Data:</strong> Information about how you interact with our website, including pages visited and time spent.</li>
                        <li><strong>Technical Data:</strong> IP address, browser type, device information, and other technical details.</li>
                    </ul>
                    
                    <h2>How We Use Your Information</h2>
                    <p>We use your information to:</p>
                    <ul>
                        <li>Respond to your inquiries and provide customer support</li>
                        <li>Send you information about our services and updates</li>
                        <li>Improve our website and services</li>
                        <li>Comply with legal obligations</li>
                    </ul>
                    
                    <h2>Information Sharing</h2>
                    <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with trusted partners who assist us in operating our website and providing our services, subject to strict confidentiality agreements.</p>
                    
                    <h2>Data Security</h2>
                    <p>We implement appropriate security measures to protect your personal information from unauthorized access, disclosure, or alteration.</p>
                    
                    <h2>Cookies</h2>
                    <p>Our website may use cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings.</p>
                    
                    <h2>Your Rights</h2>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Access your personal information</li>
                        <li>Request correction of your personal information</li>
                        <li>Request deletion of your personal information</li>
                        <li>Opt-out of receiving marketing communications</li>
                    </ul>
                    
                    <h2>Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                    <p>
                        <strong>LUPER AGRO LIMITED</strong><br>
                        <?php echo COMPANY_ADDRESS; ?><br>
                        Email: <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a><br>
                        Phone: <a href="tel:<?php echo COMPANY_PHONE; ?>"><?php echo COMPANY_PHONE; ?></a>
                    </p>
                    
                    <h2>Changes to This Policy</h2>
                    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>