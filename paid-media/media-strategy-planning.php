<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

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
                    <h2>Media Strategy & Planning</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>paid-media/paid-media-services.php">Paid Media</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Media Strategy & Planning</li>
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
                            <span>Reach the Right Audience, at the Right Time</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>A Blueprint for Advertising Success</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>A successful paid media campaign begins with a smart strategy. Our media planning and strategy services provide the roadmap for your advertising efforts. We analyze your audience, research the competitive landscape, and select the optimal mix of channels to ensure your message reaches the right people in the most effective way, maximizing your return on ad spend (ROAS).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/services/paid-ads.png" class="img-fluid rounded shadow-lg" alt="Media Strategy Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why Strategic Media Planning?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Optimize Your Ad Spend, Maximize Your Impact</h3>
                    <p class="mt-4">In a complex media landscape, simply running ads isn't enough. Effective media strategy and planning ensure every dollar of your advertising budget is invested wisely. We help you cut through the clutter, avoid wasted spend, and connect with your most valuable customers on the platforms where they are most receptive. This data-driven approach leads to higher engagement, better conversion rates, and a stronger return on ad spend.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Ensure your advertising budget is spent efficiently and effectively.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Reach your ideal customers on the most relevant platforms.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Achieve measurable campaign goals and optimize for maximum ROI.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR MEDIA STRATEGY & PLANNING PROCESS SECTION -->
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
                    <h3>Our Data-Driven Media Strategy & Planning Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h4>Discovery & Goal Setting</h4>
                    <p>Understanding your business objectives, target audience, and current market position to define clear media goals.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <h4>Audience & Channel Analysis</h4>
                    <p>In-depth research into where your target audience spends their time online and which channels offer the best reach.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-calculator"></i></div>
                    <h4>Budget Allocation & Forecasting</h4>
                    <p>Strategic distribution of your ad budget across selected channels, with clear projections for performance and ROI.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-map-marked-alt"></i></div>
                    <h4>Plan Development & Execution</h4>
                    <p>Creating a detailed media plan, including ad formats, targeting parameters, scheduling, and setting up tracking mechanisms.</p>
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
                    <h3>What Our Media Strategy & Planning Services Deliver</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <div class="text">
                        <h5>Comprehensive Media Plan</h5>
                        <p>A detailed document outlining target audience, channel mix, budget allocation, creative strategy, and performance KPIs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-bullseye"></i></div>
                    <div class="text">
                        <h5>Precision Audience Targeting</h5>
                        <p>Ensuring your ads are seen by the most relevant and high-intent segments of your target market.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-dollar-sign"></i></div>
                    <div class="text">
                        <h5>Optimized Ad Spend</h5>
                        <p>Strategic placement and continuous optimization to maximize your return on advertising investment (ROAS).</p>
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
                    <h3>Who Benefits from Media Strategy & Planning?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Businesses with Advertising Budgets</h5>
                <p>Companies that want to ensure their paid marketing efforts are strategic, effective, and deliver measurable results.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Brands Launching New Products</h5>
                <p>To create a powerful media launch strategy that generates buzz, drives awareness, and captures market share.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Organizations Seeking Scalable Growth</h5>
                <p>Businesses looking to expand their reach, acquire new customers, and scale their marketing activities efficiently.</p>
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
                    <h3>Ready to Plan Your Next Big Campaign?</h3>
                    <p class="lead mt-3">Contact us today to discuss your strategy needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
