<?php 
$page_title = 'Technical SEO Audit | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .seo-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #00e676, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(0, 230, 118, 0.1); border: 1px solid rgba(0, 230, 118, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #00e676; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-audit-text { background: linear-gradient(90deg, #00e676, #1de9b6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #00e676; transform: translateY(-10px); background: rgba(0, 230, 118, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(0, 230, 118, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #00e676, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #00e676; border-radius: 50%; box-shadow: 0 0 20px #00e676; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    @media (max-width: 1199px) { .cap-grid-massive { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } }
</style>

<div class="seo-main">
    <div class="web-fixed-bg" id="audit-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Infrastructure Integrity</div>
            <h1 data-aos="zoom-in">Deep Technical <br> <span class="gradient-audit-text">SEO Audit Core</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Identifying and repairing architectural bottlenecks, crawl errors, and performance drags hindering your search rankings.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Audit Protocol</div>
                <h2 class="section-title">The Technical <br> <span class="gradient-audit-text">Scanning Flow</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Full System Crawl</h5>
                    <p>High-fidelity technical scan of every endpoint to map 4xx errors, redirect loops, and crawl logic.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Infrastructure Audit</h5>
                    <p>Analyzing server response TTFB, Core Web Vitals, and SSL/HTTPS encryption integrity.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>On-Page Hardening</h5>
                    <p>Injecting advanced JSON-LD Schema v3 and repairing metadata architectural gaps.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Crawl Budget Lock</h5>
                    <p>Optimizing robots.txt and sitemap hierarchy to prioritize high-value ROI pages for Googlebot.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Technical Mastery <span class="gradient-audit-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-spider"></i></div>
                    <h4>Crawl Budget <br> Optimization</h4>
                    <p>Ensuring search engines find your most valuable pages without wasting resources.</p>
                    <ul class="cap-feat-list"><li>Robots Logic</li><li>Redirect Fix</li><li>404 Cleanup</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-bolt"></i></div>
                    <h4>Core Web Vitals <br> Engineering</h4>
                    <p>Benchmarking LCP, FID, and CLS scores for sub-second mobile performance.</p>
                    <ul class="cap-feat-list"><li>TTFB Sync</li><li>Image Logic</li><li>JS Deferral</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-code"></i></div>
                    <h4>Advanced <br> Schema Stacks</h4>
                    <p>Implementing organization and product schemas to dominate SERP real estate.</p>
                    <ul class="cap-feat-list"><li>JSON-LD</li><li>FAQ Mark</li><li>Review Logic</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Automatic Audit vs <br> <span class="gradient-audit-text">WebNexa Manual Deep-Dive</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Tool</span><span style="color:#00e676;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Accuracy</span><span class="comp-val">High False Positives</span><span class="comp-val best"><i class="fas fa-bolt"></i> Engineering-Verified</span></div>
                <div class="comp-row"><span>Logic</span><span class="comp-val">Surface Scans</span><span class="comp-val best"><i class="fas fa-microchip"></i> Architectural Root-Cause</span></div>
                <div class="comp-row"><span>Speed</span><span class="comp-val">Basic CSS/JS scan</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Full Rendering Path Audit</span></div>
                <div class="comp-row" style="border:none;"><span>Action</span><span class="comp-val">Generic Suggestions</span><span class="comp-val best"><i class="fas fa-desktop"></i> Direct Code Implementations</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #00e676; color:#000;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 TECHNICAL PERFORMANCE GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.1); padding:10px 25px; border-radius:50px;">STATUS: INFRASTRUCTURE SECURED</div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
...
            bg.appendChild(drop);
        }
    });
</script>

<?php include_once __DIR__ . '/../footer.php'; ?>