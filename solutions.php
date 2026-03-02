<?php 
$page_title = 'Enterprise Solutions Architecture | WebNexa';
include_once 'config.php'; 
include_once 'header-new.php'; 
?>

<style>
    .sol-main-v4 { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    /* SOLUTIONS HERO */
    .sol-hero-v4 { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .sol-hero-v4 h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }
    .hero-circuit-bg { position: absolute; inset: 0; background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px); background-size: 40px 40px; transform: perspective(1000px) rotateX(60deg); opacity: 0.5; }

    /* HUB CATEGORIES */
    .hub-section { padding: 100px 0; position: relative; z-index: 10; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .hub-header { margin-bottom: 60px; }
    .hub-title { font-size: 12px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 4px; margin-bottom: 15px; display: block; }
    .hub-heading { font-size: 42px; font-weight: 900; letter-spacing: -2px; }

    /* SOLUTION CARDS */
    .sol-grid-v4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }
    .sol-card-v4 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 40px 30px; backdrop-filter: blur(40px); transition: 0.4s; display: flex; flex-direction: column; height: 100%; }
    .sol-card-v4:hover { border-color: rgb(114, 79, 255); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }

    .sol-icon-v4 { width: 55px; height: 55px; background: rgba(114, 79, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: rgb(114, 79, 255); font-size: 22px; margin-bottom: 25px; transition: 0.4s; }
    .sol-card-v4:hover .sol-icon-v4 { background: rgb(114, 79, 255); color: #fff; box-shadow: 0 0 20px rgba(114, 79, 255, 0.4); }

    .sol-card-v4 h4 { font-size: 22px; font-weight: 800; margin-bottom: 12px; line-height: 1.2; }
    .sol-card-v4 p { color: #94a3b8; font-size: 14px; line-height: 1.6; margin-bottom: 25px; }

    .sol-btn-v4 { margin-top: auto; display: inline-flex; align-items: center; gap: 10px; font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: #fff; text-decoration: none; border: 1px solid rgba(255,255,255,0.1); padding: 12px 20px; border-radius: 12px; transition: 0.3s; }
    .sol-btn-v4:hover { background: #fff; color: #000; border-color: #fff; transform: scale(1.05); }

    @media (max-width: 1400px) { .sol-grid-v4 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 991px) { .sol-grid-v4 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { .sol-grid-v4 { grid-template-columns: 1fr; } .hub-heading { font-size: 32px; } }
</style>

<div class="sol-main-v4">
    <section class="sol-hero-v4">
        <div class="hero-circuit-bg"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Enterprise Solutions architecture</div>
            <h1 data-aos="zoom-in">Industry-Specific <br> <span class="gradient-tech-text">Dominance Engines</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Deploying custom-engineered ecosystems for global enterprises. Choose your industry vertical to explore our technical blueprints.</p>
        </div>
    </section>

    <!-- HUB 01: E-COMMERCE -->
    <section class="hub-section">
        <div class="container">
            <div class="hub-header" data-aos="fade-right">
                <span class="hub-title">01. Commerce Labs</span>
                <h2 class="hub-heading">Next-Gen <span class="gradient-tech-text">E-Commerce Suites</span></h2>
            </div>
            <div class="sol-grid-v4">
                <div class="sol-card-v4" data-aos="fade-up">
                    <div class="sol-icon-v4"><i class="fas fa-tshirt"></i></div>
                    <h4>Apparel Store</h4>
                    <p>High-frequency fashion engines with AI-driven size fitting and ultra-fast filters.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/e-commerce/apparel-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sol-icon-v4"><i class="fas fa-gem"></i></div>
                    <h4>Jewellery Shop</h4>
                    <p>Luxury commerce with 4K zoom, AR virtual try-on, and real-time metal price sync.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/e-commerce/jewellery-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="200">
                    <div class="sol-icon-v4"><i class="fas fa-couch"></i></div>
                    <h4>Furniture Store</h4>
                    <p>Spatial commerce with 3D room visualizers and bulk freight logistics API.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/e-commerce/furniture-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="300">
                    <div class="sol-icon-v4"><i class="fas fa-magic"></i></div>
                    <h4>Cosmetics Shop</h4>
                    <p>Beauty-tech with AI shade matching and automated subscription cycles.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/e-commerce/cosmetics-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- HUB 02: HEALTHCARE -->
    <section class="hub-section">
        <div class="container">
            <div class="hub-header" data-aos="fade-right">
                <span class="hub-title">02. Health-Tech Labs</span>
                <h2 class="hub-heading">Clinical & <span class="gradient-tech-text">Hospital Systems</span></h2>
            </div>
            <div class="sol-grid-v4">
                <div class="sol-card-v4" data-aos="fade-up">
                    <div class="sol-icon-v4"><i class="fas fa-hospital-user"></i></div>
                    <h4>Clinic Management</h4>
                    <p>HIPAA-compliant workflows with smart scheduling and encrypted EMR storage.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/healthcare/clinics-management-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sol-icon-v4"><i class="fas fa-hospital"></i></div>
                    <h4>Hospital ERP</h4>
                    <p>Enterprise bed management, OT scheduling, and unified multi-dept data.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/healthcare/hospital-management-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="200">
                    <div class="sol-icon-v4"><i class="fas fa-users-medical"></i></div>
                    <h4>Multi-Vendor Health</h4>
                    <p>Scalable healthcare marketplaces with isolated tenant DBs and global telehealth.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/healthcare/multi-vendor-hospital-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- HUB 03: JOB PORTAL -->
    <section class="hub-section">
        <div class="container">
            <div class="hub-header" data-aos="fade-right">
                <span class="hub-title">03. Talent-Tech Labs</span>
                <h2 class="hub-heading">AI-Powered <span class="gradient-tech-text">Talent Hubs</span></h2>
            </div>
            <div class="sol-grid-v4">
                <div class="sol-card-v4" data-aos="fade-up">
                    <div class="sol-icon-v4"><i class="fas fa-briefcase"></i></div>
                    <h4>Portal Overview</h4>
                    <p>Master blueprints for high-frequency talent marketplaces with semantic search.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/job-portal/job-portal-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sol-icon-v4"><i class="fas fa-user-tie"></i></div>
                    <h4>Candidate Mgmt</h4>
                    <p>Verified profile ecosystems with automated skill badges and 1-click apply.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/job-portal/candidate-management.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="200">
                    <div class="sol-icon-v4"><i class="fas fa-user-cog"></i></div>
                    <h4>Employer Console</h4>
                    <p>Predictive hiring funnels with integrated video interviewing and ROI analytics.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/job-portal/employer-dashboard.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- HUB 04: CAR RENTAL -->
    <section class="hub-section">
        <div class="container">
            <div class="hub-header" data-aos="fade-right">
                <span class="hub-title">04. Mobility-Tech Labs</span>
                <h2 class="hub-heading">IoT Fleet <span class="gradient-tech-text">Command Centers</span></h2>
            </div>
            <div class="sol-grid-v4">
                <div class="sol-card-v4" data-aos="fade-up">
                    <div class="sol-icon-v4"><i class="fas fa-car"></i></div>
                    <h4>Rental Engine</h4>
                    <p>Core mobility platforms with keyless entry and IoT-enabled vehicle tracking.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/car-rental/car-rental-solution.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="100">
                    <div class="sol-icon-v4"><i class="fas fa-mobile-alt"></i></div>
                    <h4>Self-Drive Portal</h4>
                    <p>Consumer-facing PWAs with instant KYC and automated vehicle handover.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/car-rental/self-drive-portal.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="sol-card-v4" data-aos="fade-up" data-aos-delay="200">
                    <div class="sol-icon-v4"><i class="fas fa-tachometer-alt"></i></div>
                    <h4>Fleet Command</h4>
                    <p>Predictive maintenance hubs with real-time telematics and fuel auditing.</p>
                    <a href="<?php echo BASE_URL; ?>solutions/car-rental/fleet-management.php" class="sol-btn-v4">Deploy System <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'contact-section-shared.php'; ?>
</div>

<?php include_once 'footer.php'; ?>
