<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'technology/shopify-development.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/services/software.jpg';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Shopify Development';
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
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>technology/technology-services.php">Technology Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopify Development</li>
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
                            <span>E-commerce Mastery</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Scale Your Business with Expert Shopify Solutions</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>Shopify is the leading platform for modern e-commerce. Our specialized Shopify development team helps you design, build, and optimize high-converting online stores. Whether you're a startup or an established brand, we provide the technical expertise to make your Shopify store a global success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded shadow-lg" alt="Shopify Development">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <h3>Why Choose Shopify for Your Store?</h3>
                    <p class="mt-4">Shopify offers a secure, reliable, and incredibly scalable infrastructure for online selling. From intuitive management to a massive app ecosystem, it's built to help you sell more with less technical headache. We ensure your store is customized to match your brand's unique identity.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Lightning-fast load times and mobile optimization.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Industry-leading security and payment processing.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Seamless integration with marketing and social tools.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DELIVER SECTION -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="ser-head" data-aos="fade-up">
                    <h3>Our Shopify Services</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-store"></i></div>
                    <div class="text">
                        <h5>Store Setup & Configuration</h5>
                        <p>Complete store setup, including product cataloging, payment gateway integration, and shipping settings.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <div class="text">
                        <h5>Custom Shopify Theme Design</h5>
                        <p>Tailor-made Shopify themes designed to provide a unique and engaging shopping experience for your customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div>
                    <div class="text">
                        <h5>Migration to Shopify</h5>
                        <p>Seamlessly migrate your existing store from platforms like WooCommerce or Magento to Shopify with zero data loss.</p>
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
                    <h3>Ready to Launch Your Shopify Store?</h3>
                    <p class="lead mt-3">Contact us today to discuss your e-commerce needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
