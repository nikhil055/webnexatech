<?php 
$page_title = 'Seo Services';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'seo/seo-services.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/services/seo.jpg';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Search Engine Optimization (SEO)';
?>

<style>
    .page-banner {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $display_banner_img; ?>');
        background-size: cover;
        background-position: center;
        padding-top: 220px;
        padding-bottom: 100px;
        text-align: center;
        color: #fff;
    }
    .page-banner h2 {
        font-size: 55px;
        font-weight: 800;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .breadcrumb-custom {
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        display: inline-flex;
        padding: 10px 20px;
        border-radius: 30px;
        backdrop-filter: blur(5px);
    }
    .breadcrumb-custom .breadcrumb-item a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
    }
    .breadcrumb-custom .breadcrumb-item.active {
        color: #3C72FC;
        font-weight: 700;
    }
    .content-section {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .icon-card {
        display: flex;
        align-items: flex-start;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.07);
        margin-bottom: 20px;
        transition: all 0.3s ease;
        height: calc(100% - 20px);
    }
    .icon-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.1);
    }
    .icon-card .icon {
        font-size: 30px;
        color: #3C72FC;
        margin-right: 20px;
        min-width: 40px;
    }
    .icon-card h5 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .icon-card h5 a {
        text-decoration: none;
        color: inherit;
        transition: color 0.3s ease;
    }
    .icon-card h5 a:hover {
        color: #3C72FC;
    }
    .icon-card p {
        font-size: 15px;
        color: #666;
        margin-bottom: 0;
        line-height: 1.6;
    }
    .process-item {
        text-align: center;
        position: relative;
    }
    .process-item .process-icon {
        width: 90px;
        height: 90px;
        background: #f1f5ff;
        color: #3C72FC;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
        border: 5px solid #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }
    .process-item h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .timeline-section, .faq-section {
        background: #f8f9fa;
    }
    .pricing-table {
        border: 1px solid #ddd;
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
    }
    .pricing-table:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(60, 114, 252, 0.2);
        border-color: #3C72FC;
    }
    .pricing-table h3 {
        font-weight: 700;
    }
    .pricing-table .price {
        font-size: 48px;
        font-weight: 800;
        color: #3C72FC;
    }
    .pricing-table .price-desc {
        margin-bottom: 30px;
    }
    .pricing-table ul {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
        text-align: left;
    }
    .pricing-table ul li {
        margin-bottom: 15px;
    }
    .contact-cta {
        background: #f1f5ff;
    }
    .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: #3C72FC;
    }
    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(60, 114, 252, 0.25);
    }
</style>

<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="zoom-in">
                <h2>SEO Services</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SEO Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Search Engine Optimization</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Drive Growth with Expert SEO Strategies</h3>
                    <p class="lead mt-4">At Web Nexa, we elevate your digital presence with a comprehensive suite of SEO services designed to increase your visibility, attract qualified traffic, and convert visitors into loyal customers. Our data-driven approach ensures that every aspect of your online strategy is optimized for maximum impact and sustainable growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Our Approach</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Our Proven SEO Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon">1</div>
                    <h4>Discovery & Audit</h4>
                    <p>We start with a deep dive into your website, industry, and competitors to create a baseline and identify key opportunities.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon">2</div>
                    <h4>Strategy & Planning</h4>
                    <p>Based on our findings, we develop a custom SEO roadmap that outlines clear goals, KPIs, and a timeline for execution.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon">3</div>
                    <h4>Execution</h4>
                    <p>Our team implements on-page, off-page, and technical SEO optimizations according to the strategic plan.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon">4</div>
                    <h4>Analysis & Reporting</h4>
                    <p>We continuously monitor performance, provide transparent reports, and refine our strategy based on data-driven insights.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CORE OFFERINGS SECTION -->
<section class="content-section">
    <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <h3>Our Core SEO Disciplines</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <div class="text">
                        <h5><a href="<?php echo BASE_URL; ?>seo/technical-seo-audit.php">Technical SEO</a></h5>
                        <p>We build a strong foundation by ensuring your site is perfectly optimized for search engine crawlers. This includes site speed optimization, schema markup, crawlability audits, and indexation management.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-file-lines"></i></div>
                    <div class="text">
                        <h5>On-Page SEO</h5>
                        <p>We optimize every page of your site with in-depth keyword research, title and meta tag optimization, content audits, and internal linking strategies to maximize relevance and authority.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-globe"></i></div>
                    <div class="text">
                        <h5>Off-Page SEO & Link Building</h5>
                        <p>We increase your site's authority and trustworthiness by acquiring high-quality backlinks from relevant, reputable websites through content marketing and strategic outreach.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-map-location-dot"></i></div>
                    <div class="text">
                        <h5><a href="<?php echo BASE_URL; ?>seo/local-seo.php">Local SEO</a></h5>
                        <p>We put your business on the map by optimizing your Google Business Profile, building local citations, and managing reviews to dominate local search results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                     <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Our Advantage</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Why Partner with Web Nexa?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-simple"></i></div>
                    <div class="text">
                        <h5>Data-Driven Strategies</h5>
                        <p>We don't guess. Every decision we make is backed by data, competitor analysis, and in-depth research to ensure we're on the right track.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-eye"></i></div>
                    <div class="text">
                        <h5>Transparent Reporting</h5>
                        <p>You'll never be in the dark. We provide clear, comprehensive reports that show our progress and the direct impact of our work on your bottom line.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-users-gear"></i></div>
                    <div class="text">
                        <h5>A True Partnership</h5>
                        <p>We consider ourselves an extension of your team. We take the time to understand your business and work collaboratively towards your goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIMELINE SECTION -->
<section class="content-section timeline-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Results & Timeline</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>When Can You Expect Results?</h3>
                    <p class="lead mt-4">SEO is a long-term investment. While it's impossible to guarantee specific rankings in a specific timeframe, our strategic approach is designed to deliver sustainable growth. Here is a general timeline of what you can expect.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h4>Months 1-3: Foundation</h4>
                <p>We focus on technical audits, keyword research, on-page optimization, and setting up analytics. You'll start to see improvements in site health and crawling.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h4>Months 3-6: Momentum</h4>
                <p>Content creation and link building efforts begin to take effect. You can expect to see initial improvements in rankings for less competitive keywords.</p>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h4>Months 6+: Growth</h4>
                <p>As your site's authority grows, you'll see more significant gains in rankings, traffic, and conversions. We focus on refining the strategy for continued growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRICING SECTION -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Our Packages</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Find the Right Plan for Your Business</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5 d-flex align-items-stretch">
            <div class="col-lg-4 d-flex mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-table">
                    <h3>Foundation</h3>
                    <p class="price-desc">For small businesses and startups.</p>
                    <div class="price">$499<span class="fs-5">/mo</span></div>
                    <ul class="mt-4">
                        <li><i class="fa fa-check text-success me-2"></i>Up to 15 Keywords</li>
                        <li><i class="fa fa-check text-success me-2"></i>Technical SEO Audit</li>
                        <li><i class="fa fa-check text-success me-2"></i>On-Page Optimization</li>
                        <li><i class="fa fa-check text-success me-2"></i>GMB Optimization</li>
                        <li><i class="fa-times text-muted me-2"></i>Content Creation</li>
                        <li><i class="fa-times text-muted me-2"></i>Link Building</li>
                        <li><i class="fa fa-check text-success me-2"></i>Monthly Reporting</li>
                    </ul>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-secondary mt-auto">Choose Plan</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-table position-relative border-primary">
                    <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary">Most Popular</span></div>
                    <h3 class="text-primary">Growth Engine</h3>
                    <p class="price-desc">For growing businesses aiming to scale.</p>
                    <div class="price">$999<span class="fs-5">/mo</span></div>
                    <ul class="mt-4">
                        <li><i class="fa fa-check text-success me-2"></i>Up to 40 Keywords</li>
                        <li><i class="fa fa-check text-success me-2"></i>Advanced Technical SEO</li>
                        <li><i class="fa fa-check text-success me-2"></i>Advanced On-Page SEO</li>
                        <li><i class="fa fa-check text-success me-2"></i>GMB Management</li>
                        <li><i class="fa fa-check text-success me-2"></i>Content Creation (2/mo)</li>
                        <li><i class="fa fa-check text-success me-2"></i>Basic Link Building</li>
                        <li><i class="fa fa-check text-success me-2"></i>Bi-Weekly Reporting</li>
                    </ul>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-auto">Choose Plan</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-table">
                    <h3>Market Leader</h3>
                    <p class="price-desc">For established businesses & enterprises.</p>
                    <div class="price">Custom</div>
                    <ul class="mt-4">
                        <li><i class="fa fa-check text-success me-2"></i>Unlimited Keywords</li>
                        <li><i class="fa fa-check text-success me-2"></i>Full Technical Management</li>
                        <li><i class="fa fa-check text-success me-2"></i>Proactive On-Page Strategy</li>
                        <li><i class="fa fa-check text-success me-2"></i>GMB & Local SEO Mastery</li>
                        <li><i class="fa fa-check text-success me-2"></i>Comprehensive Content Plan</li>
                        <li><i class="fa fa-check text-success me-2"></i>Advanced Link Outreach</li>
                        <li><i class="fa fa-check text-success me-2"></i>Weekly Consultation & Reporting</li>
                    </ul>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-secondary mt-auto">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="content-section faq-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Questions?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Frequently Asked Questions</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Why is SEO important for my business?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                SEO is crucial because it increases the visibility of your website on search engines like Google. The higher you rank, the more likely potential customers are to find you when they're actively searching for your products or services. It drives organic (free) traffic, builds credibility, and delivers a high return on investment over time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is SEO better than paid ads (PPC)?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                They serve different purposes and work best together. PPC (Pay-Per-Click) ads offer immediate visibility and are great for targeted campaigns. SEO builds long-term, sustainable organic traffic and authority that you don't have to pay for per click. A balanced strategy often uses both for maximum effect.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do you build links for my website?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We focus on "white-hat" link building techniques that build long-term authority. This includes creating high-quality, shareable content (like blog posts and studies), guest blogging on reputable sites in your industry, outreach to journalists, and listing your business in quality directories. We never use spammy or harmful techniques.
                            </div>
                        </div>
                    </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can you guarantee a #1 ranking on Google?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                No reputable SEO professional can guarantee a #1 ranking. Google's algorithm is complex and constantly changing. However, our proven strategies and adherence to best practices give you the best possible chance to achieve high rankings for your target keywords and see significant growth in organic traffic.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section contact-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="ser-head text-center" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Let's Talk</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Ready to Boost Your Rankings?</h3>
                    <p class="lead mt-3">Contact us today to discuss your SEO needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>

