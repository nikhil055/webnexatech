<?php 
$page_title = 'Self-Drive Portal Engineering | WebNexa';
include_once __DIR__ . '/../../config.php'; 
include_once __DIR__ . '/../../header-new.php'; 
?>

<style>
    .solution-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .solution-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; }
    .hero-visual { position: absolute; top: 0; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%); filter: blur(100px); }
    
    .tech-matrix { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; padding: 100px 0; }
    .matrix-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 45px; backdrop-filter: blur(40px); transition: 0.4s; }
    .matrix-card:hover { border-color: rgb(114, 79, 255); transform: translateY(-12px); background: rgba(114, 79, 255, 0.03); }
    .matrix-card i { font-size: 35px; color: rgb(216, 115, 255); margin-bottom: 25px; display: block; }
    
    .advantage-table { background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; margin-top: 60px; }
    .advantage-table th { background: rgba(114, 79, 255, 0.1); padding: 25px; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .advantage-table td { padding: 20px 25px; border-bottom: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 15px; }
    .check-v { color: #10b981; margin-right: 10px; }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">Customer-First Mobility v4.5</div>
                    <h1 class="display-3 fw-900 mb-4">Self-Drive <br> <span class="gradient-tech-text">Portals</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering hyper-fast consumer portals. We deploy sub-second vehicle search logic, automated identity verification, and seamless mobile-first booking experiences.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">UX Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>BOOKING: < 1.5 SECONDS</span>
            <span>IDENT: REAL-TIME DL SCAN</span>
            <span>Uptime: 99.999%</span>
            <span>UX: CLOUD-NATIVE PWA</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Portal <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-search"></i>
                <h4>Elastic Discovery</h4>
                <p>High-speed vehicle search engine using Elasticsearch, allowing users to filter by car type, fuel, and location in under 200ms.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-camera"></i>
                <h4>Instant KYC</h4>
                <p>Mobile-optimized DL and Identity scanning module with OCR data extraction and real-time backend verification.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-credit-card"></i>
                <h4>Seamless Checkout</h4>
                <p>Integrated multi-gateway payment module supporting card, UPI, and digital wallets with automated deposit handling.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-history"></i>
                <h4>Real-time Tracking</h4>
                <p>Post-booking live tracking module that shows the vehicle's exact location during delivery or pickup.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-tags"></i>
                <h4>Loyalty Engine</h4>
                <p>Points-based rewards system that automatically applies discounts for frequent "Elite" tier renters.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-mobile-alt"></i>
                <h4>PWA Handover</h4>
                <p>Digital checklist for vehicle handover with photographic damage reporting and timestamped digital signatures.</p>
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
                        <td>Search Response</td>
                        <td>Slow (Page Reload)</td>
                        <td><i class="fas fa-check-circle check-v"></i> Instant (JSON API)</td>
                    </tr>
                    <tr>
                        <td>Identity Verification</td>
                        <td>Manual Email/WhatsApp</td>
                        <td><i class="fas fa-check-circle check-v"></i> Automated OCR Flow</td>
                    </tr>
                    <tr>
                        <td>Handover Logic</td>
                        <td>Paper-Based</td>
                        <td><i class="fas fa-check-circle check-v"></i> Digital Proof-of-State</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
