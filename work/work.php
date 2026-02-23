<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-03.jpg');
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
        .work-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .work-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        .work-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .work-card:hover img {
            transform: scale(1.05);
        }
        .work-card .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .work-card .project-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
            transition: color 0.3s ease;
        }
        .work-card .project-title a {
            color: inherit;
            text-decoration: none;
        }
        .work-card:hover .project-title a {
            color: #3C72FC;
        }
        .work-card .project-description {
            font-size: 15px;
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .work-card .view-project {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s ease;
            margin-top: auto; /* Push to bottom */
        }
        .work-card .view-project i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        .work-card:hover .view-project i {
            transform: translateX(5px);
        }
        .work-card .project-date {
            font-size: 13px;
            color: #999;
            margin-top: 15px;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Work</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Work</li>
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
                         <span>Our Creative Projects</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Explore Our Latest Creations</h3>
                   </div>
                </div>
           </div>
            <div class="row justify-content-center">
                <!-- Static Work Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-1.jpg" class="img-fluid" alt="Project Title 1">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Dynamic E-commerce Platform</a></h4>
                            <p class="project-description">Developed a custom e-commerce solution with advanced features for a fashion retailer, enhancing user experience and sales.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">January 15, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Work Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-2.jpg" class="img-fluid" alt="Project Title 2">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Interactive Mobile App Design</a></h4>
                            <p class="project-description">Crafted a user-centric mobile application for a fitness brand, focusing on intuitive UX/UI and engaging features.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">February 20, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Work Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-3.jpg" class="img-fluid" alt="Project Title 3">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Brand Identity Redesign</a></h4>
                            <p class="project-description">Executed a complete brand overhaul for a tech startup, delivering a fresh logo, guidelines, and marketing collateral.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">March 10, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Work Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-4.jpg" class="img-fluid" alt="Project Title 4">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">SEO & Content Strategy</a></h4>
                            <p class="project-description">Developed and implemented an SEO-driven content strategy for a B2B SaaS company, significantly increasing organic traffic.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">April 05, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Work Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-5.jpg" class="img-fluid" alt="Project Title 5">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Paid Media Campaign for Lead Gen</a></h4>
                            <p class="project-description">Managed a highly successful Google Ads and social media campaign that generated qualified leads for a real estate client.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">May 12, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Work Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="work-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-6.jpg" class="img-fluid" alt="Project Title 6">
                        <div class="card-body">
                            <h4 class="project-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Custom Healthcare Platform</a></h4>
                            <p class="project-description">Designed and developed a secure, user-friendly platform for patient management and telehealth services for a clinic network.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="project-date">June 01, 2023</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
