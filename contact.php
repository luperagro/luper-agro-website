<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Contact Us - Get in Touch with LUPER AGRO';
$pageDescription = 'Contact LUPER AGRO LIMITED for agricultural services, organic fertilizer, crop production, animal production, and renewable energy solutions in Nigeria.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Contact <span class="text-gold">Us</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Get in touch with our agricultural team.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="contact-info-card animate-on-scroll">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h5>Visit Us</h5>
                    <p><?php echo COMPANY_ADDRESS; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-card animate-on-scroll" style="animation-delay: 0.1s;">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div>
                    <h5>Call Us</h5>
                    <p><a href="tel:<?php echo COMPANY_PHONE; ?>"><?php echo COMPANY_PHONE; ?></a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-card animate-on-scroll" style="animation-delay: 0.2s;">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <h5>Email Us</h5>
                    <p><a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="section-padding bg-light-beige">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <span class="section-label">Get in Touch</span>
                    <h2>Send Us a <span class="text-gold">Message</span></h2>
                    <p class="section-subtitle">We'd love to hear from you. Fill out the form below and we'll get back to you shortly.</p>
                </div>
                
                <form class="contact-form" method="POST" action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map / Additional Info -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3>Connect With <span class="text-gold">Us</span></h3>
                <p>We're here to help with all your agricultural needs. Whether you're looking for organic fertilizer, crop production support, animal production services, or renewable energy solutions, our team is ready to assist you.</p>
                <div class="mt-4">
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20LUPER%20AGRO%20LIMITED%2C%20I%20would%20like%20to%20make%20an%20enquiry%20about%20your%20agricultural%20services." class="btn btn-success" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp
                    </a>
                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="btn btn-outline-primary ms-2">
                        <i class="fas fa-envelope me-2"></i>Send Email
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="bg-light rounded-4 p-4" style="min-height: 250px;">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <i class="fas fa-map-pin" style="font-size: 3rem; color: var(--primary-green);"></i>
                            <p class="mt-3"><strong>LUPER AGRO LIMITED</strong><br>
                            <?php echo COMPANY_ADDRESS; ?></p>
                            <p class="text-muted"><i class="fas fa-phone me-2"></i><?php echo COMPANY_PHONE; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>