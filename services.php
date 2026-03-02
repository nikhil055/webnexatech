<?php 
$page_title = 'Capability Command Center | WebNexa';
include_once 'config.php'; 
include_once 'header-new.php'; 
?>

<style>
    .services-main-v3 { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    /* SERVICES HERO */
    .services-hero-v3 { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .services-hero-v3 h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }
    .hero-flux { position: absolute; inset: 0; background: radial-gradient(circle at 50% 50%, rgba(114, 79, 255, 0.1) 0%, transparent 70%); animation: fluxGlow 8s infinite alternate; }
    @keyframes fluxGlow { 0% { opacity: 0.3; transform: scale(1); } 100% { opacity: 0.6; transform: scale(1.2); } }

    /* MASTER CAPABILITY GRID */
    .capability-grid-v3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; padding: 100px 0; }
    
    .capability-card-v3 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 50px; padding: 60px 45px; backdrop-filter: blur(40px); transition: 0.5s; position: relative; overflow: hidden; display: flex; flex-direction: column; height: 100%; }
    .capability-card-v3:hover { border-color: rgb(114, 79, 255); transform: translateY(-15px); background: rgba(114, 79, 255, 0.03); box-shadow: 0 40px 80px -20px rgba(0,0,0,0.6); }

    .cap-icon-v3 { width: 80px; height: 80px; background: rgba(114, 79, 255, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: rgb(114, 79, 255); font-size: 32px; margin-bottom: 35px; transition: 0.4s; }
    .capability-card-v3:hover .cap-icon-v3 { background: rgb(114, 79, 255); color: #fff; box-shadow: 0 0 30px rgba(114, 79, 255, 0.4); }

    .capability-card-v3 h3 { font-size: 32px; font-weight: 900; margin-bottom: 20px; letter-spacing: -1px; line-height: 1.1; }
    .capability-card-v3 p { color: #94a3b8; font-size: 16px; line-height: 1.7; margin-bottom: 35px; }

    .sub-service-list-v3 { list-style: none; padding: 0; margin: 0 0 40px 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .sub-service-list-v3 li { font-size: 12px; font-weight: 700; color: #fff; display: flex; align-items: center; gap: 8px; opacity: 0.7; }
    .sub-service-list-v3 li i { color: rgb(216, 115, 255); font-size: 10px; }

    .cap-link-v3 { margin-top: auto; display: inline-flex; align-items: center; gap: 12px; font-weight: 800; font-size: 12px; text-transform: uppercase; letter-spacing: 2px; color: #fff; text-decoration: none; transition: 0.3s; }
    .cap-link-v3:hover { color: rgb(216, 115, 255); }
    .cap-link-v3 i { transition: 0.3s; }
    .cap-link-v3:hover i { transform: translateX(8px); }

    /* STATUS STRIP */
    .status-strip-v3 { background: #000; padding: 20px 0; border-y: 1px solid rgba(255,255,255,0.05); }
    .status-item-v3 { font-family: 'Fira Code', monospace; font-size: 11px; color: rgb(216, 115, 255); opacity: 0.6; text-transform: uppercase; }

    @media (max-width: 1200px) { .capability-grid-v3 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { .capability-grid-v3 { grid-template-columns: 1fr; } .capability-card-v3 { padding: 40px 30px; } }
</style>

<div class="services-main-v3">
    <section class="services-hero-v3">
        <div class="hero-flux"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Capability Command Center</div>
            <h1 data-aos="zoom-in">Architecting the <br> <span class="gradient-tech-text">Future of Digital</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Deploying elite-tier engineering, performance marketing, and creative strategy to help enterprises dominate global markets.</p>
        </div>
    </section>

    <div class="status-strip-v3">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="status-item-v3"><i class="fas fa-circle-notch fa-spin me-2"></i> SYSTEM_ACTIVE: 24/7 MONITORING</span>
            <span class="status-item-v3">GLOBAL_LATENCY: < 42ms</span>
            <span class="status-item-v3">CORE_ENGINE: NEXT.JS 15</span>
            <span class="status-item-v3">ENCRYPTION: AES-256</span>
        </div>
    </div>

    <div class="container">
        <div class="capability-grid-v3">
            
            <!-- 01. TECHNOLOGY -->
            <div class="capability-card-v3" data-aos="fade-up">
                <div class="cap-icon-v3"><i class="fas fa-code"></i></div>
                <h3>Technology & <br> Engineering</h3>
                <p>Architecting high-performance scalable systems using the world's most advanced technology stacks.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-microchip"></i> Web Dev</li>
                    <li><i class="fas fa-microchip"></i> Software</li>
                    <li><i class="fas fa-microchip"></i> Shopify</li>
                    <li><i class="fas fa-microchip"></i> Mobile Apps</li>
                    <li><i class="fas fa-microchip"></i> WordPress</li>
                    <li><i class="fas fa-microchip"></i> iOS Eng</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>technology/website-development.php" class="cap-link-v3">Enter Technology Lab <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 02. SEO -->
            <div class="capability-card-v3" data-aos="fade-up" data-aos-delay="100">
                <div class="cap-icon-v3"><i class="fas fa-magnifying-glass-chart"></i></div>
                <h3>Search Engine <br> Dominance</h3>
                <p>Scaling organic growth through algorithmic precision and high-authority topical relevance.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-spider"></i> Technical SEO</li>
                    <li><i class="fas fa-location-dot"></i> Local SEO</li>
                    <li><i class="fas fa-cart-shopping"></i> E-Comm SEO</li>
                    <li><i class="fas fa-video"></i> YouTube SEO</li>
                    <li><i class="fas fa-link"></i> Link Audit</li>
                    <li><i class="fas fa-chart-line"></i> ROI Tracking</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>seo/seo-services.php" class="cap-link-v3">Enter SEO Lab <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 03. PAID MEDIA -->
            <div class="capability-card-v3" data-aos="fade-up" data-aos-delay="200">
                <div class="cap-icon-v3"><i class="fas fa-bullseye"></i></div>
                <h3>Performance <br> Paid Media</h3>
                <p>Executing ROAS-driven campaigns across global ad exchanges with real-time bidding logic.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-search-dollar"></i> Search Ads</li>
                    <li><i class="fas fa-share-nodes"></i> Social Ads</li>
                    <li><i class="fas fa-tv"></i> OTT Ads</li>
                    <li><i class="fas fa-robot"></i> Programmatic</li>
                    <li><i class="fas fa-road"></i> OOH Media</li>
                    <li><i class="fas fa-chart-pie"></i> Attribution</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>paid-media/search-ads.php" class="cap-link-v3">Enter Media Lab <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 04. CREATIVE -->
            <div class="capability-card-v3" data-aos="fade-up">
                <div class="cap-icon-v3"><i class="fas fa-bezier-curve"></i></div>
                <h3>Creative <br> Studio</h3>
                <p>Architecting iconic brand visual systems and immersive user interfaces that capture market attention.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-pen-nib"></i> Branding</li>
                    <li><i class="fas fa-laptop-code"></i> UI/UX Design</li>
                    <li><i class="fas fa-clapperboard"></i> Motion</li>
                    <li><i class="fas fa-camera"></i> Photoshoot</li>
                    <li><i class="fas fa-film"></i> Production</li>
                    <li><i class="fas fa-swatches"></i> Identity</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>creative/branding.php" class="cap-link-v3">Enter Creative Lab <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 05. CONTENT -->
            <div class="capability-card-v3" data-aos="fade-up" data-aos-delay="100">
                <div class="cap-icon-v3"><i class="fas fa-feather-pointed"></i></div>
                <h3>Content <br> Engineering</h3>
                <p>Deploying high-conversion storytelling and semantic documentation architectures for global reach.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-file-lines"></i> Copywriting</li>
                    <li><i class="fas fa-bullhorn"></i> Marketing</li>
                    <li><i class="fas fa-book-medical"></i> Technical</li>
                    <li><i class="fas fa-language"></i> Localization</li>
                    <li><i class="fas fa-newspaper"></i> Press PR</li>
                    <li><i class="fas fa-quote-left"></i> Storytelling</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>content/content-writing.php" class="cap-link-v3">Enter Content Lab <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 06. SOLUTIONS -->
            <div class="capability-card-v3" data-aos="fade-up" data-aos-delay="200">
                <div class="cap-icon-v3"><i class="fas fa-layer-group"></i></div>
                <h3>Industry <br> Solutions</h3>
                <p>End-to-end enterprise ecosystems specifically engineered for niche industry dominance.</p>
                <ul class="sub-service-list-v3">
                    <li><i class="fas fa-cart-flatbed"></i> E-Commerce</li>
                    <li><i class="fas fa-hospital-user"></i> Healthcare</li>
                    <li><i class="fas fa-car"></i> Car Rental</li>
                    <li><i class="fas fa-users-viewfinder"></i> Job Portals</li>
                    <li><i class="fas fa-building"></i> Real Estate</li>
                    <li><i class="fas fa-graduation-cap"></i> Ed-Tech</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>solutions.php" class="cap-link-v3">Enter Solutions Lab <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>

    <?php include_once 'contact-section-shared.php'; ?>
</div>

<?php include_once 'footer.php'; ?>
