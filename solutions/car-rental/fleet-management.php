<?php 
$page_title = 'Fleet Management Engineering | WebNexa';
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
                    <div class="tech-badge">Fleet Intelligence v6.0</div>
                    <h1 class="display-3 fw-900 mb-4">Fleet Operations <br> <span class="gradient-tech-text">Command</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering enterprise-grade fleet control. We deploy maintenance forecasting, automated fuel auditing, and real-time telematics dashboards for high-volume logistics.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">Operations Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>NETWORK: MESH IoT CONNECT</span>
            <span>DIAGNOSTICS: CAN-BUS v3</span>
            <span>Uptime: 99.999%</span>
            <span>SYNC: GLOBAL GEO-REPLICATED</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Fleet <span class="gradient-tech-text">Command Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-tools"></i>
                <h4>Predictive Service</h4>
                <p>Maintenance module that forecasts mechanical failures before they occur by analyzing real-time CAN-bus data stream.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-gas-pump"></i>
                <h4>Fuel Audit Engine</h4>
                <p>Automated fuel expense tracker that cross-references GPS movement with fuel card transactions to detect theft/leakage.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-user-clock"></i>
                <h4>Driver Behavior</h4>
                <p>Advanced telematics that scores drivers based on harsh braking, acceleration, and idling time to optimize fuel efficiency.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-file-invoice-dollar"></i>
                <h4>Expense Unified</h4>
                <p>Centralized financial dashboard for tracking registration renewals, insurance, fines, and maintenance costs per vehicle.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-map-marked-alt"></i>
                <h4>Live Dispatch</h4>
                <p>Intelligent routing module that assigns vehicles to new bookings based on proximity, battery/fuel status, and cleaning state.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-shield-virus"></i>
                <h4>Asset Hardening</h4>
                <p>Remote immobilizer module allowing admins to shut down vehicle ignition in case of theft or geo-fence breach.</p>
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
                        <td>Data Refresh</td>
                        <td>30 - 120 Seconds</td>
                        <td><i class="fas fa-check-circle check-v"></i> < 2 Seconds (Stream)</td>
                    </tr>
                    <tr>
                        <td>Failure Prediction</td>
                        <td>None / Reactive</td>
                        <td><i class="fas fa-check-circle check-v"></i> ML-Powered (Proactive)</td>
                    </tr>
                    <tr>
                        <td>Audit Integrity</td>
                        <td>Manual CSV Exports</td>
                        <td><i class="fas fa-check-circle check-v"></i> Real-time Verification</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
