<?php 
$page_title = 'Jewellery E-Commerce Engineering | WebNexa';
include_once __DIR__ . '/../../config.php'; 
include_once __DIR__ . '/../../header-new.php'; 
?>

<style>
    .solution-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .solution-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; }
    .hero-visual { position: absolute; top: 0; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(216, 115, 255, 0.1) 0%, transparent 70%); filter: blur(100px); }
    
    .tech-matrix { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; padding: 100px 0; }
    .matrix-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 45px; backdrop-filter: blur(40px); transition: 0.4s; }
    .matrix-card:hover { border-color: rgb(216, 115, 255); transform: translateY(-12px); background: rgba(216, 115, 255, 0.03); }
    .matrix-card i { font-size: 35px; color: rgb(216, 115, 255); margin-bottom: 25px; display: block; }
    
    .advantage-table { background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; margin-top: 60px; }
    .advantage-table th { background: rgba(216, 115, 255, 0.1); padding: 25px; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .advantage-table td { padding: 20px 25px; border-bottom: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 15px; }
    .check-v { color: #10b981; margin-right: 10px; }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">Luxury Commerce Protocol</div>
                    <h1 class="display-3 fw-900 mb-4">Jewellery Shop <br> <span class="gradient-tech-text">Masterclass</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-trust digital storefronts for luxury jewellery. We integrate 4K zoom optics, real-time metal price APIs, and AR-powered virtual try-on experiences.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">System Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>METAL PRICE: REAL-TIME API</span>
            <span>VISUALS: 4K OPTIC ZOOM</span>
            <span>AUTH: 2FA ENCRYPTED</span>
            <span>TRUST: GIA INTEGRATED</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Jewellery <span class="gradient-tech-text">Tech Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-vr-cardboard"></i>
                <h4>AR Virtual Try-On</h4>
                <p>Augmented Reality module allowing users to virtually wear rings, necklaces, and earrings with 99% precision scaling.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-chart-line"></i>
                <h4>Dynamic Pricing</h4>
                <p>Auto-calibrating price engine that adjusts product costs in real-time based on global gold, silver, and platinum markets.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-gem"></i>
                <h4>Certification Hub</h4>
                <p>Digital vault for GIA, IGI, and HRD certificates, allowing customers to verify diamond authenticity instantly.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-search-plus"></i>
                <h4>Micro-Detail Zoom</h4>
                <p>Advanced image rendering engine for extreme close-up views of hallmarks, facets, and metal grain.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-shield-alt"></i>
                <h4>High-Value Security</h4>
                <p>Fortified checkout with multi-stage verification for high-ticket transactions exceeding $10,000+.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-gift"></i>
                <h4>Custom Configurator</h4>
                <p>A "Build Your Own Ring" module with real-time 3D rendering and instant cost estimation.</p>
            </div>
        </div>

        <div class="advantage-table" data-aos="fade-up">
            <table class="w-100">
                <thead>
                    <tr>
                        <th style="width: 40%;">Technical Advantage</th>
                        <th style="width: 30%;">Standard Solution</th>
                        <th style="width: 30%;">WebNexa Elite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Metal Price Sync</td>
                        <td>Manual / Delayed</td>
                        <td><i class="fas fa-check-circle check-v"></i> API-Driven (Every 60s)</td>
                    </tr>
                    <tr>
                        <td>Product Visuals</td>
                        <td>Standard JPEG</td>
                        <td><i class="fas fa-check-circle check-v"></i> WebP + 3D GLB Models</td>
                    </tr>
                    <tr>
                        <td>Trust Verification</td>
                        <td>Static Text</td>
                        <td><i class="fas fa-check-circle check-v"></i> Dynamic QR-Verify</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
