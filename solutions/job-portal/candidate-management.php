<?php include_once __DIR__ . '/../../config.php'; include_once __DIR__ . '/../../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/header-icon/solution/candidate-management.png');
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
                    <h2>Candidate Management System</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>solutions.php">Solutions</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>solutions/job-portal/job-portal-solution.php">Job Portal Solution</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Candidate Management</li>
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
                            <span>Streamline Your Hiring Pipeline</span>
                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                        </div>
                        <h3>Efficiently Track, Engage, and Hire Top Talent</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center lead">
                    <p>In a competitive talent landscape, managing candidates effectively is key to securing the best hires. Our Candidate Management System, a core module of our Job Portal Solution, provides recruiters and HR teams with powerful tools to track applicants, manage communication, and streamline every stage of the hiring pipeline from initial application to onboarding. Reduce time-to-hire and improve candidate experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS SECTION -->
<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/candidate-management.png" class="img-fluid rounded shadow-lg" alt="Candidate Management Importance">
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="ser-head text-start">
                    <div class="hed text-start">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                        <span>Why Robust Candidate Management?</span>
                        <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                    </div>
                    <h3>Optimize Recruitment, Enhance Candidate Experience</h3>
                    <p class="mt-4">In today's talent-driven economy, a seamless and efficient candidate experience is paramount. A robust Candidate Management System (CMS) ensures that no potential hire falls through the cracks, from initial application to final offer. It centralizes all candidate data, automates communication, and provides recruiters with the tools to track progress, evaluate skills, and engage effectively. This not only reduces time-to-hire and recruitment costs but also significantly enhances your employer brand, attracting and retaining top talent in a competitive market.</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Streamline the entire hiring process from application to onboarding.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Enhance candidate experience with efficient communication and transparent processes.</li>
                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Improve recruitment efficiency and reduce time-to-hire for key positions.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR CANDIDATE MANAGEMENT PROCESS SECTION -->
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
                    <h3>Our Candidate Management System Implementation Process</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h4>Requirement Analysis</h4>
                    <p>Understanding your recruitment workflows, pain points, and desired features for an efficient candidate management system.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Customization & Integration</h4>
                    <p>Tailoring the CMS modules to fit your specific hiring processes and integrating with existing HR or ATS platforms.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <h4>Training & Deployment</h4>
                    <p>Comprehensive training for your recruitment team, followed by seamless deployment and go-live support.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-item">
                    <div class="process-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Optimization & Support</h4>
                    <p>Continuous monitoring of system performance, updates, and dedicated support to adapt to evolving recruitment needs.</p>
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
                    <h3>What Our Candidate Management Solution Delivers</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                    <div class="text">
                        <h5>Centralized Candidate Database</h5>
                        <p>A unified, searchable database of all applicants, their profiles, resumes, and communication history for easy access.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-funnel-dollar"></i></div>
                    <div class="text">
                        <h5>Automated Workflow & Communication</h5>
                        <p>Streamlined application processing, automated email responses, interview scheduling, and feedback collection to save time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card w-100">
                    <div class="icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <div class="text">
                        <h5>Actionable Recruitment Analytics</h5>
                        <p>Insights into hiring pipeline, time-to-hire, candidate sources, and conversion rates to optimize future recruitment strategies.</p>
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
                    <h3>Who Benefits from Our Candidate Management Solution?</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4 mb-4">
                <h5>HR Departments of All Sizes</h5>
                <p>To efficiently manage the influx of applications, track candidate progress, and improve the overall hiring experience.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Recruitment Agencies</h5>
                <p>To streamline candidate sourcing, screening, and placement processes, enhancing their ability to fill positions quickly and effectively.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Companies with High-Volume Hiring</h5>
                <p>That need robust tools to handle a large number of applicants, automate communication, and maintain an organized talent pipeline.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/../../footer.php'; ?>
