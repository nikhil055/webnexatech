<?php 
$page_title = 'ROI-Led SEO Services | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .seo-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #ff3d00, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 61, 0, 0.1); border: 1px solid rgba(255, 61, 0, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #ff3d00; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-seo-text { background: linear-gradient(90deg, #ff3d00, #ff8e53); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #ff3d00; transform: translateY(-10px); background: rgba(255, 61, 0, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(255, 61, 0, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #ff3d00, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #ff3d00; border-radius: 50%; box-shadow: 0 0 20px #ff3d00; z-index: 5; }
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
    <div class="web-fixed-bg" id="seo-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Search Engine Optimization</div>
            <h1 data-aos="zoom-in">Dominating the <br> <span class="gradient-seo-text">Search Frontier</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We don't just "rank" keywords; we dominate market share. Our data-led SEO strategies turn organic search into your most powerful revenue engine.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Search <br> <span class="gradient-seo-text">Growth Engine</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Semantic Logic Mapping</h5>
                    <p>Engineering topical clusters and entity associations to align with Google's NLP algorithms.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Technical Hardening</h5>
                    <p>Repairing crawl bottlenecks, JS render issues, and optimizing sub-second Core Web Vitals.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Authority Cultivation</h5>
                    <p>Acquiring Tier-1 digital PR links and niche-relevant signals to build immense domain trust.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Adaptive Optimization</h5>
                    <p>Continuous real-time refinement based on live SERP movement and algorithm updates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPABILITIES -->
    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">SEO Engineering <span class="gradient-seo-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                    <h4>Topical <br> Authority</h4>
                    <p>Building content ecosystems that search engines recognize as niche category leaders.</p>
                    <ul class="cap-feat-list"><li>Cluster Logic</li><li>NLP Driven</li><li>Entity SEO</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-server"></i></div>
                    <h4>Infrastructure <br> SEO</h4>
                    <p>Optimizing server-side logic and crawl paths for 100% technical indexability.</p>
                    <ul class="cap-feat-list"><li>Core Vitals</li><li>Schema v3</li><li>Crawl Logic</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-link"></i></div>
                    <h4>Authority <br> Vault</h4>
                    <p>Acquiring high-power Tier-1 backlinks through data-driven digital PR protocols.</p>
                    <ul class="cap-feat-list"><li>Digital PR</li><li>Niche Stacks</li><li>Wiki Links</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Generic SEO vs <br> <span class="gradient-seo-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Agency</span><span style="color:#ff3d00;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Focus</span><span class="comp-val">Keyword Counts</span><span class="comp-val best"><i class="fas fa-bolt"></i> Market Share & Revenue</span></div>
                <div class="comp-row"><span>Technical</span><span class="comp-val">Basic Tags Only</span><span class="comp-val best"><i class="fas fa-microchip"></i> Architectural Hardening</span></div>
                <div class="comp-row"><span>Content</span><span class="comp-val">Keyword Stuffing</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Semantic NLP Engines</span></div>
                <div class="comp-row" style="border:none;"><span>Reporting</span><span class="comp-val">Monthly Rank PDF</span><span class="comp-val best"><i class="fas fa-desktop"></i> Live ROI Analytics</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #ff3d00; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 ALGORITHM INTEGRITY MONITORING ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: GOOGLE SYNCED</div>
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