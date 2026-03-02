<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | " . SITE_NAME : SITE_NAME; ?></title>
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/logo-web/favicon.jpg">

    <!-- bootstrap cdn............................................. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cnd................................................. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- aos cdn ...........................................................-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom cs........................................................... -->
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"> <!-- Ensure the path is correct -->

    <!-- custom owl caruosel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <style>
        :root {
            --tech-blue: #3C72FC;
            --tech-dark: #020617;
            --tech-border: rgba(0, 0, 0, 0.08);
            --glass-bg: rgba(255, 255, 255, 0.85);
        }

        :root {
            --brand-blue: #0065AA;
            --brand-orange: #E4750E;
            --brand-dark: #0f172a;
            --glass-border: rgba(0, 0, 0, 0.06);
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Premium Floating Header */
        .header-main {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 2000;
            padding: 15px 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: transparent;
        }

        .header-main.navbar-scrolled {
            background: rgba(255, 255, 255, 0.98);
            padding: 8px 0;
            border-bottom: 1px solid var(--tech-border);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
        }

        .header-main .navbar-brand img {
            height: 55px;
            transition: height 0.3s ease;
        }

        .header-main.navbar-scrolled .navbar-brand img {
            height: 45px;
        }

        .header-main .container,
        .header-main .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Navigation Pill */
        .nav-wrapper {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.05);
            padding: 4px 8px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            transition: all 0.3s ease;
        }

        .header-main.navbar-scrolled .nav-wrapper {
            background: var(--glass-bg);
            border: 1px solid var(--tech-border);
        }

        .nav-main-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-main-links>li>a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            padding: 10px 16px;
            display: block;
            transition: 0.2s;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .header-main.navbar-scrolled .nav-main-links>li>a {
            color: #475569;
        }

        .nav-main-links>li>a:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        .header-main.navbar-scrolled .nav-main-links>li>a:hover {
            color: var(--tech-dark);
            background: rgba(0, 0, 0, 0.04);
        }

        /* Expanded Mega Menu Ultra */
        .mega-dropdown {
            position: relative;
        }

        .mega-menu-content {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            width: 1100px;
            background: #fff;
            border-radius: 28px;
            border: 1px solid var(--tech-border);
            padding: 35px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 40px 80px -15px rgba(0, 0, 0, 0.12);
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 25px;
        }

        .mega-dropdown:hover .mega-menu-content {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(12px);
        }

        .menu-col h6 {
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--tech-blue);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .menu-col h6 i {
            font-size: 14px;
            opacity: 0.8;
        }

        .sub-link {
            display: block;
            padding: 6px 0;
            color: #64748b;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: 0.2s;
        }

        .sub-link:hover {
            color: var(--tech-blue);
            transform: translateX(4px);
        }

        /* Right Side Actions */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .phone-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: 0.3s;
        }

        .header-main.navbar-scrolled .phone-link {
            color: var(--tech-dark);
        }

        .phone-link i {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .header-main.navbar-scrolled .phone-link i {
            background: rgba(60, 114, 252, 0.1);
            color: var(--tech-blue);
        }

        .phone-link:hover {
            color: var(--tech-blue);
        }

        .btn-tech-cta {
            background: #fff;
            color: var(--tech-dark) !important;
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .header-main.navbar-scrolled .btn-tech-cta {
            background: var(--tech-dark);
            color: #fff !important;
        }

        .btn-tech-cta:hover {
            background: var(--tech-blue);
            color: #fff !important;
            transform: translateY(-2px);
        }

        /* Mobile Menu */
        @media (max-width: 991px) {

            .nav-wrapper,
            .phone-link {
                display: none;
            }
        }
    </style>
</head>

<body>

    <header class="header-main" id="navbar">
        <div class="container-fluid px-lg-5">
            <!-- Logo -->
            <a href="<?php echo BASE_URL; ?>/index.php" class="navbar-brand">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo-web/logo.jpg" alt="WebNexa" height="55">
            </a>

            <!-- Premium Navigation -->
            <div class="nav-wrapper d-none d-lg-flex">
                <ul class="nav-main-links">
                    <li><a href="<?php echo BASE_URL; ?>/index.php">Home</a></li>

                    <!-- About Dropdown -->
                    <li class="mega-dropdown">
                        <a href="#">About <i class="fas fa-chevron-down ms-1" style="font-size: 8px;"></i></a>
                        <div class="mega-menu-content" style="width: 250px; grid-template-columns: 1fr; padding: 20px;">
                            <div class="menu-col">
                                <a href="<?php echo BASE_URL; ?>/about/about.php" class="sub-link">Our Company</a>
                                <a href="<?php echo BASE_URL; ?>/about/leadership.php" class="sub-link">Leadership</a>
                                <a href="<?php echo BASE_URL; ?>/about/team.php" class="sub-link">Our Team</a>
                                <a href="<?php echo BASE_URL; ?>/about/gallery.php" class="sub-link">Gallery</a>
                            </div>
                        </div>
                    </li>

                    <!-- Services Mega Menu (All Original Links) -->
                    <li class="mega-dropdown">
                        <a href="#">Services <i class="fas fa-chevron-down ms-1" style="font-size: 8px;"></i></a>
                        <div class="mega-menu-content">
                            <div class="menu-col">
                                <h6><i class="fas fa-search-dollar"></i> SEO</h6>
                                <a href="<?php echo BASE_URL; ?>/seo/seo-services.php" class="sub-link">Main Services</a>
                                <a href="<?php echo BASE_URL; ?>/seo/technical-seo-audit.php" class="sub-link">Technical Audit</a>
                                <a href="<?php echo BASE_URL; ?>/seo/local-seo.php" class="sub-link">Local SEO</a>
                                <a href="<?php echo BASE_URL; ?>/seo/e-commerce-seo.php" class="sub-link">E-Commerce SEO</a>
                                <a href="<?php echo BASE_URL; ?>/seo/youtube-seo.php" class="sub-link">YouTube SEO</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-laptop-code"></i> Technology</h6>
                                <a href="<?php echo BASE_URL; ?>/technology/website-development.php" class="sub-link">Web Development</a>
                                <a href="<?php echo BASE_URL; ?>/technology/software-development.php" class="sub-link">Software Dev</a>
                                <a href="<?php echo BASE_URL; ?>/technology/mobile-apps.php" class="sub-link">Mobile Apps</a>
                                <a href="<?php echo BASE_URL; ?>/technology/shopify-development.php" class="sub-link">Shopify Dev</a>
                                <a href="<?php echo BASE_URL; ?>/technology/wordpress-development.php" class="sub-link">WordPress</a>
                                <a href="<?php echo BASE_URL; ?>/technology/ios-apps.php" class="sub-link">iOS Apps</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-ad"></i> Paid Media</h6>
                                <a href="<?php echo BASE_URL; ?>/paid-media/search-ads.php" class="sub-link">Search Ads</a>
                                <a href="<?php echo BASE_URL; ?>/paid-media/social-ads.php" class="sub-link">Social Ads</a>
                                <a href="<?php echo BASE_URL; ?>/paid-media/ott-ads.php" class="sub-link">OTT Ads</a>
                                <a href="<?php echo BASE_URL; ?>/paid-media/programmatic-display-ads.php" class="sub-link">Programmatic</a>
                                <a href="<?php echo BASE_URL; ?>/paid-media/ooh-advertising.php" class="sub-link">OOH Advertising</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-palette"></i> Creative</h6>
                                <a href="<?php echo BASE_URL; ?>/creative/branding.php" class="sub-link">Branding</a>
                                <a href="<?php echo BASE_URL; ?>/creative/web-design.php" class="sub-link">Web Design</a>
                                <a href="<?php echo BASE_URL; ?>/creative/graphics-motion.php" class="sub-link">Graphics & Motion</a>
                                <a href="<?php echo BASE_URL; ?>/creative/photoshoot.php" class="sub-link">Photoshoot</a>
                                <a href="<?php echo BASE_URL; ?>/creative/production.php" class="sub-link">Production</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-pen-nib"></i> Content</h6>
                                <a href="<?php echo BASE_URL; ?>/content/content-writing.php" class="sub-link">Content Writing</a>
                                <a href="<?php echo BASE_URL; ?>/content/content-marketing.php" class="sub-link">Content Marketing</a>
                                <a href="<?php echo BASE_URL; ?>/content/technical-writing.php" class="sub-link">Technical Writing</a>
                            </div>
                        </div>
                    </li>

                    <!-- Solutions Mega Menu -->
                    <li class="mega-dropdown">
                        <a href="#">Solutions <i class="fas fa-chevron-down ms-1" style="font-size: 8px;"></i></a>
                        <div class="mega-menu-content" style="grid-template-columns: repeat(4, 1fr); width: 900px;">
                            <div class="menu-col">
                                <h6><i class="fas fa-shopping-cart"></i> E-Commerce</h6>
                                <a href="<?php echo BASE_URL; ?>/solutions/e-commerce/apparel-solution.php" class="sub-link">Apparel Stores</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/e-commerce/jewellery-solution.php" class="sub-link">Jewellery Shop</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/e-commerce/furniture-solution.php" class="sub-link">Furniture Store</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/e-commerce/cosmetics-solution.php" class="sub-link">Cosmetics Shop</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-hospital"></i> Healthcare</h6>
                                <a href="<?php echo BASE_URL; ?>/solutions/healthcare/clinics-management-solution.php" class="sub-link">Clinic Management</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/healthcare/hospital-management-solution.php" class="sub-link">Hospital System</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/healthcare/multi-vendor-hospital-solution.php" class="sub-link">Multi-Vendor</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-users-cog"></i> Job Portal</h6>
                                <a href="<?php echo BASE_URL; ?>/solutions/job-portal/job-portal-solution.php" class="sub-link">Overview</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/job-portal/candidate-management.php" class="sub-link">Candidate Management</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/job-portal/employer-dashboard.php" class="sub-link">Employer Dashboard</a>
                            </div>
                            <div class="menu-col">
                                <h6><i class="fas fa-car"></i> Car Rental</h6>
                                <a href="<?php echo BASE_URL; ?>/solutions/car-rental/car-rental-solution.php" class="sub-link">Rental System</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/car-rental/self-drive-portal.php" class="sub-link">Self-Drive Portal</a>
                                <a href="<?php echo BASE_URL; ?>/solutions/car-rental/fleet-management.php" class="sub-link">Fleet Management</a>
                            </div>
                        </div>
                    </li>

                    <li class="mega-dropdown">
                        <a href="#">Work <i class="fas fa-chevron-down ms-1" style="font-size: 8px;"></i></a>
                        <div class="mega-menu-content" style="width: 250px; grid-template-columns: 1fr; padding: 20px;">
                            <div class="menu-col">
                                <a href="<?php echo BASE_URL; ?>/work/work.php" class="sub-link">Our Portfolio</a>
                                <a href="<?php echo BASE_URL; ?>/work/featured.php" class="sub-link">Featured Projects</a>
                                <a href="<?php echo BASE_URL; ?>/work/clients.php" class="sub-link">Our Clients</a>
                            </div>
                        </div>
                    </li>

                    <li><a href="<?php echo BASE_URL; ?>/blog.php">Blog</a></li>
                </ul>
            </div>

            <!-- Header Actions -->
            <div class="header-actions">
                <a href="tel:+919910893885" class="phone-link d-none d-xl-flex">
                    <i class="fas fa-phone-alt"></i>
                    <span>+91 99108 93885</span>
                </a>
                <a href="<?php echo BASE_URL; ?>/contact.php" class="btn-tech-cta">Get Started</a>
            </div>
        </div>
    </header>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 30) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
</body>

</html>