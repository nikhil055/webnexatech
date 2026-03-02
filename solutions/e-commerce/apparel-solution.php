<?php 
$page_title = 'Apparel E-Commerce Engineering | WebNexa';
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
    .advantage-table tr:last-child td { border-bottom: none; }
    .check-v { color: #10b981; margin-right: 10px; }

    @media (max-width: 991px) { .tech-matrix { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { .tech-matrix { grid-template-columns: 1fr; } }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">E-Commerce Protocol v4.0</div>
                    <h1 class="display-3 fw-900 mb-4">Apparel Store <br> <span class="gradient-tech-text">Engineering</span></h1>
                    <p class="lead opacity-75 mb-5">Architecting high-frequency fashion ecosystems. We deploy sub-second checkout flows, AI-driven size recommendation engines, and dynamic inventory sync for global apparel brands.</p>
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
            <span>CORE: NEXT.JS 15</span>
            <span>DB: POSTGRESQL + REDIS</span>
            <span>LATENCY: < 80MS</span>
            <span>UPTIME: 99.99%</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Apparel <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-arrows-alt-v"></i>
                <h4>Size-Fit Engine</h4>
                <p>Advanced algorithmic recommendation engine that reduces return rates by 40% through precise user profile matching.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-bolt"></i>
                <h4>Ultra-Fast Filter</h4>
                <p>Instantaneous facet search using Elasticsearch, allowing users to browse 10,000+ SKUs in real-time without reloading.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-layer-group"></i>
                <h4>Lookbook Sync</h4>
                <p>Integrated shoppable media modules where every pixel of a campaign video can be converted to an add-to-cart action.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-sync-alt"></i>
                <h4>Omnichannel Inventory</h4>
                <p>Real-time sync between physical retail warehouses and global digital storefronts via custom ERP hooks.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-mobile-alt"></i>
                <h4>PWA Experience</h4>
                <p>A native-app-like mobile experience with offline browsing and push notifications for flash sales.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-shield-virus"></i>
                <h4>Fraud Guard</h4>
                <p>Machine-learning-based transaction screening to prevent bot attacks and fraudulent chargebacks.</p>
            </div>
        </div>

        <div class="advantage-table" data-aos="fade-up">
            <table class="w-100">
                <thead>
                    <tr>
                        <th style="width: 40%;">Strategic Advantage</th>
                        <th style="width: 30%;">Standard Solution</th>
                        <th style="width: 30%;">WebNexa Elite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Server-Side Rendering</td>
                        <td>Limited / Template Based</td>
                        <td><i class="fas fa-check-circle check-v"></i> Full Next.js ISR/SSR</td>
                    </tr>
                    <tr>
                        <td>Checkout Latency</td>
                        <td>3 - 5 Seconds</td>
                        <td><i class="fas fa-check-circle check-v"></i> < 1.2 Seconds</td>
                    </tr>
                    <tr>
                        <td>AI Recommendation</td>
                        <td>Static / Manual</td>
                        <td><i class="fas fa-check-circle check-v"></i> Neural Network Driven</td>
                    </tr>
                    <tr>
                        <td>Inventory Refresh</td>
                        <td>15 - 30 Minutes</td>
                        <td><i class="fas fa-check-circle check-v"></i> Real-time (Webhook)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
