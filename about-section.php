<?php include_once 'config.php'; ?>
<style>
    .about-tech-v2 {
        position: relative;
        padding: 120px 0;
        background: #080b12;
        /* Matching Hero Background */
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    /* Subtle Background Pattern */
    .about-tech-v2::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.5;
        z-index: 1;
    }

    .container {
        position: relative;
        z-index: 10;
    }

    /* Left Side Visual */
    .about-visual-box {
        position: relative;
        padding: 40px;
    }

    .main-about-card {
        position: relative;
        width: 100%;
        aspect-ratio: 1/1;
        background: rgba(15, 23, 42, 0.8);
        border: 1px solid rgba(114, 79, 255, 0.2);
        border-radius: 40px;
        backdrop-filter: blur(20px);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.5);
    }

    .main-about-card::after {
        content: "";
        position: absolute;
        inset: -50%;
        background: conic-gradient(from 0deg, transparent, rgb(114, 79, 255), transparent 30%);
        animation: rotateGlow 10s linear infinite;
        opacity: 0.3;
    }

    @keyframes rotateGlow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .about-inner-content {
        position: relative;
        z-index: 5;
        text-align: center;
    }

    .floating-badge {
        position: absolute;
        bottom: 10%;
        right: -10px;
        background: linear-gradient(135deg, rgb(114, 79, 255), rgb(221, 0, 184));
        padding: 25px;
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(114, 79, 255, 0.4);
        animation: floatBadge 5s infinite alternate ease-in-out;
    }

    @keyframes floatBadge {
        from {
            transform: translateY(0) rotate(5deg);
        }

        to {
            transform: translateY(-20px) rotate(-5deg);
        }
    }

    .floating-badge h2 {
        font-weight: 800;
        font-size: 36px;
        margin: 0;
        line-height: 1;
    }

    .floating-badge p {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 1px;
    }

    .about-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px;
        border-radius: 100px;
        font-size: 12px;
        font-weight: 700;
        color: rgb(216, 115, 255);
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .about-tech-v2 h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 30px;
        letter-spacing: -2px;
    }


    .about-tech-v2 p.main-p {
        font-size: 17px;
        color: #94a3b8;
        line-height: 1.8;
        margin-bottom: 35px;
    }

    /* Feature Grid */
    .about-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 45px;
    }

    .feature-item {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px;
        border-radius: 20px;
        transition: 0.3s;
    }

    .feature-item:hover {
        background: rgba(114, 79, 255, 0.05);
        border-color: rgba(114, 79, 255, 0.3);
        transform: translateY(-5px);
    }

    .feature-item i {
        font-size: 24px;
        color: rgb(114, 79, 255);
        margin-bottom: 12px;
        display: block;
    }

    .feature-item h6 {
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 8px;
    }

    .feature-item p {
        font-size: 13px;
        color: #64748b;
        margin: 0;
        line-height: 1.5;
    }

    .btn-cyber-outline-small {
        color: #fff !important;
        padding: 14px 30px;
        border-radius: 100px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: 0.3s;
    }

    .btn-cyber-outline-small:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgb(216, 115, 255);
        color: rgb(216, 115, 255) !important;
    }

    @media (max-width: 991px) {
        .about-tech-v2 {
            padding: 80px 0;
            text-align: center;
        }

        .about-features {
            grid-template-columns: 1fr;
            text-align: left;
        }

        .about-visual-box {
            max-width: 400px;
            margin: 0 auto 50px;
        }
    }
</style>

<section class="about-tech-v2">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="about-tag">
                <i class="fas fa-bolt"></i> About WebNexa
            </div>
            <h2>We Architect Digital <br> <span class="gradient-tech-text">Dominance & Scalability</span></h2>
        </div>

        <div class="row align-items-center">
            <!-- Left Side: Visual -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-img">
                    <img class="about-circle" src="assets/images/about/download.png" width="100%" alt="">
                    <img class="main-img" src="assets/images/about/about.png" width="100%" alt="">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7 ps-lg-5" data-aos="fade-left">
                <p class="main-p">
                    At WebNexa, we don't just build websites; we engineer ecosystems. Our philosophy blends high-performance software development with aggressive digital marketing to ensure your brand doesn't just exist online—it dominates.
                </p>

                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-microchip"></i>
                        <h6>Scalable Software</h6>
                        <p>Modular architectures designed to grow with your enterprise demands.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-chart-line"></i>
                        <h6>SEO Domination</h6>
                        <p>Data-backed strategies to capture and convert high-intent traffic.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-code-branch"></i>
                        <h6>Custom Web Apps</h6>
                        <p>Secure, lightning-fast applications tailored to your business logic.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-layer-group"></i>
                        <h6>Full-Stack Growth</h6>
                        <p>From back-end stability to front-end aesthetic perfection.</p>
                    </div>
                </div>

                <div class="about-actions">
                    <a href="<?php echo BASE_URL; ?>about/about.php" class="btn-cyber-outline-small">
                        Discover Our Story <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>