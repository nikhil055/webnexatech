<?php 
$page_title = 'Candidate Management Engineering | WebNexa';
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
                    <div class="tech-badge">Candidate Experience v2.0</div>
                    <h1 class="display-3 fw-900 mb-4">Candidate <br> <span class="gradient-tech-text">Management</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-engagement talent workflows. We deploy automated skill assessment pipelines, biometric profile verification, and hyper-personalized job feeds.</p>
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
            <span>PROFILES: 100% ENCRYPTED</span>
            <span>VERIFICATION: BLOCKCHAIN-READY</span>
            <span>Uptime: 99.999%</span>
            <span>ENGAGEMENT: +45% INCREASE</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Candidate <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-certificate"></i>
                <h4>Skill Verification</h4>
                <p>Integrated assessment engine that issues digital badges for verified technical skills, increasing recruiter trust by 70%.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-clock"></i>
                <h4>Auto-Scheduler</h4>
                <p>One-click interview scheduling module that syncs with both recruiter and candidate calendars via Google/Outlook API.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-id-card"></i>
                <h4>Biometric Verify</h4>
                <p>High-security profile verification using face-match and document scanning to prevent fake profile creation.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-lightbulb"></i>
                <h4>Career Roadmap</h4>
                <p>AI-driven career pathing module that suggests skills the candidate should learn to land their "Dream Job."</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-comment-dots"></i>
                <h4>Engagement Bot</h4>
                <p>Automated conversational bot that keeps candidates updated on their application status 24/7.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-briefcase"></i>
                <h4>One-Click Apply</h4>
                <p>Streamlined application workflow that utilizes the candidate's master profile to apply in under 5 seconds.</p>
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
                        <td>Profile Security</td>
                        <td>Basic Database</td>
                        <td><i class="fas fa-check-circle check-v"></i> End-to-End Encrypted</td>
                    </tr>
                    <tr>
                        <td>Interview Sync</td>
                        <td>Manual Emailing</td>
                        <td><i class="fas fa-check-circle check-v"></i> Real-time API Sync</td>
                    </tr>
                    <tr>
                        <td>Verification</td>
                        <td>Self-Declared</td>
                        <td><i class="fas fa-check-circle check-v"></i> Verified Credentials</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
