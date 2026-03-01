<?php 
$page_title = 'Ott Ads';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/services/paid-media.jpg');
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
                    <h2>OTT Advertising</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>paid-media/paid-media-services.php">Paid Media</a></li>
                            <li class="breadcrumb-item active" aria-current="page">OTT Ads</li>
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
                            <span>The Future of Television</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Connect with Audiences on Streaming TV</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>As more viewers cut the cord and move to streaming services, Over-the-Top (OTT) and Connected TV (CTV) advertising has become essential for reaching modern audiences. We help you place your brand in front of engaged viewers on popular streaming platforms, delivering the impact of television with the precision of digital targeting.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/services/paid-media.jpg" class="img-fluid rounded shadow-lg" alt="OTT Ads Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why OTT & CTV Ads?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Reach Engaged Viewers on Their Favorite Streams</h3>
                    <p class="mt-4">With the massive shift from traditional cable to streaming services, Over-the-Top (OTT) and Connected TV (CTV) advertising offers a unique opportunity to engage highly attentive audiences. Unlike traditional TV, OTT/CTV ads provide precise targeting capabilities, allowing you to reach specific demographics, interests, and even household incomes. This leads to less waste, higher engagement rates, and the ability to measure campaign effectiveness with digital accuracy, making it a powerful channel for brand awareness and direct response.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Reach cord-cutters and engaged viewers on their preferred streaming platforms.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Utilize precise targeting options not available with traditional television advertising.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Achieve measurable campaign results and optimize for better performance.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR OTT & CTV ADVERTISING PROCESS SECTION -->
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
                    <h3>Our Comprehensive OTT & CTV Advertising Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h4>Audience & Platform Strategy</h4>
                    <p>Defining your target audience and identifying the optimal mix of OTT/CTV platforms to reach them effectively.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-film"></i></div>
                    <h4>Creative Development & Integration</h4>
                    <p>Developing compelling video ad creatives optimized for streaming environments and seamlessly integrating them into programming.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Campaign Management & Optimization</h4>
                    <p>Continuous monitoring of ad performance, managing frequency capping, and optimizing campaigns for maximum viewer engagement and ROI.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-square-poll-vertical"></i></div>
                    <h4>Attribution & Reporting</h4>
                    <p>Providing detailed reports on viewer engagement, completion rates, and the impact of OTT/CTV ads on your overall marketing goals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DELIVER SECTION -->
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
                    <h3>What Our OTT & CTV Advertising Services Deliver</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-tv"></i></div>
                    <div class="text">
                        <h5>Expanded Reach on Streaming Platforms</h5>
                        <p>Access to a growing audience of cord-cutters and engaged viewers across major Over-the-Top platforms and Connected TVs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                    <div class="text">
                        <h5>Precise Audience Targeting</h5>
                        <p>Deliver your video ads to specific demographics, interests, and households for maximum relevance and impact.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-bar"></i></div>
                    <div class="text">
                        <h5>Measurable Video Performance</h5>
                        <p>Detailed analytics on video completion rates, engagement, and conversion impact to optimize future campaigns.</p>
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
                    <h3>Who Benefits from OTT & CTV Advertising?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Brands Targeting Modern Viewers</h5>
                <p>Companies looking to reach audiences who have moved away from traditional cable TV and consume content via streaming.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Advertisers Seeking High Engagement</h5>
                <p>Those who want their video ads to be viewed in a less interruptive environment, leading to higher completion rates.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Businesses with Strong Video Content</h5>
                <p>Brands that can leverage compelling video creatives to tell their story and connect with a captive audience on big screens.</p>
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
                    <h3>Ready to Reach Streaming Audiences?</h3>
                    <p class="lead mt-3">Contact us today to discuss your OTT advertising needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
