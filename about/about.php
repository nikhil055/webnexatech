<?php 
$page_title = 'About';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'about/about.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/about/about.png';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'About Us';
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
        .mission-vision-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            height: 100%;
        }
        .mission-vision-card i {
            font-size: 45px;
            color: #3C72FC;
            margin-bottom: 20px;
        }
        .mission-vision-card h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .mission-vision-card p {
            font-size: 16px;
            color: #666;
            line-height: 1.7;
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
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRODUCTION/STORY SECTION -->
    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <img src="<?php echo BASE_URL; ?>assets/images/about/about.png" class="img-fluid rounded shadow-lg" alt="About Web Nexa">
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="ser-head text-start">
                        <div class="hed text-start">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Our Journey</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Innovating the Digital Landscape Since 2010</h3>
                        <p class="mt-4">Founded in 2010, Web Nexa began with a simple yet ambitious goal: to empower businesses with cutting-edge digital solutions. What started as a small team of passionate technologists has grown into a leading digital agency, driven by innovation, creativity, and an unwavering commitment to client success. We believe in building partnerships that go beyond projects, fostering growth and delivering tangible results that help our clients thrive in an ever-evolving digital world.</p>
                        <p>Our journey has been marked by continuous learning, adapting to new technologies, and a deep understanding of market dynamics. We pride ourselves on our client-centric approach, transforming complex challenges into seamless, impactful digital experiences.</p>
                        <a href="<?php echo BASE_URL; ?>about/leadership.php" class="btn btn-style-one mt-4">Meet Our Leadership</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION, VISION, VALUES SECTION -->
    <section class="content-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ser-head" data-aos="fade-up">
                        <div class="hed">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Our Core</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Driving Principles of Web Nexa</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-vision-card">
                        <i class="fa-solid fa-bullseye"></i>
                        <h4>Our Mission</h4>
                        <p>To deliver innovative, high-quality digital solutions that empower businesses to achieve their full online potential and sustainable growth.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mission-vision-card">
                        <i class="fa-solid fa-binoculars"></i>
                        <h4>Our Vision</h4>
                        <p>To be the leading digital transformation partner, recognized globally for our expertise, integrity, and client-centric approach.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="mission-vision-card">
                        <i class="fa-solid fa-handshake-angle"></i>
                        <h4>Our Values</h4>
                        <p>Integrity, Innovation, Collaboration, Excellence, and Client Success are the pillars of everything we do.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ser-head" data-aos="fade-up">
                        <div class="hed">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Why Us?</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>The Web Nexa Advantage</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-card w-100">
                        <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                        <div class="text">
                            <h5>Innovative Solutions</h5>
                            <p>We leverage the latest technologies and creative strategies to build solutions that are not just current, but future-proof.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-card w-100">
                        <div class="icon"><i class="fa-solid fa-users-gear"></i></div>
                        <div class="text">
                            <h5>Expert Team</h5>
                            <p>Our diverse team of experts brings a wealth of experience, creativity, and technical prowess to every project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-card w-100">
                        <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                        <div class="text">
                            <h5>Client-Centric Approach</h5>
                            <p>Your success is our priority. We listen, understand, and collaborate closely to deliver solutions perfectly aligned with your goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="content-section contact-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="ser-head text-center" data-aos="fade-up">
                        <div class="hed text-center">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Partner with Us</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Ready to Transform Your Digital Presence?</h3>
                        <p class="lead mt-3">Let's discuss how Web Nexa can help you achieve your business objectives. Contact us for a consultation today.</p>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
