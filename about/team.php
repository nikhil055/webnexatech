<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'about/team.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Our Experts';
?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $display_banner_img; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
        }
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

        /* Team Card Styling */
        .team-section {
            padding-bottom: 80px;
        }

        .team-card-pro {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            border: 1px solid #f0f0f0;
            height: 100%;
        }

        .team-card-pro:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(60, 114, 252, 0.15);
            border-color: #3C72FC;
        }

        .img-wrapper {
            position: relative;
            overflow: hidden;
            height: 400px;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.5s ease;
        }

        .team-card-pro:hover .img-wrapper img {
            transform: scale(1.1);
        }

        .team-social-overlay {
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            background: rgba(60, 114, 252, 0.9);
            padding: 15px 0;
            text-align: center;
            transition: bottom 0.4s ease;
        }

        .team-card-pro:hover .team-social-overlay {
            bottom: 0;
        }

        .team-social-overlay a {
            color: #fff;
            margin: 0 10px;
            font-size: 18px;
            transition: 0.3s;
        }

        .team-social-overlay a:hover {
            color: #000;
        }

        .content-wrapper {
            padding: 25px;
            text-align: center;
        }

        .role-badge {
            display: inline-block;
            background: #eef4ff;
            color: #3C72FC;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .member-name {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .member-desc {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .tech-stack-container {
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }

        .tech-title {
            font-size: 13px;
            font-weight: 700;
            color: #888;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .tech-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tech-tag {
            font-size: 12px;
            background: #f8f9fa;
            border: 1px solid #ddd;
            padding: 3px 8px;
            border-radius: 4px;
            color: #555;
            font-weight: 600;
        }
    </style>
    <section class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="zoom-in">
                        <h2><?php echo $display_banner_title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span>The Force Behind Web Nexa</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Innovators, Creators & Strategists</h3>
                   </div>
                </div>
           </div>

            <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card-pro">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Pranshu Sharma">
                            <div class="team-social-overlay">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <span class="role-badge">MERN Stack Developer</span>
                            <h4 class="member-name">Pranshu Sharma</h4>
                            <p class="member-desc">Expert in building scalable full-stack applications with high performance and security.</p>
                            
                            <div class="tech-stack-container">
                                <div class="tech-title">Tech Stack</div>
                                <div class="tech-icons">
                                    <span class="tech-tag">React.js</span>
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">MongoDB</span>
                                    <span class="tech-tag">Express</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card-pro">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Nikhil Singh">
                            <div class="team-social-overlay">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <span class="role-badge">Software Developer</span>
                            <h4 class="member-name">Nikhil Singh</h4>
                            <p class="member-desc">Specializing in core software architecture, system design, and algorithmic solutions.</p>
                            
                            <div class="tech-stack-container">
                                <div class="tech-title">Tech Stack</div>
                                <div class="tech-icons">
                                    <span class="tech-tag">Java</span>
                                    <span class="tech-tag">Python</span>
                                    <span class="tech-tag">C++</span>
                                    <span class="tech-tag">SQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card-pro">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1976&auto=format&fit=crop" alt="Jay Vishwakarma">
                            <div class="team-social-overlay">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-behance"></i></a>
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <span class="role-badge">App Developer</span>
                            <h4 class="member-name">Jay Vishwakarma</h4>
                            <p class="member-desc">Crafting seamless cross-platform mobile experiences with Flutter and React Native.</p>
                            
                            <div class="tech-stack-container">
                                <div class="tech-title">Tech Stack</div>
                                <div class="tech-icons">
                                    <span class="tech-tag">Flutter</span>
                                    <span class="tech-tag">React Native</span>
                                    <span class="tech-tag">Android</span>
                                    <span class="tech-tag">iOS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-card-pro">
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Prince Thakur">
                            <div class="team-social-overlay">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <span class="role-badge">Marketing Head</span>
                            <h4 class="member-name">Prince Thakur</h4>
                            <p class="member-desc">Driving digital growth through data-driven SEO strategies and creative ad campaigns.</p>
                            
                            <div class="tech-stack-container">
                                <div class="tech-title">Tech Stack</div>
                                <div class="tech-icons">
                                    <span class="tech-tag">Google Ads</span>
                                    <span class="tech-tag">SEO</span>
                                    <span class="tech-tag">Analytics</span>
                                    <span class="tech-tag">Social Media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include_once __DIR__ . '/../footer.php'; ?>

