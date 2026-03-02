<?php 
$page_title = 'Job Portal Engineering | WebNexa';
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
                    <div class="tech-badge">Talent-Tech Protocol v3.5</div>
                    <h1 class="display-3 fw-900 mb-4">Job Portal <br> <span class="gradient-tech-text">Engineering</span></h1>
                    <p class="lead opacity-75 mb-5">Architecting high-frequency talent marketplaces. We deploy AI-based matching engines, automated ATS pipelines, and hyper-scalable candidate indexing.</p>
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
            <span>INDEXING: ELASTICSEARCH / SOLR</span>
            <span>MATCHING: AI-DRIVEN NEURAL NET</span>
            <span>Uptime: 99.99%</span>
            <span>DATA: ENCRYPTED CV STORAGE</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Job Portal <span class="gradient-tech-text">Core Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-microchip"></i>
                <h4>AI-Matching Engine</h4>
                <p>Proprietary algorithm that calculates a "Suitability Score" by comparing candidate skills, experience, and intent against job descriptions.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-file-import"></i>
                <h4>Resume Parser</h4>
                <p>High-speed data extraction module that converts PDF/Word resumes into structured JSON data with 98% accuracy.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-project-diagram"></i>
                <h4>Integrated ATS</h4>
                <p>Full-stack Applicant Tracking System with customizable Kanban boards for stage-by-stage candidate progression.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-search"></i>
                <h4>Semantic Search</h4>
                <p>Elasticsearch-powered search bar that understands natural language queries and intent, not just keywords.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-shield-alt"></i>
                <h4>Enterprise Security</h4>
                <p>GDPR-compliant candidate data protection with granular permission levels for recruiters and hiring managers.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-chart-line"></i>
                <h4>Hiring Analytics</h4>
                <p>Real-time dashboard for employers to track time-to-hire, source effectiveness, and diversity metrics.</p>
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
                        <td>Search Speed</td>
                        <td>3 - 5 Seconds</td>
                        <td><i class="fas fa-check-circle check-v"></i> < 200ms (Elasticsearch)</td>
                    </tr>
                    <tr>
                        <td>CV Indexing</td>
                        <td>Relational DB Only</td>
                        <td><i class="fas fa-check-circle check-v"></i> Vector-Embeddings</td>
                    </tr>
                    <tr>
                        <td>Match Logic</td>
                        <td>Basic Keywords</td>
                        <td><i class="fas fa-check-circle check-v"></i> AI Contextual Matching</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
