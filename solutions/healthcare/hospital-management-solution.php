<?php 
$page_title = 'Hospital Management Engineering | WebNexa';
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
                    <div class="tech-badge">Enterprise Health ERP</div>
                    <h1 class="display-3 fw-900 mb-4">Hospital System <br> <span class="gradient-tech-text">Masterclass</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-capacity hospital ecosystems. We deploy real-time bed tracking, automated OT scheduling, and unified multi-department data governance.</p>
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
            <span>NETWORK: MULTI-FACILITY SYNC</span>
            <span>CAPACITY: 10,000+ PATIENTS/DAY</span>
            <span>Uptime: 99.999%</span>
            <span>SECURITY: BIOMETRIC AUTH</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Hospital <span class="gradient-tech-text">Tech Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-bed"></i>
                <h4>Bed Inventory Hub</h4>
                <p>Real-time visual map of all hospital beds across multiple specialties with automated discharge/admission workflows.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-microscope"></i>
                <h4>Lab Info System (LIS)</h4>
                <p>Digital integration with lab hardware for automated test result syncing directly into the patient's EMR profile.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-procedures"></i>
                <h4>OT Resource Manager</h4>
                <p>Intelligent scheduling module for Operation Theaters that manages surgeon time, staff shifts, and equipment availability.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-ambulance"></i>
                <h4>Emergency Dispatch</h4>
                <p>Integrated ambulance tracking and trauma-response protocol manager for rapid emergency admissions.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-boxes"></i>
                <h4>Pharmacy Inventory</h4>
                <p>Smart inventory engine for hospital pharmacies with automated low-stock alerts and expiration tracking.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-user-shield"></i>
                <h4>Compliance Engine</h4>
                <p>Automated auditing module that ensures all data entries meet NABH/JCI accreditation standards.</p>
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
                        <td>System Architecture</td>
                        <td>Monolithic / On-Prem</td>
                        <td><i class="fas fa-check-circle check-v"></i> Cloud-Native Microservices</td>
                    </tr>
                    <tr>
                        <td>Inter-Dept Sync</td>
                        <td>Manual / Delayed</td>
                        <td><i class="fas fa-check-circle check-v"></i> Real-time (Event Driven)</td>
                    </tr>
                    <tr>
                        <td>Disaster Recovery</td>
                        <td>Basic Backups</td>
                        <td><i class="fas fa-check-circle check-v"></i> Geo-Redundant Mirroring</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
