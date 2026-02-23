<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-02.jpg');
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
        .award-item-v2 {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            text-align: center;
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .award-item-v2:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }
        .award-item-v2 .award-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin: 0 auto 20px auto;
            transition: transform 0.3s ease;
        }
        .award-item-v2:hover .award-image {
            transform: scale(1.05);
        }
        .award-item-v2 .award-year {
            font-size: 1.1rem;
            font-weight: 700;
            color: #3C72FC;
            margin-bottom: 10px;
        }
        .award-item-v2 .award-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .award-item-v2 .awarding-body {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
        }
        .award-item-v2 .award-description {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        .award-item-v2 .award-link {
            display: inline-block;
            color: #3C72FC;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #3C72FC;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .award-item-v2 .award-link:hover {
            background-color: #3C72FC;
            color: #fff;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Awards & Recognition</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Awards</li>
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
                         <span>Recognition of Excellence</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Celebrating Our Achievements and Industry Recognition</h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <!-- Static Award Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-1.png" class="award-image" alt="Best Digital Agency Award">
                        <div class="award-year">2023</div>
                        <h4 class="award-title">Best Digital Agency</h4>
                        <p class="awarding-body">Global Digital Excellence Awards</p>
                        <p class="award-description">Recognized for outstanding innovation and client success in digital marketing solutions.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
                <!-- Static Award Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-2.png" class="award-image" alt="Top Web Development Firm">
                        <div class="award-year">2022</div>
                        <h4 class="award-title">Top Web Development Firm</h4>
                        <p class="awarding-body">Tech Innovators Magazine</p>
                        <p class="award-description">Honored for delivering cutting-edge, scalable, and user-centric web development projects.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
                <!-- Static Award Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-3.png" class="award-image" alt="Excellence in Mobile App Design">
                        <div class="award-year">2021</div>
                        <h4 class="award-title">Excellence in Mobile App Design</h4>
                        <p class="awarding-body">Mobile Tech Summit</p>
                        <p class="award-description">Awarded for creating highly intuitive and engaging mobile applications with superior UX/UI.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
                <!-- Static Award Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-4.png" class="award-image" alt="Best SEO Campaign">
                        <div class="award-year">2023</div>
                        <h4 class="award-title">Best SEO Campaign</h4>
                        <p class="awarding-body">Search Engine Marketing Awards</p>
                        <p class="award-description">Recognized for a data-driven SEO campaign that achieved significant organic traffic growth.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
                <!-- Static Award Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-5.png" class="award-image" alt="Creative Agency of the Year">
                        <div class="award-year">2022</div>
                        <h4 class="award-title">Creative Agency of the Year</h4>
                        <p class="awarding-body">National Creative Industries</p>
                        <p class="award-description">Honored for innovative and impactful creative solutions across various client projects.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
                <!-- Static Award Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="award-item-v2">
                        <img src="<?php echo BASE_URL; ?>assets/images/awards/award-6.png" class="award-image" alt="Excellence in Content Marketing">
                        <div class="award-year">2021</div>
                        <h4 class="award-title">Excellence in Content Marketing</h4>
                        <p class="awarding-body">Content Marketing Institute</p>
                        <p class="award-description">Awarded for strategic content campaigns that built authority and generated high-quality leads.</p>
                        <a href="#" target="_blank" class="award-link">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
