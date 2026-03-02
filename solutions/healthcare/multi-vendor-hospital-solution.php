<?php 
$page_title = 'Multi-Vendor Healthcare Engineering | WebNexa';
include_once __DIR__ . '/../../config.php'; 
include_once __DIR__ . '/../../header-new.php'; 
?>

<style>
    .solution-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .solution-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; }
    .hero-visual { position: absolute; top: 0; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%); filter: blur(100px); }
    
    .tech-matrix { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; padding: 100px 0; }
    .matrix-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 45px; backdrop-filter: blur(40px); transition: 0.4s; }
    .matrix-card:hover { border-color: #10b981; transform: translateY(-12px); background: rgba(16, 185, 129, 0.03); }
    .matrix-card i { font-size: 35px; color: #10b981; margin-bottom: 25px; display: block; }
    
    .advantage-table { background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; margin-top: 60px; }
    .advantage-table th { background: rgba(16, 185, 129, 0.1); padding: 25px; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .advantage-table td { padding: 20px 25px; border-bottom: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 15px; }
    .check-v { color: #10b981; margin-right: 10px; }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">Healthcare Marketplace Protocol</div>
                    <h1 class="display-3 fw-900 mb-4">Multi-Vendor <br> <span class="gradient-tech-text">Health Hubs</span></h1>
                    <p class="lead opacity-75 mb-5">Architecting global medical marketplaces. We deploy unified provider onboarding, multi-tenant EMR data isolation, and cross-border telemedicine networks.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">Marketplace Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>TENANCY: ISOLATED DB CLUSTERS</span>
            <span>PROVIDER CAP: UNLIMITED SCALING</span>
            <span>PAYMENTS: ESCROW INTEGRATED</span>
            <span>DATA: HIPAA MULTI-TENANT</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Marketplace <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-user-plus"></i>
                <h4>Provider Onboarding</h4>
                <p>Automated verification workflow for clinics and doctors with digital credentialing and license validation API hooks.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-database"></i>
                <h4>Multi-Tenant EMR</h4>
                <p>Sophisticated data architecture that ensures absolute patient record isolation between different healthcare providers on the same platform.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-headset"></i>
                <h4>Unified Tele-Hub</h4>
                <p>Centralized consultation engine that routes patient requests to available providers across the entire network in real-time.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-wallet"></i>
                <h4>Escrow Payments</h4>
                <p>Secure financial module that handles multi-currency transactions, provider payouts, and automated platform commissions.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-star"></i>
                <h4>Global Rating Logic</h4>
                <p>Transparent review and verification system for providers, ensuring high-quality medical standards across the marketplace.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-chart-pie"></i>
                <h4>Aggregated Analytics</h4>
                <p>Master dashboard for platform admins to monitor network-wide patient load, revenue trends, and provider performance.</p>
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
                        <td>Data Isolation</td>
                        <td>Shared Tables (Risky)</td>
                        <td><i class="fas fa-check-circle check-v"></i> Database Per Tenant</td>
                    </tr>
                    <tr>
                        <td>Scalability</td>
                        <td>Vertical / Limited</td>
                        <td><i class="fas fa-check-circle check-v"></i> Horizontal Auto-Scale</td>
                    </tr>
                    <tr>
                        <td>Payout Logic</td>
                        <td>Manual Processing</td>
                        <td><i class="fas fa-check-circle check-v"></i> Automated Split-Pay</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
