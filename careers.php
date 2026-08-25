<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

$pageTitle = 'Careers - Join LUPER AGRO Team';
$pageDescription = 'Explore career opportunities at LUPER AGRO LIMITED. Join our team and contribute to sustainable agriculture in Nigeria.';

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Careers at <span class="text-gold">LUPER AGRO</span></h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.2rem;">Join our team and build a career in sustainable agriculture.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Careers Content -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <span class="section-label">Join Us</span>
                    <h2>Build Your Career in <span class="text-gold">Agriculture</span></h2>
                    <p>At LUPER AGRO LIMITED, we're always looking for passionate individuals who want to make a difference in Nigerian agriculture. Join our team and help us build a sustainable agricultural future.</p>
                </div>
                
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Current Openings:</strong> We are currently accepting applications from interested candidates. Please send your CV and cover letter to <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                </div>
                
                <!-- Application Form -->
                <div class="mt-5">
                    <h4 class="mb-4">Submit Your Application</h4>
                    <form method="POST" action="" enctype="multipart/form-data">
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
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="position" class="form-label">Position Applying For *</label>
                                <select class="form-select" id="position" name="position" required>
                                    <option value="">Select a position...</option>
                                    <option value="Agricultural Officer">Agricultural Officer</option>
                                    <option value="Farm Manager">Farm Manager</option>
                                    <option value="Organic Fertilizer Specialist">Organic Fertilizer Specialist</option>
                                    <option value="Livestock Specialist">Livestock Specialist</option>
                                    <option value="Renewable Energy Technician">Renewable Energy Technician</option>
                                    <option value="Agribusiness Development Officer">Agribusiness Development Officer</option>
                                    <option value="Marketing Officer">Marketing Officer</option>
                                    <option value="Administrative Officer">Administrative Officer</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="cover_letter" class="form-label">Cover Letter</label>
                                <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4" placeholder="Tell us why you'd like to join LUPER AGRO..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="cv" class="form-label">Upload CV (PDF or Word) *</label>
                                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                                <small class="text-muted">Maximum file size: 5MB. Accepted formats: PDF, DOC, DOCX</small>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Application <i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="mt-5 pt-4 border-top">
                    <h5>Why Work With Us?</h5>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                                <div>
                                    <h6>Meaningful Work</h6>
                                    <p style="font-size: 0.9rem;">Contribute to sustainable agriculture and food security.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
                                <div>
                                    <h6>Learning & Growth</h6>
                                    <p style="font-size: 0.9rem;">Opportunities for professional development and growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-users"></i></div>
                                <div>
                                    <h6>Supportive Team</h6>
                                    <p style="font-size: 0.9rem;">Work with passionate professionals in agriculture.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-globe-africa"></i></div>
                                <div>
                                    <h6>Community Impact</h6>
                                    <p style="font-size: 0.9rem;">Make a difference in Nigerian communities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>