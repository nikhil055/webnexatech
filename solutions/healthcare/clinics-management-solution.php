<?php 
$page_title = 'Clinic Management Engineering | WebNexa';
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
                    <div class="tech-badge">Health-Tech Protocol v2.0</div>
                    <h1 class="display-3 fw-900 mb-4">Clinic Management <br> <span class="gradient-tech-text">Systems</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-precision clinic workflows. We deploy automated appointment triaging, HL7-compliant data exchange, and end-to-end patient lifecycle management.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">Compliance Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>COMPLIANCE: HIPAA / GDPR</span>
            <span>DATA: HL7 / FHIR SYNC</span>
            <span>Uptime: 99.999%</span>
            <span>ENCRYPTION: AES-256</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Clinic <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-calendar-alt"></i>
                <h4>Smart Scheduler</h4>
                <p>Algorithmic appointment engine that minimizes patient wait-times and optimizes doctor availability using predictive modeling.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-file-medical"></i>
                <h4>Digital EMR</h4>
                <p>Encrypted Electronic Medical Records module with version-controlled patient history and instant medical data retrieval.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-video"></i>
                <h4>Telehealth Node</h4>
                <p>Integrated WebRTC-based video consultation suite with encrypted recording and live vitals dashboard.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-pills"></i>
                <h4>e-Prescription</h4>
                <p>Automated digital prescription engine that syncs with local pharmacy networks and verifies drug interactions.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-credit-card"></i>
                <h4>Automated Billing</h4>
                <p>Unified billing module that handles insurance claims processing, digital payments, and automated invoice generation.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-bell"></i>
                <h4>Patient Notify</h4>
                <p>Omnichannel notification system for appointment reminders, lab results, and medication alerts via SMS/WhatsApp.</p>
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
                        <td>Data Security</td>
                        <td>Basic SSL</td>
                        <td><i class="fas fa-check-circle check-v"></i> HIPAA Compliant AES-256</td>
                    </tr>
                    <tr>
                        <td>Interoperability</td>
                        <td>Proprietary / Closed</td>
                        <td><i class="fas fa-check-circle check-v"></i> HL7 / FHIR Standard</td>
                    </tr>
                    <tr>
                        <td>Patient Triage</td>
                        <td>Manual Check-in</td>
                        <td><i class="fas fa-check-circle check-v"></i> AI-Automated Triage</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
