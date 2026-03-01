<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/services/mobile.jpg');
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
                    <h2>Mobile App Development</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>services.php">Services</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>technology/technology-services.php">Technology Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mobile Apps</li>
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
                            <span>Ideas in the Palm of Your Hand</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Engaging and Intuitive Mobile Apps</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>Connect with your customers wherever they are with a custom-built mobile app. Our team designs and develops beautiful, intuitive, and high-performance applications for iOS and Android. We handle the entire lifecycle, from strategy and design to development, testing, and deployment on the app stores, ensuring your app delivers a seamless user experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/services/mobile.jpg" class="img-fluid rounded shadow-lg" alt="Mobile App Development Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why Mobile Apps?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Connect Directly with Your Audience, Anytime, Anywhere</h3>
                    <p class="mt-4">Mobile apps have become an indispensable part of daily life, offering businesses a direct and personalized channel to connect with their customers. A well-designed mobile app enhances user engagement, streamlines customer interactions, and provides unique functionalities that websites cannot. It fosters brand loyalty, opens up new revenue streams, and gives you a competitive edge in an increasingly mobile-first world, ensuring your brand is always just a tap away.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Provide a personalized and seamless experience for your users.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Increase customer engagement, loyalty, and brand visibility.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Unlock new business opportunities and revenue streams.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR MOBILE APP DEVELOPMENT PROCESS SECTION -->
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
                    <h3>Our Agile Mobile App Development Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Strategy & Concept</h4>
                    <p>Defining your app's core purpose, target audience, key features, and platform strategy (iOS, Android, or Cross-Platform).</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-mobile-alt"></i></div>
                    <h4>UI/UX Design</h4>
                    <p>Creating intuitive wireframes, stunning visual designs, and seamless user experiences that delight your users.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-code"></i></div>
                    <h4>Development & Testing</h4>
                    <p>Building the app with clean, efficient code and conducting rigorous testing to ensure functionality, performance, and security.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                    <h4>Deployment & Support</h4>
                    <p>Assisting with app store submission, launching your app, and providing ongoing maintenance, updates, and feature enhancements.</p>
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
                    <h3>What Our Mobile App Development Services Deliver</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <div class="text">
                        <h5>Custom iOS & Android Applications</h5>
                        <p>High-performance, feature-rich native or cross-platform mobile apps tailored to your unique specifications and user needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-palette"></i></div>
                    <div class="text">
                        <h5>Intuitive & Engaging User Experiences</h5>
                        <p>Beautifully designed interfaces that are easy to navigate, delight users, and drive high retention rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-shield-alt"></i></div>
                    <div class="text">
                        <h5>Secure & Scalable Mobile Solutions</h5>
                        <p>Robust mobile apps built with cutting-edge technologies, ensuring data security and future scalability.</p>
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
                    <h3>Who Benefits from Mobile App Development?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Businesses Seeking Customer Engagement</h5>
                <p>Companies looking to provide unique services, enhance customer loyalty, and offer personalized experiences through a dedicated app.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Startups with Innovative Concepts</h5>
                <p>Entrepreneurs bringing new ideas to market that require a custom mobile application to disrupt industries or create new user value.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Enterprises Optimizing Operations</h5>
                <p>Large organizations aiming to streamline internal processes, improve employee productivity, or offer enhanced B2B solutions via mobile apps.</p>
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
                    <h3>Ready to Bring Your Mobile App Idea to Life?</h3>
                    <p class="lead mt-3">Contact us today to discuss your mobile app needs and get a free consultation. Let's work together to achieve your business goals.</p>
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one mt-4">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../footer.php'; ?>
