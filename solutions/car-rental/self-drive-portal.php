<?php include_once __DIR__ . '/../../config.php'; include_once __DIR__ . '/../../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/header-icon/solution/self-drive.png');
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
                    <h2>Self-Drive Portal Solution</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>solutions.php">Solutions</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>solutions/car-rental/car-rental-solution.php">Car Rental Solution</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Self-Drive Portal</li>
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
                            <span>Freedom to Explore</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Your Seamless Gateway to Self-Drive Car Rentals</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>The demand for flexible and independent travel options is growing, and self-drive car rentals are at the forefront. Our Self-Drive Portal provides a comprehensive and user-friendly platform that empowers customers to easily browse, book, and manage their rental vehicles. For rental companies, it streamlines operations, automates bookings, and enhances the overall customer experience, leading to increased satisfaction and repeat business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/self-drive.png" class="img-fluid rounded shadow-lg" alt="Self-Drive Portal Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why a Self-Drive Portal?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Empower Your Customers with Convenience and Control</h3>
                    <p class="mt-4">In the evolving mobility landscape, customers increasingly seek autonomy and convenience in their travel. A dedicated self-drive portal meets this demand by offering a seamless digital experience for car rentals. It provides instant access to vehicle availability, flexible booking options, transparent pricing, and simplified pick-up/drop-off processes. For rental businesses, it automates bookings, reduces manual overhead, and enhances customer satisfaction, positioning you as a modern, customer-centric provider in the competitive car rental market.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Offer customers flexible and convenient self-drive car rental options.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Automate booking, payments, and fleet allocation to reduce operational costs.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Enhance customer experience with a user-friendly and transparent platform.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR SELF-DRIVE PORTAL DEVELOPMENT PROCESS SECTION -->
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
                    <h3>Our Self-Drive Portal Implementation Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-list-check"></i></div>
                    <h4>Discovery & Feature Planning</h4>
                    <p>Defining essential features such as vehicle selection, booking flow, payment integration, and user authentication for your self-drive platform.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-desktop"></i></div>
                    <h4>Intuitive UI/UX Design</h4>
                    <p>Crafting a clean, easy-to-navigate interface for customers to browse cars, view details, and complete bookings seamlessly.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Development & Integration</h4>
                    <p>Building the robust backend, secure payment gateways, driver verification systems, and integrating with fleet management tools.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-car-on"></i></div>
                    <h4>Testing & Deployment</h4>
                    <p>Rigorous testing of booking flows, payment security, and overall user experience, followed by secure deployment and launch.</p>
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
                    <h3>What Our Self-Drive Portal Solution Delivers</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-car"></i></div>
                    <div class="text">
                        <h5>User-Friendly Car Booking Interface</h5>
                        <p>An intuitive online platform allowing customers to easily browse, select, book, and manage their self-drive car rentals.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-lock"></i></div>
                    <div class="text">
                        <h5>Secure Payments & Driver Verification</h5>
                        <p>Integrated secure payment gateways and robust driver verification processes to ensure safe and reliable transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div class="text">
                        <h5>Automated Operations & Reporting</h5>
                        <p>Streamlined booking management, automated communications, and comprehensive reports to enhance operational efficiency.</p>
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
                    <h3>Who Benefits from Our Self-Drive Portal Solution?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>Car Rental Businesses (Self-Drive Focus)</h5>
                <p>Agencies specializing in or expanding into the self-drive segment, seeking to automate bookings and improve customer experience.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Shared Mobility Platforms</h5>
                <p>Companies building or managing peer-to-peer car sharing or short-term rental services that require robust booking systems.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Tourism & Travel Operators</h5>
                <p>Offering integrated self-drive options as part of travel packages, requiring seamless booking and vehicle management.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../../footer.php'; ?>
