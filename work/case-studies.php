<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-04.jpg');
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
        .case-study-item-v2 {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .case-study-item-v2:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
        }
        .case-study-item-v2 .image-wrapper {
            position: relative;
            height: 250px;
            overflow: hidden;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .case-study-item-v2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .case-study-item-v2:hover img {
            transform: scale(1.08);
        }
        .case-study-item-v2 .content-body {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .case-study-item-v2 .client-info {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .case-study-item-v2 .client-info i {
            margin-right: 8px;
            color: #3C72FC;
        }
        .case-study-item-v2 .main-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        .case-study-item-v2 .main-title a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .case-study-item-v2 .main-title a:hover {
            color: #3C72FC;
        }
        .case-study-item-v2 .brief-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
            flex-grow: 1;
        }
        .case-study-item-v2 .read-more-link {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: transform 0.3s ease;
        }
        .case-study-item-v2 .read-more-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        .case-study-item-v2 .read-more-link:hover i {
            transform: translateX(5px);
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Success Stories</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
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
                         <span>Real-World Impact</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Transforming Businesses with Innovative Solutions</h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <!-- Static Case Study 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/case_studies/69594103f1870_Screenshot_2026-01-02_195103-removebg-preview.png" class="img-fluid" alt="Client X E-commerce Redesign">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client X &nbsp; | &nbsp; <i class="fas fa-industry"></i> Retail E-commerce
                            </div>
                            <h4 class="main-title"><a href="#">E-commerce Platform Redesign & Optimization</a></h4>
                            <p class="brief-description">Revamped a lagging online store, leading to a 45% increase in conversion rates and 60% growth in annual online revenue within 12 months.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Static Case Study 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-2.jpg" class="img-fluid" alt="Client Y Mobile App Development">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client Y &nbsp; | &nbsp; <i class="fas fa-industry"></i> Healthcare Technology
                            </div>
                            <h4 class="main-title"><a href="#">Custom Mobile App for Patient Engagement</a></h4>
                            <p class="brief-description">Developed an intuitive mobile application for a healthcare provider, improving patient communication and appointment adherence by 35%.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Static Case Study 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-3.jpg" class="img-fluid" alt="Client Z SaaS Platform UX">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client Z &nbsp; | &nbsp; <i class="fas fa-industry"></i> Enterprise SaaS
                            </div>
                            <h4 class="main-title"><a href="#">Enterprise SaaS Platform UX/UI Enhancement</a></h4>
                            <p class="brief-description">Enhanced the user experience and interface of a complex enterprise SaaS platform, resulting in a 20% increase in user productivity.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Static Case Study 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-4.jpg" class="img-fluid" alt="Client A Digital Marketing Strategy">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client A &nbsp; | &nbsp; <i class="fas fa-industry"></i> Financial Services
                            </div>
                            <h4 class="main-title"><a href="#">Integrated Digital Marketing Strategy for FinTech</a></h4>
                            <p class="brief-description">Developed a holistic digital marketing campaign (SEO, PPC, Content) for a FinTech startup, achieving 150% growth in leads.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Static Case Study 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-5.jpg" class="img-fluid" alt="Client B Brand Identity">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client B &nbsp; | &nbsp; <i class="fas fa-industry"></i> Consumer Goods
                            </div>
                            <h4 class="main-title"><a href="#">Comprehensive Brand Identity & Packaging Design</a></h4>
                            <p class="brief-description">Created a captivating new brand identity and packaging for a consumer goods brand, significantly boosting market presence.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Static Case Study 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-6.jpg" class="img-fluid" alt="Client C Mobile Learning Platform">
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> Client C &nbsp; | &nbsp; <i class="fas fa-industry"></i> Education
                            </div>
                            <h4 class="main-title"><a href="#">Development of an Interactive Mobile Learning Platform</a></h4>
                            <p class="brief-description">Developed an engaging mobile learning platform for K-12 education, increasing user retention and learning outcomes by 25%.</p>
                            <a href="#" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
