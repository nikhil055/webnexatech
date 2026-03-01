<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'creative/creative-services.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/services/creativity.png';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Creative Services';
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
    .contact-cta {
        background: #f8f9fa;
    }
</style>

<section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $display_banner_title; ?></h2>                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Creative Services</li>
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
                        <span>Innovative Solutions</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Transforming Ideas into Captivating Visuals and Experiences</h3>
                    <p class="lead mt-4">At Web Nexa, creativity is at the heart of everything we do. Our team of designers, strategists, and storytellers work collaboratively to bring your brand's vision to life. From striking visual identities to engaging multimedia content, we craft compelling creative solutions that resonate with your audience and drive measurable results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/services/creativity.png" class="img-fluid rounded shadow-lg" alt="Creative Services Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why Creative?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Stand Out in a Crowded Digital World</h3>
                    <p class="mt-4">In today's competitive landscape, compelling creative is not just an option, it's a necessity. High-quality design and engaging content are vital for capturing attention, building brand recognition, and fostering emotional connections with your audience. Our creative services ensure your brand not only looks good but also communicates effectively and leaves a lasting impression.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Build a strong, memorable brand identity.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Increase audience engagement and recall.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Communicate your message effectively across all platforms.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR CREATIVE PROCESS SECTION -->
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
                    <h3>Our Creative Design Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Concept & Strategy</h4>
                    <p>We start by understanding your goals, audience, and brand to develop a compelling creative brief and strategy.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-pencil-ruler"></i></div>
                    <h4>Design & Development</h4>
                    <p>Our designers bring concepts to life, creating initial drafts, mockups, and prototypes using industry-leading tools.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-eye"></i></div>
                    <h4>Review & Refinement</h4>
                    <p>We present our work for your feedback, iterating and refining until the creative perfectly aligns with your vision.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-rocket"></i></div>
                    <h4>Delivery & Launch</h4>
                    <p>Final assets are delivered in all necessary formats, ready for seamless integration and deployment across your platforms.</p>
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
                    <h3>What Our Creative Services Deliver</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-bezier-curve"></i></div>
                    <div class="text">
                        <h5>Unique Brand Identity</h5>
                        <p>Logos, color palettes, typography, and brand guidelines that capture your essence and differentiate you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-photo-video"></i></div>
                    <div class="text">
                        <h5>Engaging Visual Assets</h5>
                        <p>High-quality graphics, photos, and videos for your website, social media, advertising, and marketing materials.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-display"></i></div>
                    <div class="text">
                        <h5>Cohesive Digital Presence</h5>
                        <p>Ensuring your brand's look and feel is consistent and professional across all online and offline touchpoints.</p>
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
                    <h3>Who Benefits from Creative Services?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Startups & New Brands</h5>
                <p>Establishing a memorable visual identity and brand voice from the ground up to make a strong market entry.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Established Businesses</h5>
                <p>Refreshing an existing brand, creating new campaigns, or expanding visual assets for evolving marketing needs.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Digital Marketing Agencies</h5>
                <p>Partnering to provide high-quality creative assets for client campaigns, from web design to video production.</p>
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
                    <h3>Ready to Ignite Your Brand's Creativity?</h3>
                    <p class="lead mt-3">Contact us today to discuss your creative needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
