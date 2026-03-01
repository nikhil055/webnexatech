<?php 
$page_title = 'Future';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'about/future.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Our Future Vision';
?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(10, 25, 47, 0.6)), url('<?php echo $display_banner_img; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 120px;
            text-align: center;
            color: #fff;
        }

        .page-banner h2 {
            font-size: 60px;
            font-weight: 900;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .breadcrumb-custom {
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            padding: 10px 25px;
            border-radius: 50px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .breadcrumb-custom .breadcrumb-item a { color: #fff; text-decoration: none; font-weight: 600; }
        .breadcrumb-custom .breadcrumb-item.active { color: var(--primary-blue); font-weight: 800; }

        /* Future Vision Section */
        .future-intro { padding: 100px 0; background: #fff; }
        .vision-card {
            background: var(--dark-navy);
            color: #fff;
            padding: 60px;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        .vision-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: var(--primary-blue);
            filter: blur(150px);
            opacity: 0.2;
        }

        /* Pillars Grid */
        .pillar-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 60px; }
        .pillar-item {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 20px;
            border-bottom: 4px solid transparent;
            transition: all 0.4s ease;
            height: 100%;
        }
        .pillar-item:hover {
            transform: translateY(-10px);
            background: #fff;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            border-bottom-color: var(--primary-blue);
        }
        .pillar-icon {
            width: 70px;
            height: 70px;
            background: rgba(60, 114, 252, 0.1);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            transition: 0.3s;
        }
        .pillar-item:hover .pillar-icon { background: var(--primary-blue); color: #fff; transform: rotateY(360deg); }
        .pillar-item h4 { font-weight: 800; margin-bottom: 15px; color: #1a1a1a; }
        .pillar-item p { color: #666; line-height: 1.7; margin: 0; }

        /* Interactive Timeline */
        .roadmap-section { padding: 100px 0; background: #fdfdfd; }
        .roadmap-container { position: relative; padding: 40px 0; }
        .roadmap-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #eee;
            transform: translateX(-50%);
        }
        .roadmap-step { display: flex; justify-content: space-between; align-items: center; margin-bottom: 60px; width: 100%; position: relative; }
        .roadmap-step:nth-child(even) { flex-direction: row-reverse; }
        .roadmap-content { width: 45%; padding: 30px; background: #fff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .roadmap-dot {
            position: absolute;
            left: 50%;
            width: 20px;
            height: 20px;
            background: var(--primary-blue);
            border: 4px solid #fff;
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 2;
            box-shadow: 0 0 0 5px rgba(60, 114, 252, 0.2);
        }
        .roadmap-year { font-weight: 900; color: var(--primary-blue); font-size: 24px; margin-bottom: 10px; display: block; }

        @media (max-width: 768px) {
            .roadmap-line { left: 20px; }
            .roadmap-dot { left: 20px; }
            .roadmap-step, .roadmap-step:nth-child(even) { flex-direction: column; align-items: flex-start; padding-left: 50px; }
            .roadmap-content { width: 100%; }
            .page-banner h2 { font-size: 40px; }
        }
    </style>

<section class="page-banner">
        <div class="container">
            <div data-aos="zoom-in">
                <h2><?php echo $display_banner_title; ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Future</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="future-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="vision-card" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <h3 class="display-4 fw-bold mb-4">The Next Frontier of Technology</h3>
                                <p class="lead opacity-75 mb-4">At Web Nexa Technologies, we aren't just adapting to the future—we are building it. Our roadmap is defined by a commitment to sustainable innovation, ethical AI, and global digital empowerment.</p>
                                <div class="d-flex gap-3">
                                    <div class="text-center">
                                        <h4 class="fw-bold text-primary mb-0">2030</h4>
                                        <small class="opacity-50">Vision Goal</small>
                                    </div>
                                    <div style="width: 2px; background: rgba(255,255,255,0.1);"></div>
                                    <div class="text-center">
                                        <h4 class="fw-bold text-primary mb-0">100%</h4>
                                        <small class="opacity-50">Digital First</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block text-end">
                                <i class="fa-solid fa-microchip" style="font-size: 200px; opacity: 0.1;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pillar-grid">
                <div class="pillar-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="pillar-icon"><i class="fa-solid fa-brain"></i></div>
                    <h4>Cognitive Computing</h4>
                    <p>Moving beyond basic automation into self-learning systems that predict and solve complex business challenges.</p>
                </div>
                <div class="pillar-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="pillar-icon"><i class="fa-solid fa-leaf"></i></div>
                    <h4>Green Tech Initiative</h4>
                    <p>Optimizing code and infrastructure to minimize the carbon footprint of global digital operations.</p>
                </div>
                <div class="pillar-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="pillar-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>Quantum Security</h4>
                    <p>Preparing for the next era of cybersecurity with encryption that stays ahead of quantum computing threats.</p>
                </div>
                <div class="pillar-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="pillar-icon"><i class="fa-solid fa-earth-americas"></i></div>
                    <h4>Borderless Workforce</h4>
                    <p>Expanding our global innovation hubs to tap into diverse talent from every corner of the world.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="roadmap-section">
        <div class="container">
            <div class="ser-head text-center mb-5" data-aos="fade-up">
                <div class="hed text-center">
                    <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                    <span>Strategic Roadmap</span>
                    <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                </div>
                <h3>Our Journey to 2030</h3>
            </div>

            <div class="roadmap-container">
                <div class="roadmap-line"></div>
                
                <div class="roadmap-step" data-aos="fade-right">
                    <div class="roadmap-dot"></div>
                    <div class="roadmap-content">
                        <span class="roadmap-year">2026</span>
                        <h4>AI-Native Integration</h4>
                        <p>Fully transitioning our core development workflows to an AI-native model, increasing delivery speed by 40%.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="roadmap-step" data-aos="fade-left">
                    <div class="roadmap-dot"></div>
                    <div class="roadmap-content">
                        <span class="roadmap-year">2027</span>
                        <h4>European Hub Expansion</h4>
                        <p>Establishing three new physical innovation centers across major European tech capitals.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="roadmap-step" data-aos="fade-right">
                    <div class="roadmap-dot"></div>
                    <div class="roadmap-content">
                        <span class="roadmap-year">2028</span>
                        <h4>Sustainability Milestone</h4>
                        <p>Achieving carbon-neutral status for all our cloud-hosted client projects through optimized architecture.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="roadmap-step" data-aos="fade-left">
                    <div class="roadmap-dot"></div>
                    <div class="roadmap-content">
                        <span class="roadmap-year">2030</span>
                        <h4>The Autonomous Era</h4>
                        <p>Launching our proprietary platform for fully autonomous enterprise management and digital transformation.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
