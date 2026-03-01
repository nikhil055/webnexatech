<?php 
$page_title = 'Featured';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner.webp');
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
        .item-card {
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
        .item-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        .item-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .item-card:hover img {
            transform: scale(1.05);
        }
        .item-card .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .item-card .item-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
            transition: color 0.3s ease;
        }
        .item-card .item-title a {
            color: inherit;
            text-decoration: none;
        }
        .item-card:hover .item-title a {
            color: #3C72FC;
        }
        .item-card .item-description {
            font-size: 15px;
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .item-card .view-details {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s ease;
            margin-top: auto;
        }
        .item-card .view-details i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        .item-card:hover .view-details i {
            transform: translateX(5px);
        }
        .item-card .item-date {
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
                    <h2>Our Highlighted Projects</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Featured Work</li>
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
                         <span>Showcasing Our Best</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Innovative Projects That Drive Results</h3>
                   </div>
                </div>
           </div>
            <div class="row justify-content-center">
                <!-- Static Featured Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-1.jpg" class="img-fluid" alt="Featured Project 1">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Global Logistics Management System</a></h4>
                            <p class="item-description">Developed a custom, real-time logistics platform for a major shipping company, optimizing routes and reducing delivery times.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">October 25, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Featured Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-2.jpg" class="img-fluid" alt="Featured Project 2">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">AI-Powered Customer Support Chatbot</a></h4>
                            <p class="item-description">Integrated an intelligent chatbot into an e-commerce platform, leading to a 30% reduction in customer service inquiries.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">September 12, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Featured Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-3.jpg" class="img-fluid" alt="Featured Project 3">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Interactive Healthcare Patient Portal</a></h4>
                            <p class="item-description">Designed and developed a secure, user-friendly portal enabling patients to manage appointments and access health records.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">August 01, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Featured Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-4.jpg" class="img-fluid" alt="Featured Project 4">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Modernized Government Services Platform</a></h4>
                            <p class="item-description">Revamped a legacy government portal to improve citizen access to services, enhancing user experience and efficiency.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">July 18, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Featured Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-5.jpg" class="img-fluid" alt="Featured Project 5">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Blockchain-Based Supply Chain Tracker</a></h4>
                            <p class="item-description">Implemented a transparent and secure blockchain solution for tracking goods in a complex global supply chain.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">June 03, 2023</div>
                        </div>
                    </div>
                </div>
                <!-- Static Featured Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="item-card">
                        <img src="<?php echo BASE_URL; ?>assets/images/work/project-6.jpg" class="img-fluid" alt="Featured Project 6">
                        <div class="card-body">
                            <h4 class="item-title"><a href="<?php echo BASE_URL; ?>work/case-studies.php">Gamified E-learning Platform for Kids</a></h4>
                            <p class="item-description">Created an engaging educational platform with gamified elements, boosting child learning and retention rates.</p>
                            <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="item-date">May 28, 2023</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
