<?php 
$page_title = 'Cosmetics E-Commerce Engineering | WebNexa';
include_once __DIR__ . '/../../config.php'; 
include_once __DIR__ . '/../../header-new.php'; 
?>

<style>
    .solution-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .solution-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; }
    .hero-visual { position: absolute; top: 0; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(221, 0, 184, 0.1) 0%, transparent 70%); filter: blur(100px); }
    
    .tech-matrix { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; padding: 100px 0; }
    .matrix-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 45px; backdrop-filter: blur(40px); transition: 0.4s; }
    .matrix-card:hover { border-color: rgb(221, 0, 184); transform: translateY(-12px); background: rgba(221, 0, 184, 0.03); }
    .matrix-card i { font-size: 35px; color: rgb(216, 115, 255); margin-bottom: 25px; display: block; }
    
    .advantage-table { background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; margin-top: 60px; }
    .advantage-table th { background: rgba(221, 0, 184, 0.1); padding: 25px; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .advantage-table td { padding: 20px 25px; border-bottom: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 15px; }
    .check-v { color: #10b981; margin-right: 10px; }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">Beauty-Tech Protocol</div>
                    <h1 class="display-3 fw-900 mb-4">Cosmetics Shop <br> <span class="gradient-tech-text">Engineering</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-conversion beauty platforms. We integrate AI shade-match algorithms, virtual makeup studios, and automated replenishment subscriptions.</p>
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
            <span>AI ENGINE: SHADE-SCANNER v2</span>
            <span>UPSELL: ML-DRIVEN BUNDLES</span>
            <span>SUBS: AUTOPILOT ENABLED</span>
            <span>UX: HYPER-FAST RENDER</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Cosmetics <span class="gradient-tech-text">Tech Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-magic"></i>
                <h4>AI Shade Matcher</h4>
                <p>Neural network based skin-tone analyzer that recommends the perfect foundation shade using live camera input.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-sync"></i>
                <h4>Smart Subscriptions</h4>
                <p>Automated replenishment logic that predicts when a user will run out of a product based on usage data.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-microscope"></i>
                <h4>Ingredient Transparency</h4>
                <p>Interactive module allowing users to scan ingredients and see detailed safety and benefit data for every chemical.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-video"></i>
                <h4>Virtual Makeup AR</h4>
                <p>Real-time lip, eye, and face makeup simulation using low-latency AR filters for "Try Before You Buy."</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-shopping-basket"></i>
                <h4>Bundle Upsell Engine</h4>
                <p>Machine learning module that suggests complementary skincare routines based on cart contents and skin profile.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-comment-dots"></i>
                <h4>Beauty Consultation</h4>
                <p>Integrated live video-shopping and chat module for personalized consultations with brand experts.</p>
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
                        <td>Subscription Control</td>
                        <td>Manual / Fragmented</td>
                        <td><i class="fas fa-check-circle check-v"></i> Unified Autopilot</td>
                    </tr>
                    <tr>
                        <td>Recommendation</td>
                        <td>Generic Bestsellers</td>
                        <td><i class="fas fa-check-circle check-v"></i> AI Skin-Profile Driven</td>
                    </tr>
                    <tr>
                        <td>Mobile Performance</td>
                        <td>Slow / Clunky</td>
                        <td><i class="fas fa-check-circle check-v"></i> Ultra-Lightweight PWA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
