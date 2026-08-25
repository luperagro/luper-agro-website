<?php
require_once __DIR__ . '/config/config.php';
include_once __DIR__ . '/includes/functions.php';

// Get article slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Article data
$articles = [
    'organic-fertilizer-future' => [
        'title' => 'The Future of Organic Fertilizer in Nigerian Agriculture',
        'category' => 'Agriculture',
        'date' => 'August 24, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'organic-fertilizer.jpg',
        'content' => '
            <h2>The Future of Organic Fertilizer in Nigerian Agriculture</h2>
            <p>Exploring how organic fertilizer is transforming Nigerian agriculture and improving soil health for sustainable food production.</p>
            
            <h2>Introduction</h2>
            <p>Organic fertilizer is revolutionizing Nigerian agriculture by providing natural, sustainable alternatives to synthetic inputs. As farmers across Nigeria face challenges with soil degradation and rising input costs, organic fertilizer offers a viable solution for improving soil health and crop productivity.</p>
            
            <h2>The Importance of Soil Health</h2>
            <p>Soil health is the foundation of agricultural productivity. Nigerian soils have been under increasing pressure from intensive farming practices, leading to nutrient depletion and reduced yields. Organic fertilizer helps restore soil health by improving soil structure, enhancing water retention, and promoting beneficial microbial activity.</p>
            
            <h2>Benefits of Organic Fertilizer</h2>
            <p>Organic fertilizer offers numerous benefits for Nigerian farmers:</p>
            <ul>
                <li><strong>Improved Soil Structure:</strong> Organic matter helps bind soil particles together, creating better soil structure and reducing erosion.</li>
                <li><strong>Enhanced Nutrient Availability:</strong> Organic fertilizers release nutrients slowly, providing a steady supply of essential elements for plant growth.</li>
                <li><strong>Reduced Environmental Impact:</strong> Organic fertilizers reduce the risk of water pollution and soil degradation associated with synthetic fertilizers.</li>
                <li><strong>Long-Term Sustainability:</strong> By building soil organic matter, organic fertilizers support long-term agricultural productivity.</li>
            </ul>
            
            <h2>Challenges and Opportunities</h2>
            <p>While organic fertilizer adoption in Nigeria faces challenges such as limited awareness and availability, the opportunities are significant. With growing demand for organic products and increasing environmental awareness, organic fertilizer represents a promising sector for Nigerian agriculture.</p>
            
            <h2>LUPER AGRO\'s Commitment</h2>
            <p>At LUPER AGRO LIMITED, we are committed to promoting organic fertilizer as a sustainable solution for Nigerian agriculture. Through our production initiatives and farmer training programs, we are working to make organic fertilizer more accessible to farmers across Benue State and beyond.</p>
            
            <h2>Conclusion</h2>
            <p>The future of Nigerian agriculture depends on sustainable practices that protect the environment while ensuring food security. Organic fertilizer is an essential tool for achieving this goal, and LUPER AGRO is proud to be at the forefront of this agricultural transformation.</p>
        '
    ],
    'sustainable-farming-practices' => [
        'title' => 'Sustainable Farming Practices for Modern Agriculture',
        'category' => 'Sustainability',
        'date' => 'August 24, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'sustainable-farming.jpg',
        'content' => '
            <h2>Introduction</h2>
            <p>Sustainable farming practices are essential for ensuring long-term agricultural productivity while protecting the environment. As Nigerian farmers face the challenges of climate change and resource scarcity, adopting sustainable farming methods has never been more important.</p>
            
            <h2>Key Sustainable Farming Practices</h2>
            <p>Several sustainable farming practices are gaining traction in Nigeria:</p>
            <ul>
                <li><strong>Crop Rotation:</strong> Alternating crops helps maintain soil fertility and reduce pest pressure.</li>
                <li><strong>Conservation Tillage:</strong> Reducing soil disturbance helps protect soil structure and organic matter.</li>
                <li><strong>Integrated Pest Management:</strong> Using biological and cultural methods to manage pests reduces reliance on chemical pesticides.</li>
                <li><strong>Water Conservation:</strong> Efficient irrigation and water management practices help conserve water resources.</li>
            </ul>
            
            <h2>Benefits of Sustainable Farming</h2>
            <p>Sustainable farming offers numerous benefits:</p>
            <ul>
                <li><strong>Environmental Protection:</strong> Reduced impact on soil, water, and biodiversity.</li>
                <li><strong>Economic Viability:</strong> Lower input costs and improved long-term productivity.</li>
                <li><strong>Food Security:</strong> More resilient agricultural systems that can withstand climate shocks.</li>
                <li><strong>Community Development:</strong> Support for local farmers and rural communities.</li>
            </ul>
            
            <h2>LUPER AGRO\'s Role</h2>
            <p>LUPER AGRO LIMITED is committed to promoting sustainable farming practices across Nigeria. Through our training programs, demonstration farms, and partnerships with local communities, we are helping farmers adopt sustainable practices that benefit both their farms and the environment.</p>
            
            <h2>Conclusion</h2>
            <p>As Nigeria works to achieve food security and agricultural development, sustainable farming practices will play an increasingly important role. LUPER AGRO is proud to be part of this movement, working alongside farmers to build a more sustainable agricultural future.</p>
        '
    ],
    'renewable-energy-agriculture' => [
        'title' => 'Renewable Energy Solutions for Nigerian Farms',
        'category' => 'Renewable Energy',
        'date' => 'August 24, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'renewable-energy.jpg',
        'content' => '
            <h2>Introduction</h2>
            <p>Renewable energy is transforming the agricultural sector in Nigeria, offering sustainable and cost-effective solutions for farm operations. From solar-powered irrigation to biogas systems, renewable energy technologies are helping farmers reduce their environmental impact and improve operational efficiency.</p>
            
            <h2>Renewable Energy Technologies for Agriculture</h2>
            <p>Several renewable energy technologies are particularly relevant for Nigerian agriculture:</p>
            <ul>
                <li><strong>Solar Energy:</strong> Solar panels provide clean energy for water pumping, lighting, and equipment operation.</li>
                <li><strong>Biogas:</strong> Converting agricultural waste into biogas provides energy for cooking and electricity generation.</li>
                <li><strong>Wind Energy:</strong> Wind turbines can provide renewable energy for farm operations in suitable locations.</li>
                <li><strong>Energy Efficiency:</strong> Improving energy efficiency reduces costs and environmental impact.</li>
            </ul>
            
            <h2>Benefits of Renewable Energy in Agriculture</h2>
            <p>Renewable energy offers significant benefits for Nigerian farms:</p>
            <ul>
                <li><strong>Reduced Operating Costs:</strong> Lower energy costs through clean, renewable sources.</li>
                <li><strong>Environmental Protection:</strong> Reduced carbon emissions and environmental impact.</li>
                <li><strong>Energy Independence:</strong> Reduced dependence on unreliable grid power.</li>
                <li><strong>Improved Productivity:</strong> Reliable energy access supports agricultural processing and value addition.</li>
            </ul>
            
            <h2>LUPER AGRO\'s Commitment</h2>
            <p>LUPER AGRO LIMITED is committed to promoting renewable energy in Nigerian agriculture. Through our renewable energy initiatives, we are helping farmers access clean, affordable energy solutions that support sustainable farm operations.</p>
            
            <h2>Conclusion</h2>
            <p>Renewable energy is an essential component of sustainable agriculture in Nigeria. By embracing clean energy technologies, Nigerian farmers can reduce costs, protect the environment, and build more resilient agricultural operations.</p>
        '
    ],
    'crop-production-tips' => [
        'title' => 'Modern Crop Production Techniques for Nigerian Farmers',
        'category' => 'Crop Production',
        'date' => 'August 23, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'crop-production.jpg',
        'content' => '
            <h2>Introduction</h2>
            <p>Modern crop production techniques are helping Nigerian farmers increase yields, improve food security, and practice sustainable agriculture. By adopting innovative farming methods, farmers can optimize their production while protecting the environment.</p>
            
            <h2>Modern Techniques</h2>
            <ul>
                <li><strong>Precision Agriculture:</strong> Using technology to optimize inputs and maximize yields.</li>
                <li><strong>Improved Seeds:</strong> Using high-quality, disease-resistant seed varieties.</li>
                <li><strong>Irrigation Management:</strong> Efficient water use through modern irrigation systems.</li>
                <li><strong>Soil Testing:</strong> Regular soil analysis for optimal nutrient management.</li>
            </ul>
            
            <h2>Benefits</h2>
            <p>Modern crop production techniques offer numerous benefits including higher yields, reduced input costs, improved food security, and sustainable farming practices.</p>
            
            <h2>LUPER AGRO\'s Commitment</h2>
            <p>LUPER AGRO is committed to promoting modern crop production techniques among Nigerian farmers through training, demonstration farms, and partnerships.</p>
        '
    ],
    'animal-production-tips' => [
        'title' => 'Best Practices for Animal Production in Nigeria',
        'category' => 'Livestock',
        'date' => 'August 22, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'animal-production.jpg',
        'content' => '
            <h2>Introduction</h2>
            <p>Animal production is a vital component of Nigerian agriculture, providing meat, milk, and other products. Best practices in animal production ensure animal welfare, productivity, and sustainable farming.</p>
            
            <h2>Key Practices</h2>
            <ul>
                <li><strong>Animal Welfare:</strong> Providing proper housing, nutrition, and healthcare.</li>
                <li><strong>Feeding:</strong> Balanced nutrition for optimal growth and production.</li>
                <li><strong>Health Management:</strong> Regular veterinary care and disease prevention.</li>
                <li><strong>Breeding:</strong> Using improved genetics for better productivity.</li>
            </ul>
            
            <h2>Benefits</h2>
            <p>Best practices in animal production lead to healthier animals, higher productivity, better product quality, and sustainable livestock farming.</p>
            
            <h2>LUPER AGRO\'s Commitment</h2>
            <p>LUPER AGRO is committed to promoting best practices in animal production, supporting farmers with training and resources for sustainable livestock management.</p>
        '
    ],
    'agribusiness-nigeria' => [
        'title' => 'Agribusiness Opportunities in Nigeria',
        'category' => 'Agribusiness',
        'date' => 'August 21, 2026',
        'author' => 'LUPER AGRO Team',
        'image' => 'agribusiness.jpg',
        'content' => '
            <h2>Introduction</h2>
            <p>Nigeria offers significant agribusiness opportunities across the agricultural value chain. From production to processing and marketing, agribusiness is driving economic growth and creating jobs.</p>
            
            <h2>Opportunities</h2>
            <ul>
                <li><strong>Crop Production:</strong> Commercial farming of grains, vegetables, and cash crops.</li>
                <li><strong>Processing:</strong> Value addition through processing agricultural products.</li>
                <li><strong>Marketing:</strong> Connecting farmers to markets and consumers.</li>
                <li><strong>Technology:</strong> Agricultural technology and innovation solutions.</li>
            </ul>
            
            <h2>LUPER AGRO\'s Role</h2>
            <p>LUPER AGRO is actively involved in agribusiness development, supporting farmers and entrepreneurs through training, partnerships, and access to markets.</p>
        '
    ]
];

// Get the article
$article = isset($articles[$slug]) ? $articles[$slug] : null;

if (!$article) {
    header('Location: ' . SITE_URL . 'blog.php');
    exit();
}

$pageTitle = $article['title'];
$pageDescription = substr(strip_tags($article['content']), 0, 160);

include_once __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><span class="text-gold">Insights</span></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>blog.php">Insights</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $article['title']; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="article-header mb-4">
                    <div class="d-flex gap-3 text-muted mb-3 flex-wrap">
                        <span><i class="far fa-calendar-alt me-1"></i> <?php echo $article['date']; ?></span>
                        <span><i class="far fa-user me-1"></i> <?php echo $article['author']; ?></span>
                        <span><span class="badge" style="background: var(--gold-primary); color: white;"><?php echo $article['category']; ?></span></span>
                        <span><i class="far fa-clock me-1"></i> <?php echo readingTime($article['content']); ?></span>
                    </div>
                    <h1 class="mb-4"><?php echo $article['title']; ?></h1>
                </div>
                
                <div class="article-featured-image mb-4">
                    <img src="<?php echo SITE_URL; ?>assets/images/blog/<?php echo $article['image']; ?>" 
                         alt="<?php echo $article['title']; ?>" 
                         class="img-fluid rounded-4 shadow"
                         onerror="this.src='<?php echo SITE_URL; ?>assets/images/general/placeholder.jpg'">
                </div>
                
                <div class="article-content">
                    <?php echo $article['content']; ?>
                </div>
                
                <hr class="my-5">
                
                <div class="article-footer">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <div>
                            <span class="text-muted me-2">Share this article:</span>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <a href="<?php echo SITE_URL; ?>blog.php" class="btn btn-gold"><i class="fas fa-arrow-left me-2"></i>Back to Insights</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>