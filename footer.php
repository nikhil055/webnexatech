<?php include_once 'config.php'; ?>
<style>
    .footer-elite-v2 {
        background: #05070a;
        color: #fff;
        padding: 100px 0 0;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Ambient Background */
    .footer-glow {
        position: absolute;
        top: 0;
        left: 50%;
        width: 800px;
        height: 400px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.05) 0%, transparent 70%);
        transform: translateX(-50%);
        z-index: 1;
        pointer-events: none;
    }

    .container {
        position: relative;
        z-index: 10;
    }

    /* Footer Branding Zone */
    .footer-brand h4 {
        font-weight: 900;
        font-size: 28px;
        letter-spacing: -1px;
        margin-bottom: 25px;
    }

    .footer-brand p {
        color: #94a3b8;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 30px;
        max-width: 320px;
    }

    .social-stack {
        display: flex;
        gap: 12px;
    }

    .social-link {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        font-size: 18px;
        transition: 0.4s;
        text-decoration: none;
    }

    .social-link:hover {
        background: rgb(114, 79, 255);
        color: #fff;
        border-color: rgb(114, 79, 255);
        box-shadow: 0 0 20px rgba(114, 79, 255, 0.4);
        transform: translateY(-5px);
    }

    /* Link Columns */
    .footer-col h5 {
        font-size: 16px;
        font-weight: 800;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-col h5::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 30px;
        height: 2px;
        background: rgb(114, 79, 255);
    }

    .f-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .f-links li {
        margin-bottom: 15px;
    }

    .f-links a {
        color: #94a3b8;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .f-links a:hover {
        color: rgb(216, 115, 255);
        transform: translateX(5px);
    }

    .f-links a::before {
        content: "→";
        font-size: 12px;
        opacity: 0;
        transition: 0.3s;
    }

    .f-links a:hover::before {
        opacity: 1;
    }

    /* Newsletter Area */
    .f-newsletter {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 25px;
        backdrop-filter: blur(10px);
    }

    .f-newsletter h6 {
        font-size: 14px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .f-newsletter p {
        font-size: 13px;
        color: #64748b;
        margin-bottom: 20px;
    }

    .news-input-wrap {
        display: flex;
        gap: 10px;
        background: rgba(255, 255, 255, 0.03);
        padding: 6px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .news-input-wrap input {
        flex: 1;
        background: transparent;
        border: none;
        padding: 10px 15px;
        color: #fff;
        font-size: 13px;
        outline: none;
    }

    .news-btn {
        background: rgb(114, 79, 255);
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
    }

    .news-btn:hover {
        background: rgb(221, 0, 184);
    }

    /* Footer Bottom */
    .footer-bottom {
        margin-top: 80px;
        padding: 30px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #475569;
        font-weight: 600;
    }

    .footer-bottom a {
        color: #94a3b8;
        text-decoration: none;
        margin-left: 20px;
    }

    .footer-bottom a:hover {
        color: #fff;
    }

    @media (max-width: 991px) {
        .footer-bottom {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        .footer-col {
            margin-bottom: 50px;
        }
    }
</style>

<footer class="footer-elite-v2">
    <div class="footer-glow"></div>
    <div class="container">
        <div class="row">
            <!-- Brand -->
            <div class="col-lg-4 col-md-12 footer-col">
                <div class="footer-brand">
                    <img src="<?php echo BASE_URL; ?>/assets/images/logo-web/logo.jpg" alt="WebNexa" style="width:150px;">
                    <p>Architecting the future of enterprise software and digital growth through high-performance engineering and data-driven intelligence.</p>
                    <div class="social-stack">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-4 footer-col">
                <h5>Platform</h5>
                <ul class="f-links">
                    <li><a href="<?php echo BASE_URL; ?>index.php">Home Center</a></li>
                    <li><a href="<?php echo BASE_URL; ?>about/about.php">Our Story</a></li>
                    <li><a href="<?php echo BASE_URL; ?>services.php">Service Stack</a></li>
                    <li><a href="<?php echo BASE_URL; ?>work/work.php">Masterpieces</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contact.php">Initialize Contact</a></li>
                </ul>
            </div>

            <!-- Solutions -->
            <div class="col-lg-2 col-md-4 footer-col">
                <h5>Ecosystems</h5>
                <ul class="f-links">
                    <li><a href="#">E-Commerce</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Job Portals</a></li>
                    <li><a href="#">Rental Tech</a></li>
                    <li><a href="#">Custom ERP</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4 col-md-4 footer-col">
                <div class="f-newsletter">
                    <h6>System Updates</h6>
                    <p>Subscribe to our technical briefing for latest trends in AI & Scalability.</p>
                    <div class="news-input-wrap">
                        <input type="email" placeholder="email@protocol.com">
                        <button class="news-btn">Sync</button>
                    </div>
                    <div class="mt-3" style="font-size: 10px; color: #475569;">
                        <i class="fas fa-lock me-1"></i> AES-256 Encrypted Subscription
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; <?php echo date('Y'); ?> WebNexa Technologies. All Protocols Reserved.
            </div>
            <div>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Security Audit</a>
            </div>
        </div>
    </div>
</footer>

<!-- Standard Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 50
            });
        }
    });
</script>