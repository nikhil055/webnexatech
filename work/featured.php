<?php 
$page_title = 'Featured Deployments | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .featured-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .featured-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .featured-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }

    /* FEATURED ROWS */
    .f-row { display: flex; align-items: center; gap: 80px; padding: 100px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .f-row:nth-child(even) { flex-direction: row-reverse; }
    
    .f-img-wrap { flex: 1.2; position: relative; border-radius: 50px; overflow: hidden; border: 1px solid rgba(255,255,255,0.08); box-shadow: 0 40px 100px rgba(0,0,0,0.5); }
    .f-img-wrap img { width: 100%; height: 550px; object-fit: cover; filter: brightness(0.7); transition: 0.6s; }
    .f-row:hover .f-img-wrap img { filter: brightness(1); transform: scale(1.02); }

    .f-content { flex: 1; }
    .f-metrics { display: flex; gap: 30px; margin-bottom: 40px; font-family: 'Fira Code', monospace; }
    .f-metric-item { display: flex; flex-direction: column; }
    .f-metric-val { font-size: 24px; font-weight: 900; color: rgb(216, 115, 255); }
    .f-metric-label { font-size: 10px; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; }

    .f-content h2 { font-size: 48px; font-weight: 900; letter-spacing: -2px; line-height: 1.1; margin-bottom: 30px; }
    .f-content p { color: #94a3b8; font-size: 18px; line-height: 1.8; margin-bottom: 40px; }

    @media (max-width: 991px) { .f-row, .f-row:nth-child(even) { flex-direction: column; text-align: center; gap: 40px; } .f-metrics { justify-content: center; } }
</style>

<div class="featured-main">
    <section class="featured-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">The Hall of Fame</div>
            <h1 data-aos="zoom-in">Elite Project <br> <span class="gradient-tech-text">Showcase</span></h1>
        </div>
    </section>

    <div class="container">
        <!-- PROJECT 1 -->
        <div class="f-row" data-aos="fade-up">
            <div class="f-img-wrap">
                <img src="<?php echo BASE_URL; ?>assets/images/work/project-1.jpg" alt="Logistics">
            </div>
            <div class="f-content">
                <div class="f-metrics">
                    <div class="f-metric-item"><span class="f-metric-val">99.9%</span><span class="f-metric-label">Uptime</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">42ms</span><span class="f-metric-label">Latency</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">10X</span><span class="f-metric-label">Scalability</span></div>
                </div>
                <h2>Global Logistics <br> <span class="gradient-tech-text">Neural Core</span></h2>
                <p>Architected a high-frequency logistics backbone using distributed microservices. Managed real-time routing for 5,000+ global assets with sub-second data synchronization.</p>
                <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="btn btn-style-one">Deep Dive Analysis</a>
            </div>
        </div>

        <!-- PROJECT 2 -->
        <div class="f-row" data-aos="fade-up">
            <div class="f-img-wrap">
                <img src="<?php echo BASE_URL; ?>assets/images/work/project-2.jpg" alt="AI Chatbot">
            </div>
            <div class="f-content">
                <div class="f-metrics">
                    <div class="f-metric-item"><span class="f-metric-val">85%</span><span class="f-metric-label">Automation</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">1.2M</span><span class="f-metric-label">Queries/Mo</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">0.4s</span><span class="f-metric-label">Response</span></div>
                </div>
                <h2>Autonomous <br> <span class="gradient-tech-text">Support AI</span></h2>
                <p>Integrated a custom LLM-based customer intelligence engine. Reduced human-agent workload by 85% while increasing user satisfaction scores by 40% globally.</p>
                <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="btn btn-style-one">Deep Dive Analysis</a>
            </div>
        </div>

        <!-- PROJECT 3 -->
        <div class="f-row" data-aos="fade-up">
            <div class="f-img-wrap">
                <img src="<?php echo BASE_URL; ?>assets/images/work/project-3.jpg" alt="Healthcare">
            </div>
            <div class="f-content">
                <div class="f-metrics">
                    <div class="f-metric-item"><span class="f-metric-val">HIPAA</span><span class="f-metric-label">Certified</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">Zero</span><span class="f-metric-label">Breaches</span></div>
                    <div class="f-metric-item"><span class="f-metric-val">2M+</span><span class="f-metric-label">Patients</span></div>
                </div>
                <h2>Next-Gen <br> <span class="gradient-tech-text">Health Portal</span></h2>
                <p>Engineered a secure, encrypted patient care ecosystem. Unified electronic health records across 50+ clinics with biometric authentication and real-time syncing.</p>
                <a href="<?php echo BASE_URL; ?>work/case-studies.php" class="btn btn-style-one">Deep Dive Analysis</a>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
