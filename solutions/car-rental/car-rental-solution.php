<?php 
$page_title = 'Car Rental Engineering | WebNexa';
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
                    <div class="tech-badge">Mobility-Tech Protocol v5.0</div>
                    <h1 class="display-3 fw-900 mb-4">Car Rental <br> <span class="gradient-tech-text">Masterclass</span></h1>
                    <p class="lead opacity-75 mb-5">Architecting high-frequency mobility ecosystems. We deploy IoT-enabled vehicle tracking, automated rental agreement engines, and hyper-fast booking flows.</p>
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
            <span>TRACKING: REAL-TIME GPS/IoT</span>
            <span>AUTH: DIGITAL KYC/DL VERIFY</span>
            <span>Uptime: 99.99%</span>
            <span>DATA: GEO-FENCED ALERTS</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Rental <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-key"></i>
                <h4>Keyless Entry</h4>
                <p>Digital key module allowing users to unlock vehicles directly from their smartphone using encrypted Bluetooth/NFC protocols.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-map-marked-alt"></i>
                <h4>IoT Telematics</h4>
                <p>Real-time vehicle health monitoring, tracking fuel levels, tire pressure, and engine status via custom OBD-II integration.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-id-card"></i>
                <h4>Digital KYC</h4>
                <p>Automated driver's license verification and facial recognition module to ensure 100% identity accuracy before rental.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-dollar-sign"></i>
                <h4>Dynamic Pricing</h4>
                <p>Algorithmic pricing engine that adjusts rental rates based on demand, vehicle age, and user rental history.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-shield-alt"></i>
                <h4>Insurance Hub</h4>
                <p>Integrated insurance module allowing users to purchase coverage and report accidents with photographic evidence.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-route"></i>
                <h4>Route Analytics</h4>
                <p>Advanced mapping module that provides geo-fencing, speed alerts, and historical trip analysis for admins.</p>
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
                        <td>Tracking Latency</td>
                        <td>30 - 60 Seconds</td>
                        <td><i class="fas fa-check-circle check-v"></i> < 5 Seconds (IoT Hub)</td>
                    </tr>
                    <tr>
                        <td>KYC Verification</td>
                        <td>Manual / Delayed</td>
                        <td><i class="fas fa-check-circle check-v"></i> AI Instant-Verify</td>
                    </tr>
                    <tr>
                        <td>System Security</td>
                        <td>Standard SSL</td>
                        <td><i class="fas fa-check-circle check-v"></i> Geo-Locked Operations</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
