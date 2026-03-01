<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'seo/local-seo.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/banner/banner-02.jpg';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Local SEO Services';
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
        .contact-cta {
            background: #f8f9fa;
        }
    </style>

    <section class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="zoom-in">
                        <h2><?php echo $display_banner_title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>seo/seo-services.php">SEO Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Local SEO</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ser-head text-center mb-5" data-aos="fade-up">
                        <div class="hed text-center">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Connect with Your Community</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Be the Top Choice for Local Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>For businesses with physical locations, dominating local search is essential. Our Local SEO services are designed to put your business on the map—literally. We optimize your online presence to attract customers in your immediate vicinity, driving foot traffic, phone calls, and website visits from a high-intent local audience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/why/side.jpg" class="img-fluid rounded shadow-lg" alt="Local SEO Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why It Matters</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Your Next Customer is Searching Nearby</h3>
                    <p class="mt-4">Nearly half of all Google searches have local intent. When someone searches for "pizza near me" or "electrician in [Your City]," you need to be at the top of the results. Local SEO is the practice of optimizing your online presence to attract more business from relevant local searches. It's the most effective way to drive foot traffic and phone calls directly to your business.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Connect with customers actively looking to buy locally.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Increase visibility in Google Maps and the "Local Pack".</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Build trust and credibility with local reviews and accurate information.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW WE DO LOCAL SEO SECTION -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Our Process</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>How We Drive Local Success</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-map-pin"></i></div>
                    <h4>Profile Optimization</h4>
                    <p>We optimize your Google Business Profile (GBP) and other local directories with accurate, consistent, and compelling information.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-star-half-stroke"></i></div>
                    <h4>Reputation Management</h4>
                    <p>We help you generate and manage positive online reviews, building trust and improving your local search ranking factors.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-sitemap"></i></div>
                    <h4>Local Citation Building</h4>
                    <p>Building a strong network of consistent business listings across relevant local online directories to boost authority.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Localized Content</h4>
                    <p>Creating location-specific content and on-page optimizations that attract local searchers and answer their unique questions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT YOU RECEIVE SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Your Deliverables</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>What You Get from Our Local SEO Services</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-brands fa-google"></i></div>
                    <div class="text">
                        <h5>Optimized GBP Listing</h5>
                        <p>A fully optimized and regularly updated Google Business Profile to maximize your visibility in local search and maps.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                    <div class="text">
                        <h5>Enhanced Local Citations</h5>
                        <p>Consistent NAP (Name, Address, Phone) information across high-authority directories, boosting your local ranking signals.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-bar"></i></div>
                    <div class="text">
                        <h5>Monthly Performance Reports</h5>
                        <p>Transparent reports tracking local rankings, GBP insights, review growth, and overall traffic impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHO IS THIS FOR SECTION -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <h3>Is Local SEO Right For You?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Brick-and-Mortar Businesses</h5>
                <p>Retail stores, restaurants, cafes, and any business that relies on customers visiting a physical location.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Service-Area Businesses</h5>
                <p>Plumbers, electricians, landscapers, and any business that travels to their customers' locations.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Practitioners</h5>
                <p>Doctors, dentists, lawyers, and other professionals who serve a specific geographic area.</p>
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
                    <h3>Ready to Dominate Your Local Market?</h3>
                    <p class="lead mt-3">Contact us today to discuss your Local SEO needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
