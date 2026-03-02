<?php 
$page_title = 'Hyper-Local SEO Dominance | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .seo-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #2979ff, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(41, 121, 255, 0.1); border: 1px solid rgba(41, 121, 255, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #2979ff; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-local-text { background: linear-gradient(90deg, #2979ff, #00b0ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #2979ff; transform: translateY(-10px); background: rgba(41, 121, 255, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(41, 121, 255, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #2979ff, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #2979ff; border-radius: 50%; box-shadow: 0 0 20px #2979ff; z-index: 5; }
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
    <div class="web-fixed-bg" id="local-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Geo-Targeted Visibility</div>
            <h1 data-aos="zoom-in">Hyper-Local <br> <span class="gradient-local-text">SEO Dominance</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We engineer specialized local signals to ensure your business dominates the "Near Me" searches and map packs in every city.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Local <br> <span class="gradient-local-text">Visibility Flow</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>GBP Hardening</h5>
                    <p>Optimizing Google Business Profiles with high-authority metadata and category-logic sync.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>NAP Consistency Vault</h5>
                    <p>Building a robust network of consistent Name, Address, and Phone citations across top directories.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>City Landing Hubs</h5>
                    <p>Engineering localized landing pages with city-specific schema and intent-led copy.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>GEO-Fenced Reporting</h5>
                    <p>Tracking lead attribution from specific city zones to verify local ROI and market reach.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Local Mastery <span class="gradient-local-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-map-location-dot"></i></div>
                    <h4>GMB / GBP <br> Optimization</h4>
                    <p>Deep-layer profile optimization to capture the top 3 spots in local map packs.</p>
                    <ul class="cap-feat-list"><li>GEO-Fencing</li><li>Post Logic</li><li>Keyword Sync</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-list-check"></i></div>
                    <h4>Citation <br> Engineering</h4>
                    <p>Building trusted signals across high-authority local portals and niche business directories.</p>
                    <ul class="cap-feat-list"><li>NAP Audit</li><li>Niche Stacks</li><li>Clean Sync</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-route"></i></div>
                    <h4>Localized <br> Landing Hubs</h4>
                    <p>Engineering city pages with localized metadata and conversion-led schema protocols.</p>
                    <ul class="cap-feat-list"><li>City Schema</li><li>GEO Pages</li><li>Mobile Local</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard Listing vs <br> <span class="gradient-local-text">WebNexa Local Elite</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard List</span><span style="color:#2979ff;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Map Ranking</span><span class="comp-val">Random Visibility</span><span class="comp-val best"><i class="fas fa-bolt"></i> Top 3 Guaranteed Logic</span></div>
                <div class="comp-row"><span>Citations</span><span class="comp-val">Duplicate-Heavy</span><span class="comp-val best"><i class="fas fa-microchip"></i> 100% Clean NAP Vault</span></div>
                <div class="comp-row"><span>Reviews</span><span class="comp-val">Passive Requests</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Strategic Velocity Flow</span></div>
                <div class="comp-row" style="border:none;"><span>Reporting</span><span class="comp-val">Call Logic Only</span><span class="comp-val best"><i class="fas fa-desktop"></i> Full Lead Source Map</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #2979ff; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 LOCAL SIGNAL MONITORING ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: CITY DOMINANT</div>
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