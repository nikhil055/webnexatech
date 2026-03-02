<?php 
$page_title = 'Employer Dashboard Engineering | WebNexa';
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
                    <div class="tech-badge">Employer Command Center v4.0</div>
                    <h1 class="display-3 fw-900 mb-4">Recruiter <br> <span class="gradient-tech-text">Dashboards</span></h1>
                    <p class="lead opacity-75 mb-5">Engineering high-velocity hiring hubs. We deploy predictive funnel analytics, automated offer-letter generation, and integrated video interviewing suites for enterprise recruiters.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">Efficiency Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>PIPELINE: REAL-TIME KANBAN</span>
            <span>ANALYTICS: ML-POWERED INSIGHTS</span>
            <span>Uptime: 99.999%</span>
            <span>DATA: MULTI-REGION REPLICATION</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Employer <span class="gradient-tech-text">Logic Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-filter"></i>
                <h4>Predictive Funnels</h4>
                <p>Advanced data module that predicts time-to-hire and identifies pipeline bottlenecks using historical hiring patterns.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-video"></i>
                <h4>Video Interviewing</h4>
                <p>Integrated WebRTC suite allowing recruiters to conduct, record, and score video interviews directly within the dashboard.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-file-signature"></i>
                <h4>Offer Management</h4>
                <p>Automated offer-letter generation with integrated e-signature support and pre-boarding document tracking.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-users-cog"></i>
                <h4>Collaborative Hiring</h4>
                <p>Team-based evaluation module where multiple interviewers can leave feedback and "Upvote" candidates.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-bullhorn"></i>
                <h4>Omnichannel Posting</h4>
                <p>Multi-channel job distribution engine that posts to 50+ job boards with a single click and tracks source ROI.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-database"></i>
                <h4>Talent Pool CRM</h4>
                <p>Intelligent database that re-surfaces "Silver Medalist" candidates for future roles using semantic matching.</p>
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
                        <td>Data Visualization</td>
                        <td>Static Tables</td>
                        <td><i class="fas fa-check-circle check-v"></i> Interactive D3.js Charts</td>
                    </tr>
                    <tr>
                        <td>Communication</td>
                        <td>Manual Emailing</td>
                        <td><i class="fas fa-check-circle check-v"></i> Automated Slack/Email</td>
                    </tr>
                    <tr>
                        <td>Decision Support</td>
                        <td>Gut Feeling</td>
                        <td><i class="fas fa-check-circle check-v"></i> AI Scorecard Scoring</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
