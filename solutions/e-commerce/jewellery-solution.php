<?php include_once __DIR__ . '/../../config.php'; include_once __DIR__ . '/../../header.php'; ?>
<?php 
include_once __DIR__ . '/../../backend/db.php';
$page_file = 'solutions/e-commerce/jewellery-solution.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/header-icon/solution/Jewellery.png';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Jewellery E-commerce Solution';
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
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>solutions.php">Solutions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jewellery Solution</li>
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
                            <span>Showcase Brilliance Online</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>A Dazzling E-commerce Experience for Jewellery</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>Selling jewellery online requires an elegant and trustworthy digital storefront that showcases the intricate details of each piece. Our Jewellery E-commerce Solution provides a sophisticated platform with features specifically designed for high-value items, helping you create a luxurious and secure shopping experience that converts browsers into buyers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Jewellery.png" class="img-fluid rounded shadow-lg" alt="Jewellery E-commerce Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why Jewellery E-commerce?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Present Your Precious Pieces with Trust and Elegance Online</h3>
                    <p class="mt-4">The online jewellery market demands an e-commerce platform that can convey trust, luxury, and meticulous detail. High-value items like jewellery require sophisticated presentation, secure transactions, and features that allow customers to examine every facet of a piece digitally. An expertly designed online store extends your reach globally, provides a personalized shopping experience, and builds credibility through transparent product information and secure processes. Showcase the artistry and value of your collections with confidence.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Showcase intricate details with high-resolution imagery and interactive views.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Build customer trust through transparency and secure high-value transactions.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Expand your market globally and offer a luxurious online shopping experience.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR JEWELLERY E-COMMERCE SOLUTION PROCESS SECTION -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <div class="hed">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Our Workflow</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>How We Craft Your Dazzling Jewellery Store</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-gem"></i></div>
                    <h4>Brand & Product Immersion</h4>
                    <p>Understanding your brand's unique story, the craftsmanship of your pieces, and the specific needs for showcasing high-value jewellery.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                    <h4>Interactive Display Design</h4>
                    <p>Designing elegant product pages with high-res imagery, zoom, 360-views, and customization options for an immersive shopping experience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-lock"></i></div>
                    <h4>Secure E-commerce Development</h4>
                    <p>Building a robust and secure platform for high-value transactions, integrated with certified payment gateways and inventory management.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    <h4>Launch & Customer Engagement</h4>
                    <p>Launching your online store and integrating tools for customer support, virtual consultations, and luxury marketing campaigns.</p>
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
                    <h3>What Our Jewellery E-commerce Solution Delivers</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-store-alt"></i></div>
                    <div class="text">
                        <h5>Luxurious Digital Showroom</h5>
                        <p>A sophisticated and secure online store designed to showcase your exquisite jewellery collections with unparalleled visual detail.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-lock"></i></div>
                    <div class="text">
                        <h5>Secure & Trustworthy Shopping Experience</h5>
                        <p>Advanced security features, transparent product information, and reliable payment gateways for peace of mind in high-value purchases.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div class="text">
                        <h5>Global Reach & Enhanced Customer Engagement</h5>
                        <p>Expand your market access while providing interactive tools and personalized service that elevate the customer journey.</p>
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
                    <h3>Who Benefits from Our Jewellery E-commerce Solution?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Independent Jewellers & Boutiques</h5>
                <p>Expanding their reach beyond physical locations and offering a sophisticated online shopping experience to a wider audience.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Luxury Jewellery Brands</h5>
                <p>Seeking an online platform that reflects the prestige and quality of their high-value collections, with secure and elegant presentation.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Craftsmen & Custom Jewellery Designers</h5>
                <p>Providing a platform to showcase unique, handcrafted pieces and offer customization options to discerning clients worldwide.</p>
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
                    <h3>Ready to Shine Online with Your Jewellery Brand?</h3>
                    <p class="lead mt-3">Contact us today to discuss your e-commerce needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../../footer.php'; ?>
