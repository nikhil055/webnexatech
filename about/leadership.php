<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'about/leadership.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/banner/banner-02.jpg';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Our Leadership';
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
        .leader-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            padding: 30px;
            margin-bottom: 30px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }
        .leader-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        .leader-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #f1f5ff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .leader-card h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #333;
        }
        .leader-card p.title {
            font-size: 16px;
            color: #3C72FC;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .leader-card p.bio {
            font-size: 15px;
            color: #666;
            line-height: 1.6;
            flex-grow: 1;
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
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>about/about.php">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leadership</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRODUCTION SECTION -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="ser-head" data-aos="fade-up">
                        <div class="hed">
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                            <span>Guiding Our Vision</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>The Minds Behind Web Nexa's Success</h3>
                        <p class="lead mt-4">At Web Nexa, our leadership team brings together a diverse blend of expertise, vision, and passion for digital innovation. With years of experience across various industries, they are committed to fostering a culture of excellence, driving strategic growth, and delivering unparalleled value to our clients. Get to know the individuals steering our company towards a future of digital transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LEADER PROFILES SECTION -->
    <section class="content-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="leader-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/team/team-member-1.jpg" alt="[Leader Name] Photo">
                        <h4>[Leader Name]</h4>
                        <p class="title">Chief Executive Officer (CEO)</p>
                        <p class="bio">A visionary leader with over 20 years of experience in the tech industry, [Leader Name] founded Web Nexa with the goal of revolutionizing digital services. Their strategic insight and dedication to innovation have been instrumental in the company's growth and success.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="leader-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/team/team-member-2.jpg" alt="[Leader Name] Photo">
                        <h4>[Leader Name]</h4>
                        <p class="title">Chief Technology Officer (CTO)</p>
                        <p class="bio">As CTO, [Leader Name] is the driving force behind Web Nexa's technological advancements. With a deep expertise in software architecture and emerging technologies, they ensure our solutions are robust, scalable, and at the forefront of the industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="leader-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/team/team-member-3.jpg" alt="[Leader Name] Photo">
                        <h4>[Leader Name]</h4>
                        <p class="title">Chief Marketing Officer (CMO)</p>
                        <p class="bio">[Leader Name] leads our dynamic marketing efforts, shaping Web Nexa's brand presence and client acquisition strategies. Their innovative approach to digital marketing ensures our message resonates with our audience and drives business growth.</p>
                    </div>
                </div>
                <!-- Add more leader cards as needed -->
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
                            <span>Connect with Us</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Inspired by Our Visionaries?</h3>
                        <p class="lead mt-3">Learn more about our team and how our leadership guides our commitment to your success. Contact us today.</p>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
