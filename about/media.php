<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        :root {
            --primary-blue: #3C72FC;
            --dark-bg: #1a1a1a;
        }

        /* Standard Page Banner - Matching about.php */
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(60, 114, 252, 0.3)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-03.jpg');
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

        .content-section { padding: 100px 0; }

        /* FEATURED SPOTLIGHT */
        .featured-news {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 100px;
            background: #fff;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.05);
        }

        .featured-img {
            flex: 1;
            border-radius: 20px;
            overflow: hidden;
            height: 450px;
        }
        .featured-img img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .featured-news:hover .featured-img img { transform: scale(1.05); }

        .featured-content { flex: 1; }
        .featured-content .badge-top {
            background: var(--primary-blue);
            color: #fff;
            padding: 6px 15px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 20px;
            display: inline-block;
        }
        .featured-content h3 { font-size: 42px; font-weight: 800; margin-bottom: 20px; line-height: 1.1; color: var(--dark-bg); }
        .featured-content p { font-size: 18px; color: #636e72; line-height: 1.8; margin-bottom: 30px; }

        /* TIMELINE NEWS */
        .news-timeline { position: relative; padding-left: 50px; }
        .news-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-blue), #eee);
        }

        .timeline-item { position: relative; margin-bottom: 80px; }
        .timeline-item::after {
            content: '';
            position: absolute;
            left: -56px;
            top: 5px;
            width: 14px;
            height: 14px;
            background: var(--primary-blue);
            border: 3px solid #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(60, 114, 252, 0.2);
        }

        .timeline-date {
            font-size: 14px;
            font-weight: 800;
            color: var(--primary-blue);
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }
        .timeline-content h4 { font-size: 28px; font-weight: 800; margin-bottom: 15px; color: var(--dark-bg); }
        .timeline-content p { font-size: 16px; color: #555; line-height: 1.7; max-width: 800px; }

        /* ASSET HUB */
        .glass-asset {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid #f0f0f0;
            text-align: center;
            transition: 0.4s;
            margin-bottom: 25px;
        }

        .glass-asset:hover {
            transform: translateY(-10px);
            border-color: var(--primary-blue);
            box-shadow: 0 20px 40px rgba(60, 114, 252, 0.1);
        }

        .glass-asset i { font-size: 40px; color: var(--primary-blue); margin-bottom: 20px; display: block; }
        .glass-asset h5 { font-weight: 800; margin-bottom: 10px; }
        
        .btn-download-hub {
            background: var(--dark-bg);
            color: #fff;
            padding: 8px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }
        .glass-asset:hover .btn-download-hub { background: var(--primary-blue); }

        /* MODERN CONTACT */
        .press-contact {
            background: var(--dark-bg);
            border-radius: 30px;
            padding: 60px;
            color: #fff;
            margin-top: 50px;
        }

        .press-contact h3 { font-size: 40px; font-weight: 800; margin-bottom: 20px; }
        .press-contact p { font-size: 18px; opacity: 0.7; margin-bottom: 40px; }

        .contact-pill-wrap { display: flex; gap: 20px; flex-wrap: wrap; }
        .contact-pill {
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        .contact-pill:hover { background: var(--primary-blue); border-color: transparent; }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Media & Press Center</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            
            <!-- FEATURED SPOTLIGHT -->
            <div class="featured-news" data-aos="fade-up">
                <div class="featured-img">
                    <img src="<?php echo BASE_URL; ?>assets/images/banner/banner-02.jpg" alt="Featured News">
                </div>
                <div class="featured-content">
                    <span class="badge-top">Breaking News</span>
                    <h3>Pioneering the Future of Enterprise AI in Global Markets</h3>
                    <p>Web Nexa Technologies has unveiled its revolutionary AI integration framework, designed to transform how Fortune 500 companies handle data processing and customer engagement at scale. This milestone marks a new era in our journey toward global digital leadership.</p>
                    <a href="#" class="btn btn-style-one">Read Full Story <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title-wrap mb-5" data-aos="fade-right">
                        <h3 class="display-6 fw-bold">Recent Updates</h3>
                    </div>

                    <div class="news-timeline">
                        <div class="timeline-item" data-aos="fade-up">
                            <span class="timeline-date">October 15, 2025</span>
                            <div class="timeline-content">
                                <h4>London Hub: Our New European Strategic Gateway</h4>
                                <p>We are excited to announce the opening of our new regional headquarters in the heart of London. This office will serve as the central hub for our European operations.</p>
                            </div>
                        </div>

                        <div class="timeline-item" data-aos="fade-up">
                            <span class="timeline-date">September 10, 2025</span>
                            <div class="timeline-content">
                                <h4>Recognized for Digital Excellence: Agency of the Year</h4>
                                <p>Web Nexa has been named the 'Digital Agency of the Year' at the 2025 Global Tech Summit, recognizing our commitment to innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section-title-wrap mb-4" data-aos="fade-left">
                        <h3 class="fs-4 fw-bold">Media Assets</h3>
                    </div>
                    
                    <div class="glass-asset" data-aos="fade-up">
                        <i class="fa-solid fa-swatches"></i>
                        <h5>Visual Identity</h5>
                        <a href="#" class="btn-download-hub">Get Brand Kit</a>
                    </div>

                    <div class="glass-asset" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-solid fa-file-invoice"></i>
                        <h5>Press Kit 2025</h5>
                        <a href="#" class="btn-download-hub">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- MODERN CONTACT -->
            <div class="press-contact" data-aos="zoom-in">
                <h3>Media Inquiries</h3>
                <p>Reach out to our global communications team for press requests or expert commentary.</p>
                <div class="contact-pill-wrap">
                    <a href="mailto:info@webnexatechnologies.com" class="contact-pill">
                        <i class="fa-solid fa-envelope"></i>
                        info@webnexatechnologies.com
                    </a>
                    <a href="tel:+919910893885" class="contact-pill">
                        <i class="fa-solid fa-phone"></i>
                        +91 9910893885
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
